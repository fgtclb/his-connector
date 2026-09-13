<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\EventListener;

use TYPO3\CMS\Core\Attribute\AsEventListener;
use TYPO3\CMS\Lowlevel\Event\ModifyBlindedConfigurationOptionsEvent;

/**
 * Blinds the HIS SOAP service credentials in the configuration module
 * (EXT:lowlevel), like TYPO3 does for the database connection credentials.
 */
#[AsEventListener(
    identifier: 'his-connector/blind-configuration-options',
)]
final readonly class BlindConfigurationOptionsEventListener
{
    public function __invoke(ModifyBlindedConfigurationOptionsEvent $event): void
    {
        if ($event->getProviderIdentifier() !== 'confVars') {
            return;
        }
        $options = $event->getBlindedConfigurationOptions();
        $options['TYPO3_CONF_VARS']['EXTENSIONS']['his_connector']['soap']['urlPrefix'] = '******';
        $options['TYPO3_CONF_VARS']['EXTENSIONS']['his_connector']['soap']['username'] = '******';
        $options['TYPO3_CONF_VARS']['EXTENSIONS']['his_connector']['soap']['password'] = '******';
        $event->setBlindedConfigurationOptions($options);
    }
}
