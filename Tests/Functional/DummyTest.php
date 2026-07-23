<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional;

use FGTCLB\HisConnector\Dummy;
use PHPUnit\Framework\Attributes\Test;

final class DummyTest extends AbstractHisConnectorTestCase
{
    #[Test]
    public function dummyIsRetrievableFromDependencyInjectionContainer(): void
    {
        $this->assertInstanceOf(Dummy::class, $this->get(Dummy::class));
    }
}
