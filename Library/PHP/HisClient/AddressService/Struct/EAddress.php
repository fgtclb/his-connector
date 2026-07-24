<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EAddress Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class EAddress extends Address
{
    /**
     * The eaddresstypeId
     * Meta information extracted from the WSDL
     * - documentation: Per addresstype several specifications (Messenger: e.g. ICQ, MSN, Phone: e.g. mobile, fax, phone).
     * @var int
     */
    protected int $eaddresstypeId;
    /**
     * The eaddress
     * Meta information extracted from the WSDL
     * - documentation: E.g. Email/Telephonnummer/Hyperlink.
     * @var string
     */
    protected string $eaddress;
    /**
     * Constructor method for EAddress
     * @uses EAddress::setEaddresstypeId()
     * @uses EAddress::setEaddress()
     * @param int $eaddresstypeId
     * @param string $eaddress
     */
    public function __construct(int $eaddresstypeId, string $eaddress)
    {
        $this
            ->setEaddresstypeId($eaddresstypeId)
            ->setEaddress($eaddress);
    }
    /**
     * Get eaddresstypeId value
     * @return int
     */
    public function getEaddresstypeId(): int
    {
        return $this->eaddresstypeId;
    }
    /**
     * Set eaddresstypeId value
     * @param int $eaddresstypeId
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddress
     */
    public function setEaddresstypeId(int $eaddresstypeId): self
    {
        // validation for constraint: int
        if (!is_null($eaddresstypeId) && !(is_int($eaddresstypeId) || ctype_digit($eaddresstypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eaddresstypeId, true), gettype($eaddresstypeId)), __LINE__);
        }
        $this->eaddresstypeId = $eaddresstypeId;
        
        return $this;
    }
    /**
     * Get eaddress value
     * @return string
     */
    public function getEaddress(): string
    {
        return $this->eaddress;
    }
    /**
     * Set eaddress value
     * @param string $eaddress
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddress
     */
    public function setEaddress(string $eaddress): self
    {
        // validation for constraint: string
        if (!is_null($eaddress) && !is_string($eaddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eaddress, true), gettype($eaddress)), __LINE__);
        }
        $this->eaddress = $eaddress;
        
        return $this;
    }
}
