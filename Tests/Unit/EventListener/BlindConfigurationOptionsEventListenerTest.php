<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\EventListener;

use FGTCLB\HisConnector\EventListener\BlindConfigurationOptionsEventListener;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\CMS\Lowlevel\Event\ModifyBlindedConfigurationOptionsEvent;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class BlindConfigurationOptionsEventListenerTest extends UnitTestCase
{
    #[Test]
    public function soapCredentialsAreBlindedForConfVarsProvider(): void
    {
        $event = new ModifyBlindedConfigurationOptionsEvent([], 'confVars');
        (new BlindConfigurationOptionsEventListener())($event);
        $this->assertSame(
            [
                'TYPO3_CONF_VARS' => [
                    'EXTENSIONS' => [
                        'his_connector' => [
                            'soap' => [
                                'urlPrefix' => '******',
                                'username' => '******',
                                'password' => '******',
                            ],
                        ],
                    ],
                ],
            ],
            $event->getBlindedConfigurationOptions(),
        );
    }

    #[Test]
    public function alreadyBlindedOptionsAreKept(): void
    {
        $event = new ModifyBlindedConfigurationOptionsEvent(
            [
                'TYPO3_CONF_VARS' => [
                    'DB' => [
                        'Connections' => [
                            'Default' => [
                                'password' => '******',
                            ],
                        ],
                    ],
                ],
            ],
            'confVars',
        );
        (new BlindConfigurationOptionsEventListener())($event);
        $blindedOptions = $event->getBlindedConfigurationOptions();
        $this->assertSame('******', $blindedOptions['TYPO3_CONF_VARS']['DB']['Connections']['Default']['password']);
        $this->assertSame('******', $blindedOptions['TYPO3_CONF_VARS']['EXTENSIONS']['his_connector']['soap']['password']);
    }

    #[Test]
    public function otherProvidersAreNotModified(): void
    {
        $event = new ModifyBlindedConfigurationOptionsEvent([], 'sitesYamlConfiguration');
        (new BlindConfigurationOptionsEventListener())($event);
        $this->assertSame([], $event->getBlindedConfigurationOptions());
    }
}
