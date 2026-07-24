<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readEAddressesWithAddressTagAndEAddressType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadEAddressesWithAddressTagAndEAddressType extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    protected int $id;
    /**
     * The objekttype
     * Meta information extracted from the WSDL
     * - documentation: Objecttype is one of 'Person', 'Orgunit', 'Room', 'Building'.
     * @var string
     */
    protected string $objekttype;
    /**
     * The addressTagId
     * @var int
     */
    protected int $addressTagId;
    /**
     * The eAddressTypeIds
     * @var \FGTCLB\HisClient\AddressService\Struct\EAddressTypeIdsType
     */
    protected \FGTCLB\HisClient\AddressService\Struct\EAddressTypeIdsType $eAddressTypeIds;
    /**
     * Constructor method for readEAddressesWithAddressTagAndEAddressType
     * @uses ReadEAddressesWithAddressTagAndEAddressType::setId()
     * @uses ReadEAddressesWithAddressTagAndEAddressType::setObjekttype()
     * @uses ReadEAddressesWithAddressTagAndEAddressType::setAddressTagId()
     * @uses ReadEAddressesWithAddressTagAndEAddressType::setEAddressTypeIds()
     * @param int $id
     * @param string $objekttype
     * @param int $addressTagId
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddressTypeIdsType $eAddressTypeIds
     */
    public function __construct(int $id, string $objekttype, int $addressTagId, \FGTCLB\HisClient\AddressService\Struct\EAddressTypeIdsType $eAddressTypeIds)
    {
        $this
            ->setId($id)
            ->setObjekttype($objekttype)
            ->setAddressTagId($addressTagId)
            ->setEAddressTypeIds($eAddressTypeIds);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadEAddressesWithAddressTagAndEAddressType
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get objekttype value
     * @return string
     */
    public function getObjekttype(): string
    {
        return $this->objekttype;
    }
    /**
     * Set objekttype value
     * @param string $objekttype
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadEAddressesWithAddressTagAndEAddressType
     */
    public function setObjekttype(string $objekttype): self
    {
        // validation for constraint: string
        if (!is_null($objekttype) && !is_string($objekttype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objekttype, true), gettype($objekttype)), __LINE__);
        }
        $this->objekttype = $objekttype;
        
        return $this;
    }
    /**
     * Get addressTagId value
     * @return int
     */
    public function getAddressTagId(): int
    {
        return $this->addressTagId;
    }
    /**
     * Set addressTagId value
     * @param int $addressTagId
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadEAddressesWithAddressTagAndEAddressType
     */
    public function setAddressTagId(int $addressTagId): self
    {
        // validation for constraint: int
        if (!is_null($addressTagId) && !(is_int($addressTagId) || ctype_digit($addressTagId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressTagId, true), gettype($addressTagId)), __LINE__);
        }
        $this->addressTagId = $addressTagId;
        
        return $this;
    }
    /**
     * Get eAddressTypeIds value
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddressTypeIdsType
     */
    public function getEAddressTypeIds(): \FGTCLB\HisClient\AddressService\Struct\EAddressTypeIdsType
    {
        return $this->eAddressTypeIds;
    }
    /**
     * Set eAddressTypeIds value
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddressTypeIdsType $eAddressTypeIds
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadEAddressesWithAddressTagAndEAddressType
     */
    public function setEAddressTypeIds(\FGTCLB\HisClient\AddressService\Struct\EAddressTypeIdsType $eAddressTypeIds): self
    {
        $this->eAddressTypeIds = $eAddressTypeIds;
        
        return $this;
    }
}
