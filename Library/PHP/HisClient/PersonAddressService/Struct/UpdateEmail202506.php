<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateEmail202506 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateEmail202506 extends AbstractStructBase
{
    /**
     * The addressId
     * @var int
     */
    protected int $addressId;
    /**
     * The email
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject $email;
    /**
     * The isVerified
     * Meta information extracted from the WSDL
     * - documentation: If true, the edit email is marked as verified.
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $isVerified = null;
    /**
     * Constructor method for updateEmail202506
     * @uses UpdateEmail202506::setAddressId()
     * @uses UpdateEmail202506::setEmail()
     * @uses UpdateEmail202506::setIsVerified()
     * @param int $addressId
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject $email
     * @param bool $isVerified
     */
    public function __construct(int $addressId, \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject $email, ?bool $isVerified = null)
    {
        $this
            ->setAddressId($addressId)
            ->setEmail($email)
            ->setIsVerified($isVerified);
    }
    /**
     * Get addressId value
     * @return int
     */
    public function getAddressId(): int
    {
        return $this->addressId;
    }
    /**
     * Set addressId value
     * @param int $addressId
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmail202506
     */
    public function setAddressId(int $addressId): self
    {
        // validation for constraint: int
        if (!is_null($addressId) && !(is_int($addressId) || ctype_digit($addressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressId, true), gettype($addressId)), __LINE__);
        }
        $this->addressId = $addressId;
        
        return $this;
    }
    /**
     * Get email value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject
     */
    public function getEmail(): \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject $email
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmail202506
     */
    public function setEmail(\FGTCLB\HisClient\PersonAddressService\Struct\EmailInputObject $email): self
    {
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get isVerified value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsVerified(): ?bool
    {
        return $this->isVerified ?? null;
    }
    /**
     * Set isVerified value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isVerified
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmail202506
     */
    public function setIsVerified(?bool $isVerified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVerified) && !is_bool($isVerified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVerified, true), gettype($isVerified)), __LINE__);
        }
        if (is_null($isVerified) || (is_array($isVerified) && empty($isVerified))) {
            unset($this->isVerified);
        } else {
            $this->isVerified = $isVerified;
        }
        
        return $this;
    }
}
