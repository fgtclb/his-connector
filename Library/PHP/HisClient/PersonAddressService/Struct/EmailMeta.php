<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailMeta Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EmailMeta extends AddressMeta
{
    /**
     * The email
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Email_1
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email;
    /**
     * Constructor method for EmailMeta
     * @uses EmailMeta::setEmail()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email)
    {
        $this
            ->setEmail($email);
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
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta
     */
    public function setEmail(\FGTCLB\HisClient\PersonAddressService\Struct\Email_1 $email): self
    {
        $this->email = $email;
        
        return $this;
    }
}
