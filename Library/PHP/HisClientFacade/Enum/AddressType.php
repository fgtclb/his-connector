<?php

declare(strict_types=1);

namespace FGTCLB\HisClientFacade\Enum;

enum AddressType: string
{
    case PERSON = 'Person';
    case ORGUNIT = 'Orgunit';
    case ROOM = 'Room';
    case BUILDING = 'Building';
}
