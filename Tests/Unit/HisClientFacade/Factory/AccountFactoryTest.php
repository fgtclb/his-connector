<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\HisClientFacade\Factory;

use FGTCLB\HisClient\AccountService\Struct\CompleteAccount;
use FGTCLB\HisClientFacade\Factory\AccountFactory;
use FGTCLB\HisClientFacade\Utility\DateTimeConverter;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class AccountFactoryTest extends UnitTestCase
{
    /**
     * @return mixed[]
     */
    public static function createAccountDataProvider(): array
    {
        return [
            'all fields filled' => [
                'id' => 123,
                'username' => 'foo',
                'isLdapAccount' => true,
                'validFrom' => '2026-01-01',
                'validTo' => '2026-02-01',
                'expectedIsLdapAccount' => true,
                'expectedValidFrom' => new \DateTimeImmutable('2026-01-01'),
                'expectedValidTo' => new \DateTimeImmutable('2026-02-01'),
            ],
            'minimal filled' => [
                'id' => 123,
                'username' => 'foo',
                'isLdapAccount' => null,
                'validFrom' => '1900-01-01',
                'validTo' => '2100-12-31',
                'expectedIsLdapAccount' => false,
                'expectedValidFrom' => null,
                'expectedValidTo' => null,
            ],
        ];
    }

    #[Test]
    #[DataProvider('createAccountDataProvider')]
    public function createAccount(
        int $id,
        string $username,
        ?bool $isLdapAccount,
        string $validFrom,
        string $validTo,
        bool $expectedIsLdapAccount,
        ?\DateTimeInterface $expectedValidFrom,
        ?\DateTimeInterface $expectedValidTo,
    ): void {
        $subject = new AccountFactory(new DateTimeConverter());
        $result = $subject->create(
            new CompleteAccount(
                $id,
                false,
                '',
                343,
                $username,
                $validFrom,
                $validTo,
                null,
                null,
                null,
                null,
                $isLdapAccount,
            ),
        );
        $this->assertSame((string)$id, $result->getIdentifier());
        $this->assertSame($id, $result->id);
        $this->assertSame($username, $result->username);
        $this->assertSame($expectedIsLdapAccount, $result->isLdapAccount);
        $this->assertEquals($expectedValidFrom, $result->validFrom);
        $this->assertEquals($expectedValidFrom, $result->validFrom());
        $this->assertEquals($expectedValidTo, $result->validTo);
        $this->assertEquals($expectedValidTo, $result->validTo());
    }
}
