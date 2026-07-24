<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailMeta202506 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EmailMeta202506 extends AddressMeta
{
    /**
     * The email
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Email202506
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Email202506 $email;
    /**
     * Constructor method for EmailMeta202506
     * @uses EmailMeta202506::setEmail()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Email202506 $email
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\Email202506 $email)
    {
        $this
            ->setEmail($email);
    }
    /**
     * Get email value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Email202506
     */
    public function getEmail(): \FGTCLB\HisClient\PersonAddressService\Struct\Email202506
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Email202506 $email
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\EmailMeta202506
     */
    public function setEmail(\FGTCLB\HisClient\PersonAddressService\Struct\Email202506 $email): self
    {
        $this->email = $email;
        
        return $this;
    }
}
