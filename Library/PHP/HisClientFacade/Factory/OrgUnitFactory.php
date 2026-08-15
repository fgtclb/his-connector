<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClientFacade\Exception\Exception;
use FGTCLB\HisClientFacade\Model\OrgUnit;
use FGTCLB\HisClientFacade\Utility\DateTimeConverter;

readonly class OrgUnitFactory
{
    public function __construct(private DateTimeConverter $dateTimeConverter) {}

    public function create(\FGTCLB\HisClient\OrgUnitService\Struct\OrgUnit $orgUnit, ?OrgUnit $parent): OrgUnit
    {
        if ($orgUnit->getLid() === null) {
            throw new Exception('OrgUnits must have a longliving id.', 1786547730);
        }
        return new OrgUnit(
            lid: $orgUnit->getLid(),
            displayText: $orgUnit->getDisplaytext(),
            shortText: $orgUnit->getShorttext() ?? '',
            longText: $orgUnit->getLongtext() ?? '',
            uniquename: $orgUnit->getUniquename() ?? '',
            parent: $parent,
            validFrom: $this->dateTimeConverter->convert($orgUnit->getValidFrom()),
            validTo: $this->dateTimeConverter->convert($orgUnit->getValidTo())
        );
    }
}
