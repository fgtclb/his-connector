<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Service;

use FGTCLB\HisClientFacade\Repository\RepositoryInterface;
use FGTCLB\HisConnector\Utility\MappingUtility;
use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;
use Symfony\Component\DependencyInjection\Attribute\AutowireIterator;

#[Autoconfigure(public: true)]
final readonly class RepositoryRegistry
{
    /**
     * @var array<string, RepositoryInterface<*>>
     */
    private array $repositories;

    /**
     * @param iterable<RepositoryInterface<*>> $repositories
     */
    public function __construct(
        private MappingUtility $mappingUtility,
        #[AutowireIterator('hisclientfacade.repository')]
        iterable $repositories,
    ) {
        $indexedRepositories = [];
        foreach ($repositories as $repository) {
            $name = $this->mappingUtility->createExpressionVariableName(get_class($repository));
            $indexedRepositories[$name] = $repository;
        }
        $this->repositories = $indexedRepositories;
    }

    /**
     * @return array<string, RepositoryInterface<*>>
     */
    public function getAll(): array
    {
        return $this->repositories;
    }

    /**
     * @return RepositoryInterface<*>|null
     */
    public function getByVariableName(string $name): ?RepositoryInterface
    {
        return $this->repositories[$name] ?? null;
    }
}
