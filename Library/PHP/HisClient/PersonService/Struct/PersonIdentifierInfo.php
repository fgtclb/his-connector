<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonIdentifierInfo Struct
 * Meta information extracted from the WSDL
 * - documentation: Information of a personal identifikator
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonIdentifierInfo extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    protected int $id;
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The identifier
     * @var string
     */
    protected string $identifier;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'PersonIdentifierTypeValue'. Examples: nkb-bPK2, nkb-postkorb-handle, esi, hisinone-muster-h1pre, mbrwallet, orcid
     * @var string
     */
    protected string $type;
    /**
     * Constructor method for PersonIdentifierInfo
     * @uses PersonIdentifierInfo::setId()
     * @uses PersonIdentifierInfo::setPersonId()
     * @uses PersonIdentifierInfo::setIdentifier()
     * @uses PersonIdentifierInfo::setType()
     * @param int $id
     * @param int $personId
     * @param string $identifier
     * @param string $type
     */
    public function __construct(int $id, int $personId, string $identifier, string $type)
    {
        $this
            ->setId($id)
            ->setPersonId($personId)
            ->setIdentifier($identifier)
            ->setType($type);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo
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
    /**
     * Get identifier value
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }
    /**
     * Set identifier value
     * @param string $identifier
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo
     */
    public function setIdentifier(string $identifier): self
    {
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifier, true), gettype($identifier)), __LINE__);
        }
        $this->identifier = $identifier;
        
        return $this;
    }
    /**
     * Get type value
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifierInfo
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
