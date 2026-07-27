<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional;

use FGTCLB\HisClient\PersonService\Service\Service as PersonService;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use WsdlToPhp\PackageBase\SoapClientInterface;

final class HisClientTest extends AbstractHisConnectorTestCase
{
    // TODO we probably need a real mock server to be able to test SOAP client classes
    //      with the current approach
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
        yield 'PersonService' => ['className' => PersonService::class];
    }

    #[DataProvider('expectedAvailableHisClasses')]
    #[Test]
    public function verifyHisClientCanBeUsed(string $className): void
    {
        $this->assertTrue(class_exists($className));
        $this->assertTrue($this->has($className));
        /** @var SoapClientInterface */
        $service = $this->get($className);
        $this->assertInstanceOf($className, $service);
        $this->assertInstanceOf(\SoapClient::class, $service->getSoapClient());
    }
}
