<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAddressesByNotification202506Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAddressesByNotification202506Response extends AbstractStructBase
{
    /**
     * The personAddresses202506
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses202506
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses202506 $personAddresses202506;
    /**
     * Constructor method for readAddressesByNotification202506Response
     * @uses ReadAddressesByNotification202506Response::setPersonAddresses202506()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses202506 $personAddresses202506
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses202506 $personAddresses202506)
    {
        $this
            ->setPersonAddresses202506($personAddresses202506);
    }
    /**
     * Get personAddresses202506 value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses202506
     */
    public function getPersonAddresses202506(): \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses202506
    {
        return $this->personAddresses202506;
    }
    /**
     * Set personAddresses202506 value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses202506 $personAddresses202506
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesByNotification202506Response
     */
    public function setPersonAddresses202506(\FGTCLB\HisClient\PersonAddressService\Struct\PersonAddresses202506 $personAddresses202506): self
    {
        $this->personAddresses202506 = $personAddresses202506;
        
        return $this;
    }
}
