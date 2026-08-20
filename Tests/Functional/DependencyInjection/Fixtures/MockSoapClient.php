<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional\DependencyInjection\Fixtures;

final class MockSoapClient extends \SoapClient
{
    /**
     * No-op constructor that only stores/exposes the supplied arguments by the factory
     * to be able to verify them in tests.
     *
     * @param array<string, string> $wsdlOptions
     * @param array<string, int|string> $suppliedArguments
     */
    public function __construct(public ?string $wsdlUrl, public ?array $wsdlOptions, public array $suppliedArguments) {}
}
