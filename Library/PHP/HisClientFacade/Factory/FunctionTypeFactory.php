<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Factory;

use FGTCLB\HisClient\KeyvalueService\Struct\KeyValue;
use FGTCLB\HisClientFacade\Model\FunctionType;

readonly class FunctionTypeFactory
{
    public function create(KeyValue $keyValue): FunctionType
    {
        return new FunctionType(
            id: $keyValue->getId(),
            uniquename: $keyValue->getUniquename() ?? '',
            shortText: $keyValue->getShorttext() ?? '',
            defaultText: $keyValue->getDefaulttext() ?? '',
            longText: $keyValue->getLongtext() ?? '',
        );
    }
}
