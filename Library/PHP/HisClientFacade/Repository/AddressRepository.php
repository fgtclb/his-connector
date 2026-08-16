<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\AddressService\Service\Service as AddressService;
use FGTCLB\HisClient\AddressService\Struct\ReadPostAddresses;
use FGTCLB\HisClient\AddressService\Struct\ReadPostAddressesResponse;
use FGTCLB\HisClientFacade\Enum\AddressType;
use FGTCLB\HisClientFacade\Exception\Exception;
use FGTCLB\HisClientFacade\Factory\PostAddressFactory;
use FGTCLB\HisClientFacade\Model\PostAddress;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

/**
 * @implements RepositoryInterface<PostAddress>
 */
readonly class AddressRepository implements RepositoryInterface
{
    public function __construct(
        private AddressService $addressService,
        private PostAddressFactory $postAddressFactory,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    /**
     * @return PostAddress[]
     */
    public function findByIdAndTypeForLanguage(int $id, AddressType $type, string $language): array
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_' . $type->value . '_' . $id;
        if (!$this->cache->has($cacheIdentifier)) {
            try {
                /** @var ReadPostAddressesResponse */
                $addressResponse = $this->addressService->readPostAddresses(new ReadPostAddresses($id, $type->value));
            } catch (\SoapFault $e) {
                throw new Exception(sprintf(
                    'Unable to fetch org unit "%d": %s',
                    $id,
                    $e->getMessage(),
                ), 1785252647, $e);
            }
            $postAddresses = [];
            foreach ($addressResponse->getPostAdresses()->getPostAddress() ?? [] as $postAddress) {
                $postAddresses[] = $this->postAddressFactory->createFromPostAddressWithNillablePostcode($postAddress, $language);
            }
            $this->cache->set($cacheIdentifier, $postAddresses);
        }
        return $this->cache->get($cacheIdentifier);
    }

    public function getObjectType(): string
    {
        return PostAddress::class;
    }
}
