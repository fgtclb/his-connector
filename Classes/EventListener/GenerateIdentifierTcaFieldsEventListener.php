<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\EventListener;

use FGTCLB\HisConnector\Configuration\ConfigurationRegistry;
use FGTCLB\HisConnector\Configuration\MappingConfiguration;
use TYPO3\CMS\Core\Attribute\AsEventListener;
use TYPO3\CMS\Core\Configuration\Event\BeforeTcaOverridesEvent;

/**
 * Goes through all available HIS sync configurations, finds mappings that don't
 * specify a custom identifier field and creates the default sync identifier fields
 * where necessary.
 */
#[AsEventListener(
    identifier: 'his-connector/generate-identifier-tca-fields',
)]
final readonly class GenerateIdentifierTcaFieldsEventListener
{
    public function __construct(private ConfigurationRegistry $configurationRegistry) {}

    public function __invoke(BeforeTcaOverridesEvent $event): void
    {
        $tables = ['sys_file_metadata' => true];
        foreach ($this->configurationRegistry->getValid() as $config) {
            foreach ($config->mapping as $mappingConfig) {
                if ($mappingConfig->usesDefaultIdentifierField()) {
                    $tables[$mappingConfig->tableName] = true;
                }
            }
        }
        $tca = $event->getTca();
        foreach (array_keys($tables) as $table) {
            $tca[$table]['columns'][MappingConfiguration::DEFAULT_IDENTIFIER_FIELD] = [
                'label' => 'HIS Sync Identifier',
                'config' => [
                    'type' => 'input',
                    'readOnly' => true,
                    'searchable' => false,
                    'nullable' => true,
                    'default' => null,
                ],
            ];
        }
        $event->setTca($tca);
    }
}
