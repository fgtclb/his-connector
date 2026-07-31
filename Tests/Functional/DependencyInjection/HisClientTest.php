<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional\DependencyInjection;

use FGTCLB\HisClient\AccountService\Service\Service as AccountService;
use FGTCLB\HisClient\AddressService\Service\Service as AddressService;
use FGTCLB\HisClient\FacilityService\Service\Service as FacilityService;
use FGTCLB\HisClient\KeyvalueService\Service\Service as KeyvalueService;
use FGTCLB\HisClient\MimedataService\Service\Service as MimedataService;
use FGTCLB\HisClient\OrgUnitService\Service\Service as OrgUnitService;
use FGTCLB\HisClient\PersonAddressService\Service\Service as PersonAddressService;
use FGTCLB\HisClient\PersonOrgunitService\Service\Service as PersonOrgunitService;
use FGTCLB\HisClient\PersonService\Service\Service as PersonService;
use FGTCLB\HisConnector\Tests\Functional\AbstractHisConnectorTestCase;
use FGTCLB\HisConnector\Tests\Functional\DependencyInjection\Fixtures\MockSoapClient;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use WsdlToPhp\PackageBase\SoapClientInterface;

final class HisClientTest extends AbstractHisConnectorTestCase
{
    protected array $configurationToUseInTestInstance = [
        'EXTENSIONS' => [
            'his_connector' => [
                'soap' => [
                    'urlPrefix' => 'http://127.0.0.1/path/to/soap/',
                    'username' => 'testing',
                    'password' => 'testing!',
                ],
            ],
        ],
    ];

    public static function expectedAvailableHisClasses(): \Generator
    {
        yield 'AccountService' => ['className' => AccountService::class];
        yield 'AddressService' => ['className' => AddressService::class];
        yield 'FacilityService' => ['className' => FacilityService::class];
        yield 'KeyvalueService' => ['className' => KeyvalueService::class];
        yield 'MimedataService' => ['className' => MimedataService::class];
        yield 'OrgUnitService' => ['className' => OrgUnitService::class];
        yield 'PersonAddressService' => ['className' => PersonAddressService::class];
        yield 'PersonOrgunitService' => ['className' => PersonOrgunitService::class];
        yield 'PersonService' => ['className' => PersonService::class];
    }

    /**
     * @param class-string $className
     */
    #[DataProvider('expectedAvailableHisClasses')]
    #[Test]
    public function verifyHisClientCanBeUsed(string $className): void
    {
        $this->assertTrue(class_exists($className), 'class exists');
        $this->assertTrue($this->has($className), 'service exists');
        /** @var SoapClientInterface */
        $service = $this->get($className);
        $this->assertInstanceOf($className, $service);
        $this->assertInstanceOf(MockSoapClient::class, $service->getSoapClient());
        $this->assertSame(
            [
                'serviceClassName' => $className,
                'urlPrefix' => 'http://127.0.0.1/path/to/soap/',
                'wssUsername' => 'testing',
                'wssPassword' => 'testing!',
            ],
            $service->getSoapClient()->suppliedArguments,
        );
    }
}
