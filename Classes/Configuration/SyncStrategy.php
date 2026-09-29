<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Configuration;

enum SyncStrategy: string
{
    case KeepDeleted = 'keepDeleted';
    case DisableDeleted = 'disableDeleted';
    case RemoveDeleted = 'removeDeleted';
}
