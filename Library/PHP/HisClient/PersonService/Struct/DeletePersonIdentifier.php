<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deletePersonIdentifier Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeletePersonIdentifier extends AbstractStructBase
{
    /**
     * The identifierValue
     * @var string
     */
    protected string $identifierValue;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'PersonIdentifierTypeValue'. Examples: nkb-bPK2, nkb-postkorb-handle, esi, hisinone-muster-h1pre, mbrwallet, orcid
     * @var string
     */
    protected string $type;
    /**
     * Constructor method for deletePersonIdentifier
     * @uses DeletePersonIdentifier::setIdentifierValue()
     * @uses DeletePersonIdentifier::setType()
     * @param string $identifierValue
     * @param string $type
     */
    public function __construct(string $identifierValue, string $type)
    {
        $this
            ->setIdentifierValue($identifierValue)
            ->setType($type);
    }
    /**
     * Get identifierValue value
     * @return string
     */
    public function getIdentifierValue(): string
    {
        return $this->identifierValue;
    }
    /**
     * Set identifierValue value
     * @param string $identifierValue
     * @return \FGTCLB\HisClient\PersonService\Struct\DeletePersonIdentifier
     */
    public function setIdentifierValue(string $identifierValue): self
    {
        // validation for constraint: string
        if (!is_null($identifierValue) && !is_string($identifierValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifierValue, true), gettype($identifierValue)), __LINE__);
        }
        $this->identifierValue = $identifierValue;
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\DeletePersonIdentifier
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
