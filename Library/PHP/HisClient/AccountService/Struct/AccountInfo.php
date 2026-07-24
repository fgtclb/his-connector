<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountInfo Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccountInfo extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    protected int $id;
    /**
     * The username
     * @var string
     */
    protected string $username;
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * Constructor method for AccountInfo
     * @uses AccountInfo::setId()
     * @uses AccountInfo::setUsername()
     * @uses AccountInfo::setPersonId()
     * @param int $id
     * @param string $username
     * @param int $personId
     */
    public function __construct(int $id, string $username, int $personId)
    {
        $this
            ->setId($id)
            ->setUsername($username)
            ->setPersonId($personId);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\AccountService\Struct\AccountInfo
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
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
     * @return \FGTCLB\HisClient\AccountService\Struct\AccountInfo
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
     * @return \FGTCLB\HisClient\AccountService\Struct\AccountInfo
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
