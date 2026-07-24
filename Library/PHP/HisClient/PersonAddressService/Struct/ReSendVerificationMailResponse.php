<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reSendVerificationMailResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReSendVerificationMailResponse extends AbstractStructBase
{
    /**
     * The success
     * Meta information extracted from the WSDL
     * - documentation: True if verification mail was successfully send.
     * @var bool
     */
    protected bool $success;
    /**
     * Constructor method for reSendVerificationMailResponse
     * @uses ReSendVerificationMailResponse::setSuccess()
     * @param bool $success
     */
    public function __construct(bool $success)
    {
        $this
            ->setSuccess($success);
    }
    /**
     * Get success value
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }
    /**
     * Set success value
     * @param bool $success
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReSendVerificationMailResponse
     */
    public function setSuccess(bool $success): self
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->success = $success;
        
        return $this;
    }
}
