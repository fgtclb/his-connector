<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createNewAccountForPerson Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateNewAccountForPerson extends AbstractStructBase
{
    /**
     * The username
     * @var string
     */
    protected string $username;
    /**
     * The password
     * @var string
     */
    protected string $password;
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * Constructor method for createNewAccountForPerson
     * @uses CreateNewAccountForPerson::setUsername()
     * @uses CreateNewAccountForPerson::setPassword()
     * @uses CreateNewAccountForPerson::setPersonId()
     * @param string $username
     * @param string $password
     * @param int $personId
     */
    public function __construct(string $username, string $password, int $personId)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setPersonId($personId);
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
     * @return \FGTCLB\HisClient\AccountService\Struct\CreateNewAccountForPerson
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
     * @return \FGTCLB\HisClient\AccountService\Struct\CreateNewAccountForPerson
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
    /**
     * Get personId value
     * @return int
     */
    public function getPersonId(): int
    {
        return $this->personId;
    }
    /**
     * Set personId value
     * @param int $personId
     * @return \FGTCLB\HisClient\AccountService\Struct\CreateNewAccountForPerson
     */
    public function setPersonId(int $personId): self
    {
        // validation for constraint: int
        if (!is_null($personId) && !(is_int($personId) || ctype_digit($personId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        $this->personId = $personId;
        
        return $this;
    }
}
