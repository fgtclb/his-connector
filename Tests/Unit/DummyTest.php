<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit;

use FGTCLB\HisConnector\Dummy;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class DummyTest extends UnitTestCase
{
    #[Test]
    public function getExtensionKeyReturnsExtensionKey(): void
    {
        $this->assertSame('his_connector', (new Dummy())->getExtensionKey());
    }

    #[Test]
    public function getPackageNameReturnsComposerPackageName(): void
    {
        $this->assertSame('fgtclb/his-connector', (new Dummy())->getPackageName());
    }
}
