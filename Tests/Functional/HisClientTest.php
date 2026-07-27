<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

final class HisClientTest extends AbstractHisConnectorTestCase
{
    public static function expectedAvailableHisClasses(): \Generator
    {
        yield 'PersonService' => ['className' => 'FGTCLB\\HisClient\\PersonService\\Service\\Service'];
    }

    #[DataProvider('expectedAvailableHisClasses')]
    #[Test]
    public function verifyHisClientCanBeUsed(string $className): void
    {
        $this->assertTrue(class_exists($className));
        $this->assertTrue($this->has($className));
        $this->assertInstanceOf($className, $this->get($className));
    }
}
