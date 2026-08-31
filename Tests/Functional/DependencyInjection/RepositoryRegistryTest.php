<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Functional\DependencyInjection;

use FGTCLB\HisClientFacade\Repository\PersonRepository;
use FGTCLB\HisClientFacade\Repository\RepositoryInterface;
use FGTCLB\HisConnector\Service\RepositoryRegistry;
use FGTCLB\HisConnector\Tests\Functional\AbstractHisConnectorTestCase;
use PHPUnit\Framework\Attributes\Test;

final class RepositoryRegistryTest extends AbstractHisConnectorTestCase
{
    #[Test]
    public function repositoryRegistryContainsRepositories(): void
    {
        /** @var RepositoryRegistry */
        $subject = $this->get(RepositoryRegistry::class);
        $this->assertInstanceOf(PersonRepository::class, $subject->getByVariableName('personRepository'));
        $this->assertContainsOnlyInstancesOf(RepositoryInterface::class, $subject->getAll());
    }
}
