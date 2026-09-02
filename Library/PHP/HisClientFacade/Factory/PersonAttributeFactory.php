<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClient\PersonService\Struct\PersonAttributeDto;
use FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeDto;
use FGTCLB\HisClientFacade\Model\PersonAttribute;

readonly class PersonAttributeFactory
{
    public function create(PersonAttributeDto $attribute, PersonAttributeTypeDto $attributeType): PersonAttribute
    {
        return new PersonAttribute(
            personId: $attribute->getPersonId(),
            name: $attributeType->getFieldName(),
            value: $attribute->getAttributeValue(),
        );
    }
}
