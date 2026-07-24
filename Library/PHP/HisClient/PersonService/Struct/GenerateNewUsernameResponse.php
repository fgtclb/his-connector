<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateNewUsernameResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenerateNewUsernameResponse extends AbstractStructBase
{
    /**
     * The password
     * Meta information extracted from the WSDL
     * - documentation: Generated username, not password.
     * @var string
     */
    protected string $password;
    /**
     * Constructor method for generateNewUsernameResponse
     * @uses GenerateNewUsernameResponse::setPassword()
     * @param string $password
     */
    public function __construct(string $password)
    {
        $this
            ->setPassword($password);
    }
    /**
     * Get password value
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \FGTCLB\HisClient\PersonService\Struct\GenerateNewUsernameResponse
     */
    public function setPassword(string $password): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
}
