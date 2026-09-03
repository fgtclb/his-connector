<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional\Configuration;

use FGTCLB\HisConnector\Tests\Functional\AbstractHisConnectorTestCase;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\CMS\Core\Schema\TcaSchemaFactory;

final class GenerateIdentifierTcaFieldsTest extends AbstractHisConnectorTestCase
{
    protected array $testExtensionsToLoad = [
        'fgtclb/his-connector',
        'typo3conf/ext/his_connector/Tests/Functional/Configuration/Fixtures/Extensions/test_configuration_registry',
    ];

    protected bool $initializeDatabase = false;

    #[Test]
    public function identifierTcaFieldIsCreated(): void
    {
        /** @var TcaSchemaFactory */
        $tcaSchemaFactory = $this->get(TcaSchemaFactory::class);
        $feUsersSchema = $tcaSchemaFactory->get('fe_users');
        $this->assertTrue($feUsersSchema->hasField('hisconnector_identifier'));
    }

    #[Test]
    public function identifierTcaFieldIsNotCreatedIfFieldIsSpecified(): void
    {
        /** @var TcaSchemaFactory */
        $tcaSchemaFactory = $this->get(TcaSchemaFactory::class);
        $beUsersSchema = $tcaSchemaFactory->get('be_users');
        $this->assertFalse($beUsersSchema->hasField('hisconnector_identifier'));
    }
}
