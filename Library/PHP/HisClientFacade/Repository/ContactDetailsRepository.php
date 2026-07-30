<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Repository;

use FGTCLB\HisClient\PersonAddressService\Service\Service as PersonAddressService;
use FGTCLB\HisClient\PersonAddressService\Struct\ReadAddresses202506;
use FGTCLB\HisClient\PersonAddressService\Struct\ReadAddresses202506Response;
use FGTCLB\HisClientFacade\Collection\ContactDetailsCollection;
use FGTCLB\HisClientFacade\Exception\Exception;
use FGTCLB\HisClientFacade\Factory\ContactDetailsFactory;

readonly class ContactDetailsRepository
{
    public function __construct(
        private PersonAddressService $personAddressService,
        private ContactDetailsFactory $contactDetailsFactory,
    ) {}

    public function findByPersonIdForLanguage(int $personId, string $language): ContactDetailsCollection
    {
        try {
            /** @var ReadAddresses202506Response */
            $personAddressesResponse = $this->personAddressService->readAddresses202506(new ReadAddresses202506($personId));
        } catch (\SoapFault $e) {
            throw new Exception(sprintf(
                'Unable to fetch addresses of person "%d": %s',
                $personId,
                $e->getMessage(),
            ), 1785244137, $e);
        }
        $contactDetails = [];
        foreach ($personAddressesResponse->getPersonAddressesByNotifications202506()->getPersonAddressesByNotification202506() ?? [] as $addresses) {
            $contactDetails[] = $this->contactDetailsFactory->create($addresses, $language);
        }
        return ContactDetailsCollection::fromArray($contactDetails);
    }
}
