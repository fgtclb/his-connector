<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveEAddresses Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveEAddresses extends AbstractStructBase
{
    /**
     * The eAddresses
     * @var \FGTCLB\HisClient\AddressService\Struct\EAddressesType
     */
    protected \FGTCLB\HisClient\AddressService\Struct\EAddressesType $eAddresses;
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
     * Constructor method for saveEAddresses
     * @uses SaveEAddresses::setEAddresses()
     * @uses SaveEAddresses::setId()
     * @uses SaveEAddresses::setObjekttype()
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddressesType $eAddresses
     * @param int $id
     * @param string $objekttype
     */
    public function __construct(\FGTCLB\HisClient\AddressService\Struct\EAddressesType $eAddresses, int $id, string $objekttype)
    {
        $this
            ->setEAddresses($eAddresses)
            ->setId($id)
            ->setObjekttype($objekttype);
    }
    /**
     * Get eAddresses value
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddressesType
     */
    public function getEAddresses(): \FGTCLB\HisClient\AddressService\Struct\EAddressesType
    {
        return $this->eAddresses;
    }
    /**
     * Set eAddresses value
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddressesType $eAddresses
     * @return \FGTCLB\HisClient\AddressService\Struct\SaveEAddresses
     */
    public function setEAddresses(\FGTCLB\HisClient\AddressService\Struct\EAddressesType $eAddresses): self
    {
        $this->eAddresses = $eAddresses;
        
        return $this;
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
     * @return \FGTCLB\HisClient\AddressService\Struct\SaveEAddresses
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
     * @return \FGTCLB\HisClient\AddressService\Struct\SaveEAddresses
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
}
