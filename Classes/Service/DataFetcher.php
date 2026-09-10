<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Service;

use FGTCLB\HisClientFacade\Collection\CollectionInterface;
use FGTCLB\HisClientFacade\Model\EntityInterface;
use FGTCLB\HisConnector\Configuration\DataSource;
use FGTCLB\HisConnector\Exception\DataFetchingException;
use Symfony\Component\ExpressionLanguage\SyntaxError;
use TYPO3\CMS\Core\ExpressionLanguage\Resolver;

/**
 * Fetches source data based on the provided sync configuration.
 */
final readonly class DataFetcher
{
    private Resolver $expressionLanguage;

    public function __construct(private RepositoryRegistry $repositoryRegistry)
    {
        $this->expressionLanguage = new Resolver('his_connector', []);
    }

    /**
     * @return CollectionInterface<EntityInterface>|EntityInterface|null
     */
    public function fetchSource(DataSource $source): CollectionInterface|EntityInterface|null
    {
        $repository = $this->repositoryRegistry->getByVariableName($source->repository);
        if ($repository === null) {
            throw new DataFetchingException('Unknown repository specified: ' . $source->repository, 1788194178);
        }
        $expression = 'repository.' . $source->fetch;
        try {
            return $this->expressionLanguage->evaluate($expression, [
                'repository' => $repository,
                'filter' => $source->filter,
            ]);
        } catch (SyntaxError $e) {
            throw new DataFetchingException(sprintf(
                'Unable to fetch data from repository with invalid expression syntax "%s": %s',
                $expression,
                $e->getMessage(),
            ), 1788194433, $e);
        } catch (\Exception $e) {
            throw new DataFetchingException(sprintf(
                'Unable to fetch data from repository by expression "%s": %s',
                $expression,
                $e->getMessage(),
            ), 1788194436, $e);
        }
    }
}
