<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for changePasswordForAccountResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChangePasswordForAccountResponse extends AbstractStructBase
{
    /**
     * The isChanged
     * @var bool
     */
    protected bool $isChanged;
    /**
     * Constructor method for changePasswordForAccountResponse
     * @uses ChangePasswordForAccountResponse::setIsChanged()
     * @param bool $isChanged
     */
    public function __construct(bool $isChanged)
    {
        $this
            ->setIsChanged($isChanged);
    }
    /**
     * Get isChanged value
     * @return bool
     */
    public function getIsChanged(): bool
    {
        return $this->isChanged;
    }
    /**
     * Set isChanged value
     * @param bool $isChanged
     * @return \FGTCLB\HisClient\AccountService\Struct\ChangePasswordForAccountResponse
     */
    public function setIsChanged(bool $isChanged): self
    {
        // validation for constraint: boolean
        if (!is_null($isChanged) && !is_bool($isChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isChanged, true), gettype($isChanged)), __LINE__);
        }
        $this->isChanged = $isChanged;
        
        return $this;
    }
}
