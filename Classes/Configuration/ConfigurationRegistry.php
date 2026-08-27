<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Configuration;

use FGTCLB\HisConnector\Exception\InvalidConfigurationException;
use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;
use TYPO3\CMS\Core\Configuration\Loader\Exception\YamlParseException;
use TYPO3\CMS\Core\Configuration\Loader\YamlFileLoader;
use TYPO3\CMS\Core\Package\PackageManager;

/**
 * Discovers and constructs HIS sync configuration files. By convention,
 * these are located inside extensions in the Configuration/HisConnector/
 * folder and use the .yaml file extension.
 */
#[Autoconfigure(public: true)]
final readonly class ConfigurationRegistry
{
    private const CACHE_IDENTIFIER = 'his_sync_configurations';

    public function __construct(
        private YamlFileLoader $yamlFileLoader,
        private PackageManager $packageManager,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    /**
     * Returns a sync configuration object for the specified configuration
     * file. Note that this only works with specific paths using the EXT:
     * syntax.
     */
    public function getByPath(string $path): SyncConfiguration|InvalidSyncConfiguration|null
    {
        $configFiles = $this->collectAvailableConfigFiles();
        if (!in_array($path, $configFiles)) {
            return null;
        }
        return $this->createConfigurationFromFile($path);
    }

    /**
     * @return (SyncConfiguration|InvalidSyncConfiguration)[]
     */
    public function getAll(): array
    {
        if (!$this->cache->has(self::CACHE_IDENTIFIER)) {
            $configFiles = $this->collectAvailableConfigFiles();
            $configurations = [];
            foreach ($configFiles as $configFile) {
                $configurations[] = $this->createConfigurationFromFile($configFile);
            }
            $this->cache->set(self::CACHE_IDENTIFIER, $configurations);
        }
        return $this->cache->get(self::CACHE_IDENTIFIER);
    }

    /**
     * @return SyncConfiguration[]
     */
    public function getValid(): array
    {
        return array_values(array_filter(
            $this->getAll(),
            fn($config) => $config instanceof SyncConfiguration,
        ));
    }

    /**
     * @return InvalidSyncConfiguration[]
     */
    public function getInvalid(): array
    {
        return array_values(array_filter(
            $this->getAll(),
            fn($config) => $config instanceof InvalidSyncConfiguration,
        ));
    }

    private function createConfigurationFromFile(string $configFile): SyncConfiguration|InvalidSyncConfiguration
    {
        try {
            $yamlFile = $this->yamlFileLoader->load($configFile);
        } catch (YamlParseException $e) {
            return new InvalidSyncConfiguration($e, $configFile);
        }
        try {
            return SyncConfiguration::fromConfig($yamlFile, $configFile);
        } catch (InvalidConfigurationException $e) {
            return new InvalidSyncConfiguration($e, $configFile);
        }
    }

    /**
     * @return string[]
     */
    private function collectAvailableConfigFiles(): array
    {
        $packages = $this->packageManager->getActivePackages();
        $configFiles = [];
        foreach ($packages as $package) {
            $configPath = $package->getPackagePath() . 'Configuration/HisConnector';
            if (!is_dir($configPath)) {
                continue;
            }
            $configFilesInPackage = array_map(
                fn(string $path) => 'EXT:' . $package->getPackageKey() . '/' . str_replace($package->getPackagePath(), '', $path),
                glob($configPath . '/*.yaml') ?: [],
            );
            $configFiles = array_merge($configFiles, $configFilesInPackage);
        }
        return $configFiles;
    }
}
