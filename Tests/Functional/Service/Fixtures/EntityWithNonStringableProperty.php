<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional\Service\Fixtures;

use FGTCLB\HisClientFacade\Model\EntityInterface;

final readonly class EntityWithNonStringableProperty implements EntityInterface
{
    /**
     * @param mixed[] $nonStringable
     */
    public function __construct(public array $nonStringable = []) {}

    public function getIdentifier(): string
    {
        return 'identifier';
    }
}
