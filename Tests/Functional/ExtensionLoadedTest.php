<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

final class ExtensionLoadedTest extends AbstractHisConnectorTestCase
{
    public static function expectedLoadedExtensionIdentifiers(): \Generator
    {
        yield 'composer package name: fgtclb/his-connector' => ['identifier' => 'fgtclb/his-connector'];
        yield 'extension key: his_connector' => ['identifier' => 'his_connector'];
    }

    #[DataProvider('expectedLoadedExtensionIdentifiers')]
    #[Test]
    public function verifyLoadedExtensionByIdentifier(string $identifier): void
    {
        $this->assertTrue(ExtensionManagementUtility::isLoaded($identifier), sprintf(
            '"%s" returns true using identifier "%s".',
            sprintf('%s::%s()', ExtensionManagementUtility::class, 'isLoaded'),
            $identifier,
        ));
    }
}
