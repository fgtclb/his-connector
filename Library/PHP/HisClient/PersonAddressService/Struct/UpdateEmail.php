<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateEmail Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateEmail extends AbstractStructBase
{
    /**
     * The addressId
     * @var int
     */
    protected int $addressId;
    /**
     * The email
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Email_1
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email;
    /**
     * Constructor method for updateEmail
     * @uses UpdateEmail::setAddressId()
     * @uses UpdateEmail::setEmail()
     * @param int $addressId
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email
     */
    public function __construct(int $addressId, \FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email)
    {
        $this
            ->setAddressId($addressId)
            ->setEmail($email);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmail
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Email_1
     */
    public function getEmail(): \FGTCLB\HisClient\PersonAddressService\Struct\Email_1
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmail
     */
    public function setEmail(\FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email): self
    {
        $this->email = $email;
        
        return $this;
    }
}
