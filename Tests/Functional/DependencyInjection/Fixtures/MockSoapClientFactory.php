<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional\DependencyInjection\Fixtures;

use FGTCLB\HisClientFacade\Soap\SoapClientFactoryInterface;

final readonly class MockSoapClientFactory implements SoapClientFactoryInterface
{
    public function createForService(string $serviceClassName, string $urlPrefix, string $wssUsername, string $wssPassword, int $timeout): \SoapClient
    {
        // Create simple mock SOAP client that doesn't connect to anything during construction
        return new MockSoapClient(null, [], [
            'serviceClassName' => $serviceClassName,
            'urlPrefix' => $urlPrefix,
            'wssUsername' => $wssUsername,
            'wssPassword' => $wssPassword,
            'timeout' => $timeout,
        ]);
    }
}
