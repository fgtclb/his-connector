<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveEAddresses201906Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveEAddresses201906Response extends AbstractStructBase
{
    /**
     * The eAdressIds
     * @var \FGTCLB\HisClient\AddressService\Struct\EAdressIdsType
     */
    protected \FGTCLB\HisClient\AddressService\Struct\EAdressIdsType $eAdressIds;
    /**
     * Constructor method for saveEAddresses201906Response
     * @uses SaveEAddresses201906Response::setEAdressIds()
     * @param \FGTCLB\HisClient\AddressService\Struct\EAdressIdsType $eAdressIds
     */
    public function __construct(\FGTCLB\HisClient\AddressService\Struct\EAdressIdsType $eAdressIds)
    {
        $this
            ->setEAdressIds($eAdressIds);
    }
    /**
     * Get eAdressIds value
     * @return \FGTCLB\HisClient\AddressService\Struct\EAdressIdsType
     */
    public function getEAdressIds(): \FGTCLB\HisClient\AddressService\Struct\EAdressIdsType
    {
        return $this->eAdressIds;
    }
    /**
     * Set eAdressIds value
     * @param \FGTCLB\HisClient\AddressService\Struct\EAdressIdsType $eAdressIds
     * @return \FGTCLB\HisClient\AddressService\Struct\SaveEAddresses201906Response
     */
    public function setEAdressIds(\FGTCLB\HisClient\AddressService\Struct\EAdressIdsType $eAdressIds): self
    {
        $this->eAdressIds = $eAdressIds;
        
        return $this;
    }
}
