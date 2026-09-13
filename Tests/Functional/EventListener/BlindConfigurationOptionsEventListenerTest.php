<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional\EventListener;

use FGTCLB\HisConnector\Tests\Functional\AbstractHisConnectorTestCase;
use PHPUnit\Framework\Attributes\Test;
use Psr\EventDispatcher\EventDispatcherInterface;
use TYPO3\CMS\Lowlevel\ConfigurationModuleProvider\GlobalVariableProvider;

final class BlindConfigurationOptionsEventListenerTest extends AbstractHisConnectorTestCase
{
    protected array $coreExtensionsToLoad = [
        'lowlevel',
    ];

    protected bool $initializeDatabase = false;

    #[Test]
    public function soapCredentialsAreBlindedInConfigurationModule(): void
    {
        $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['his_connector']['soap'] = [
            'urlPrefix' => 'https://his.example.com/qisserver/services2/',
            'username' => 'his-user',
            'password' => 'his-password',
            'timeout' => '5',
        ];
        $configuration = $this->createConfVarsProvider()->getConfiguration();
        $this->assertSame(
            [
                'password' => '******',
                'timeout' => '5',
                'urlPrefix' => '******',
                'username' => '******',
            ],
            $configuration['EXTENSIONS']['his_connector']['soap'],
        );
        $renderedConfiguration = (string)json_encode($configuration);
        $this->assertStringNotContainsString('his.example.com', $renderedConfiguration);
        $this->assertStringNotContainsString('his-user', $renderedConfiguration);
        $this->assertStringNotContainsString('his-password', $renderedConfiguration);
    }

    #[Test]
    public function soapCredentialsNotConfiguredAreNotAdded(): void
    {
        $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['his_connector']['soap'] = [
            'username' => 'his-user',
        ];
        $configuration = $this->createConfVarsProvider()->getConfiguration();
        $this->assertSame(
            [
                'username' => '******',
            ],
            $configuration['EXTENSIONS']['his_connector']['soap'],
        );
    }

    /**
     * Creates the "confVars" provider of the configuration module like EXT:lowlevel
     * registers it, but without the provider registry, which instantiates all
     * providers and requires a backend user for some of them.
     */
    private function createConfVarsProvider(): GlobalVariableProvider
    {
        $provider = new GlobalVariableProvider($this->get(EventDispatcherInterface::class));
        $provider([
            'identifier' => 'confVars',
            'label' => 'TYPO3_CONF_VARS',
            'globalVariableKey' => 'TYPO3_CONF_VARS',
        ]);
        return $provider;
    }
}
