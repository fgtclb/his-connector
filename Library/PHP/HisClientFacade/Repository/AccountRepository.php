<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\AccountService\Service\Service as AccountService;
use FGTCLB\HisClient\AccountService\Struct\SearchAccountForPerson;
use FGTCLB\HisClient\AccountService\Struct\SearchAccountForPersonResponse;
use FGTCLB\HisClientFacade\Collection\AccountCollection;
use FGTCLB\HisClientFacade\Exception\Exception;
use FGTCLB\HisClientFacade\Factory\AccountFactory;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

readonly class AccountRepository
{
    public function __construct(
        private AccountService $accountService,
        private AccountFactory $accountFactory,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    public function findByPersonId(int $personId): AccountCollection
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_' . $personId;
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var SearchAccountForPersonResponse */
                $response = $this->accountService->searchAccountForPerson(new SearchAccountForPerson($personId));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch accounts for person "%d": %s',
                    $personId,
                    $e->getMessage(),
                ), 1785401021, $e);
            }
            $accounts = [];
            foreach ($response->getCompleteAccounts()->getCompleteAccount() ?? [] as $account) {
                $accounts[] = $this->accountFactory->create($account);
            }
            $this->cache->set($cacheIdentifier, AccountCollection::fromArray($accounts));
        }
        return $this->cache->get($cacheIdentifier);
    }
}
