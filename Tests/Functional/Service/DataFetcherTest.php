<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Tests\Unit\Service;

use FGTCLB\HisClientFacade\Model\Hyperlink;
use FGTCLB\HisClientFacade\Repository\RepositoryInterface;
use FGTCLB\HisConnector\Configuration\DataSource;
use FGTCLB\HisConnector\Exception\DataFetchingException;
use FGTCLB\HisConnector\Service\DataFetcher;
use FGTCLB\HisConnector\Service\RepositoryRegistry;
use FGTCLB\HisConnector\Tests\Functional\AbstractHisConnectorTestCase;
use FGTCLB\HisConnector\Tests\Functional\Service\Fixtures\HyperlinkTestRepository;
use FGTCLB\HisConnector\Utility\MappingUtility;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

final class DataFetcherTest extends AbstractHisConnectorTestCase
{
    protected bool $initializeDatabase = false;

    /**
     * @return array{repositories: RepositoryInterface<*>[], config: mixed[], expectedResult: mixed}[]
     */
    public static function fetchSourceDataProvider(): array
    {
        $testRepository = new HyperlinkTestRepository([
            1 => new Hyperlink(1, 'hyperlink1', null, null),
            2 => new Hyperlink(2, 'hyperlink1', null, null),
            3 => new Hyperlink(3, 'hyperlink1', null, null),
        ]);
        return [
            'repository returns collection' => [
                'repositories' => [$testRepository],
                'config' => ['repository' => 'hyperlinkTestRepository', 'fetch' => 'findAll()'],
                'expectedResult' => $testRepository->findAll(),
            ],
            'repository returns item' => [
                'repositories' => [$testRepository],
                'config' => ['repository' => 'hyperlinkTestRepository', 'fetch' => 'findById(2)'],
                'expectedResult' => $testRepository->findById(2),
            ],
            'non-existing item' => [
                'repositories' => [$testRepository],
                'config' => ['repository' => 'hyperlinkTestRepository', 'fetch' => 'findById(5)'],
                'expectedResult' => null,
            ],
            'filter variables usage' => [
                'repositories' => [$testRepository],
                'config' => ['repository' => 'hyperlinkTestRepository', 'fetch' => 'findById(filter["id"])', 'filter' => ['id' => 1]],
                'expectedResult' => $testRepository->findById(1),
            ],
        ];
    }

    /**
     * @param RepositoryInterface<*>[] $repositories
     * @param mixed[] $config
     */
    #[Test]
    #[DataProvider('fetchSourceDataProvider')]
    public function fetchSource(array $repositories, array $config, mixed $expectedResult): void
    {
        $repositoryRegistry = new RepositoryRegistry(
            mappingUtility: new MappingUtility(),
            repositories: $repositories,
        );
        $subject = new DataFetcher($repositoryRegistry);
        $this->assertEquals($expectedResult, $subject->fetchSource(DataSource::fromConfig($config)));
    }

    /**
     * @return array{config: mixed[], expectedException: class-string<\Throwable>, expectedExceptionCode: int}[]
     */
    public static function fetchSourceThrowsExceptionDataProvider(): array
    {
        return [
            'invalid repository' => [
                'config' => ['repository' => 'invalidRepository', 'fetch' => 'findById(1)'],
                'expectedException' => DataFetchingException::class,
                'expectedExceptionCode' => 1788194178,
            ],
            'invalid expression syntax' => [
                'config' => ['repository' => 'hyperlinkTestRepository', 'fetch' => 'someMethod('],
                'expectedException' => DataFetchingException::class,
                'expectedExceptionCode' => 1788194433,
            ],
            'invalid method' => [
                'config' => ['repository' => 'hyperlinkTestRepository', 'fetch' => 'invalidMethod(1)'],
                'expectedException' => DataFetchingException::class,
                'expectedExceptionCode' => 1788194436,
            ],
        ];
    }

    /**
     * @param mixed[] $config
     * @param class-string<\Throwable> $expectedException
     */
    #[Test]
    #[DataProvider('fetchSourceThrowsExceptionDataProvider')]
    public function fetchSourceThrowsException(array $config, string $expectedException, int $expectedExceptionCode): void
    {
        $this->expectException($expectedException);
        $this->expectExceptionCode($expectedExceptionCode);
        $repositoryRegistry = new RepositoryRegistry(
            mappingUtility: new MappingUtility(),
            repositories: [new HyperlinkTestRepository([])],
        );
        $subject = new DataFetcher($repositoryRegistry);
        $subject->fetchSource(DataSource::fromConfig($config));
    }
}
