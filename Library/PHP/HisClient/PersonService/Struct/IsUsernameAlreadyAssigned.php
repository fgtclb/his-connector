<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isUsernameAlreadyAssigned Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsUsernameAlreadyAssigned extends AbstractStructBase
{
    /**
     * The username
     * @var string
     */
    protected string $username;
    /**
     * The ignoreCase
     * @var bool
     */
    protected bool $ignoreCase;
    /**
     * Constructor method for isUsernameAlreadyAssigned
     * @uses IsUsernameAlreadyAssigned::setUsername()
     * @uses IsUsernameAlreadyAssigned::setIgnoreCase()
     * @param string $username
     * @param bool $ignoreCase
     */
    public function __construct(string $username, bool $ignoreCase)
    {
        $this
            ->setUsername($username)
            ->setIgnoreCase($ignoreCase);
    }
    /**
     * Get username value
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \FGTCLB\HisClient\PersonService\Struct\IsUsernameAlreadyAssigned
     */
    public function setUsername(string $username): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->username = $username;
        
        return $this;
    }
    /**
     * Get ignoreCase value
     * @return bool
     */
    public function getIgnoreCase(): bool
    {
        return $this->ignoreCase;
    }
    /**
     * Set ignoreCase value
     * @param bool $ignoreCase
     * @return \FGTCLB\HisClient\PersonService\Struct\IsUsernameAlreadyAssigned
     */
    public function setIgnoreCase(bool $ignoreCase): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreCase) && !is_bool($ignoreCase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreCase, true), gettype($ignoreCase)), __LINE__);
        }
        $this->ignoreCase = $ignoreCase;
        
        return $this;
    }
}
