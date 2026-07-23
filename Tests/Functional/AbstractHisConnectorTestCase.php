<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional;

use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

abstract class AbstractHisConnectorTestCase extends FunctionalTestCase
{
    protected array $testExtensionsToLoad = [
        'fgtclb/his-connector',
    ];
}
