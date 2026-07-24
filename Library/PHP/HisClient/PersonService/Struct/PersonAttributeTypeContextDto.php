<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonAttributeTypeContextDto Struct
 * Meta information extracted from the WSDL
 * - documentation: Specifies a set of roles. The owner of the attribute is required to possess at least one of those roles when the attribute is assigned.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonAttributeTypeContextDto extends AbstractStructBase
{
    /**
     * The personAttributeTypeId
     * @var int
     */
    protected int $personAttributeTypeId;
    /**
     * The roleId
     * @var int
     */
    protected int $roleId;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * Constructor method for PersonAttributeTypeContextDto
     * @uses PersonAttributeTypeContextDto::setPersonAttributeTypeId()
     * @uses PersonAttributeTypeContextDto::setRoleId()
     * @uses PersonAttributeTypeContextDto::setId()
     * @param int $personAttributeTypeId
     * @param int $roleId
     * @param int $id
     */
    public function __construct(int $personAttributeTypeId, int $roleId, ?int $id = null)
    {
        $this
            ->setPersonAttributeTypeId($personAttributeTypeId)
            ->setRoleId($roleId)
            ->setId($id);
    }
    /**
     * Get personAttributeTypeId value
     * @return int
     */
    public function getPersonAttributeTypeId(): int
    {
        return $this->personAttributeTypeId;
    }
    /**
     * Set personAttributeTypeId value
     * @param int $personAttributeTypeId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto
     */
    public function setPersonAttributeTypeId(int $personAttributeTypeId): self
    {
        // validation for constraint: int
        if (!is_null($personAttributeTypeId) && !(is_int($personAttributeTypeId) || ctype_digit($personAttributeTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personAttributeTypeId, true), gettype($personAttributeTypeId)), __LINE__);
        }
        $this->personAttributeTypeId = $personAttributeTypeId;
        
        return $this;
    }
    /**
     * Get roleId value
     * @return int
     */
    public function getRoleId(): int
    {
        return $this->roleId;
    }
    /**
     * Set roleId value
     * @param int $roleId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto
     */
    public function setRoleId(int $roleId): self
    {
        // validation for constraint: int
        if (!is_null($roleId) && !(is_int($roleId) || ctype_digit($roleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roleId, true), gettype($roleId)), __LINE__);
        }
        $this->roleId = $roleId;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypeContextDto
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
}
