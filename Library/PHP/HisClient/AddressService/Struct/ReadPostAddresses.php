<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPostAddresses Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPostAddresses extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    protected int $id;
    /**
     * The objekttype
     * Meta information extracted from the WSDL
     * - documentation: Objecttype is one of 'Person', 'Orgunit', 'Room', 'Building'
     * @var string
     */
    protected string $objekttype;
    /**
     * Constructor method for readPostAddresses
     * @uses ReadPostAddresses::setId()
     * @uses ReadPostAddresses::setObjekttype()
     * @param int $id
     * @param string $objekttype
     */
    public function __construct(int $id, string $objekttype)
    {
        $this
            ->setId($id)
            ->setObjekttype($objekttype);
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
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadPostAddresses
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
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadPostAddresses
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
