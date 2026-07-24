<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePersonAttribute202006Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdatePersonAttribute202006Response extends AbstractStructBase
{
    /**
     * The personAttributeId
     * @var int
     */
    protected int $personAttributeId;
    /**
     * Constructor method for updatePersonAttribute202006Response
     * @uses UpdatePersonAttribute202006Response::setPersonAttributeId()
     * @param int $personAttributeId
     */
    public function __construct(int $personAttributeId)
    {
        $this
            ->setPersonAttributeId($personAttributeId);
    }
    /**
     * Get personAttributeId value
     * @return int
     */
    public function getPersonAttributeId(): int
    {
        return $this->personAttributeId;
    }
    /**
     * Set personAttributeId value
     * @param int $personAttributeId
     * @return \FGTCLB\HisClient\PersonService\Struct\UpdatePersonAttribute202006Response
     */
    public function setPersonAttributeId(int $personAttributeId): self
    {
        // validation for constraint: int
        if (!is_null($personAttributeId) && !(is_int($personAttributeId) || ctype_digit($personAttributeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personAttributeId, true), gettype($personAttributeId)), __LINE__);
        }
        $this->personAttributeId = $personAttributeId;
        
        return $this;
    }
}
