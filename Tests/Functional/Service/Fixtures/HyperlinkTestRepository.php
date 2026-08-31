<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional\Service\Fixtures;

use FGTCLB\HisClientFacade\Collection\HyperlinkCollection;
use FGTCLB\HisClientFacade\Model\Hyperlink;
use FGTCLB\HisClientFacade\Repository\RepositoryInterface;

/**
 * @implements RepositoryInterface<Hyperlink>
 */
final readonly class HyperlinkTestRepository implements RepositoryInterface
{
    /**
     * @param Hyperlink[] $data
     */
    public function __construct(private array $data) {}

    public function findAll(): HyperlinkCollection
    {
        return HyperlinkCollection::fromArray(array_values($this->data));
    }

    public function findById(int $id): ?Hyperlink
    {
        return $this->data[$id] ?? null;
    }

    public function getObjectType(): string
    {
        return Hyperlink::class;
    }
}
