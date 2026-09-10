<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional\Configuration;

use FGTCLB\HisConnector\Configuration\ConfigurationRegistry;
use FGTCLB\HisConnector\Configuration\InvalidSyncConfiguration;
use FGTCLB\HisConnector\Configuration\SyncConfiguration;
use FGTCLB\HisConnector\Exception\InvalidConfigurationException;
use FGTCLB\HisConnector\Tests\Functional\AbstractHisConnectorTestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\CMS\Core\Configuration\Loader\Exception\YamlParseException;

final class ConfigurationRegistryTest extends AbstractHisConnectorTestCase
{
    protected array $testExtensionsToLoad = [
        'fgtclb/his-connector',
        'typo3conf/ext/his_connector/Tests/Functional/Configuration/Fixtures/Extensions/test_configuration_registry',
    ];

    protected bool $initializeDatabase = false;

    #[Test]
    public function registryFindsFiles(): void
    {
        /** @var ConfigurationRegistry */
        $subject = $this->get(ConfigurationRegistry::class);
        $validFiles = array_map(fn($config) => $config->originalFile, $subject->getValid());
        $invalidFiles = array_map(fn($config) => $config->originalFile, $subject->getInvalid());
        $this->assertEquals([
            'EXT:his_connector/Configuration/HisConnector/academic_persons.yaml',
            'EXT:his_connector/Configuration/HisConnector/fe_users.yaml',
            'EXT:his_connector/Configuration/HisConnector/tt_address.yaml',
            'EXT:test_configuration_registry/Configuration/HisConnector/valid.yaml',
        ], $validFiles, 'valid files');
        $this->assertEquals([
            'EXT:test_configuration_registry/Configuration/HisConnector/invalid_config.yaml',
            'EXT:test_configuration_registry/Configuration/HisConnector/invalid_yaml.yaml',
        ], $invalidFiles, 'invalid files');
    }

    #[Test]
    public function registryInstantiatesValidConfig(): void
    {
        /** @var ConfigurationRegistry */
        $subject = $this->get(ConfigurationRegistry::class);
        $config = $subject->getByPath('EXT:test_configuration_registry/Configuration/HisConnector/valid.yaml');
        $this->assertInstanceOf(SyncConfiguration::class, $config);
        $this->assertSame('EXT:test_configuration_registry/Configuration/HisConnector/valid.yaml', $config->originalFile);
    }

    /**
     * @return array{file: string, expectedException: class-string}[]
     */
    public static function registryInstantiatesInvalidConfigDataProvider(): array
    {
        return [
            'invalid_yaml.yaml' => [
                'file' => 'EXT:test_configuration_registry/Configuration/HisConnector/invalid_yaml.yaml',
                'expectedException' => YamlParseException::class,
            ],
            'invalid_config.yaml' => [
                'file' => 'EXT:test_configuration_registry/Configuration/HisConnector/invalid_config.yaml',
                'expectedException' => InvalidConfigurationException::class,
            ],
        ];
    }

    /**
     * @param class-string $expectedException
     */
    #[Test]
    #[DataProvider('registryInstantiatesInvalidConfigDataProvider')]
    public function registryInstantiatesInvalidConfig(string $file, string $expectedException): void
    {
        /** @var ConfigurationRegistry */
        $subject = $this->get(ConfigurationRegistry::class);
        $config = $subject->getByPath($file);
        $this->assertInstanceOf(InvalidSyncConfiguration::class, $config);
        $this->assertSame($file, $config->originalFile);
        $this->assertInstanceOf($expectedException, $config->exception);
    }
}
