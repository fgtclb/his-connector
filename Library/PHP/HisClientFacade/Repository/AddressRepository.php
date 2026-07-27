<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\AddressService\Service\Service as AddressService;
use FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode;
use FGTCLB\HisClient\AddressService\Struct\ReadPostAddresses;
use FGTCLB\HisClient\AddressService\Struct\ReadPostAddressesResponse;
use FGTCLB\HisClientFacade\Enum\AddressType;
use FGTCLB\HisClientFacade\Exception\Exception;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;

readonly class AddressRepository
{
    public function __construct(
        private AddressService $addressService,
        #[Autowire(service: 'cache.runtime')]
        private readonly FrontendInterface $cache,
    ) {}

    /**
     * @return PostAddressWithNillablePostcode[]
     */
    public function findByIdAndType(int $id, AddressType $type): array
    {
        $cacheIdentifier = str_replace('\\', '_', self::class) . '_' . $type->value . '_' . $id;
        if (!$this->cache->has($cacheIdentifier)) {
            /** @var ReadPostAddressesResponse|false */
            $addressResponse = $this->addressService->readPostAddresses(new ReadPostAddresses($id, $type->value));
            if ($addressResponse === false) {
                /** @var \SoapFault */
                $soapException = $this->addressService->getLastErrorForMethod(AddressService::class . '::readPostAddresses');
                throw new Exception(sprintf(
                    'Unable to fetch org unit "%d": %s',
                    $id,
                    $soapException->getMessage(),
                ), 1785252647, $soapException);
            }
            $this->cache->set($cacheIdentifier, $addressResponse->getPostAdresses()->getPostAddress() ?? []);
        }
        return $this->cache->get($cacheIdentifier);
    }
}
