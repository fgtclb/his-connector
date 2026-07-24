<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPersonByIdentifierTypeAndValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPersonByIdentifierTypeAndValue extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'PersonIdentifierTypeValue'. Examples: nkb-bPK2, nkb-postkorb-handle, esi, hisinone-muster-h1pre, mbrwallet, orcid
     * @var string
     */
    protected string $type;
    /**
     * The identifier
     * @var string
     */
    protected string $identifier;
    /**
     * Constructor method for readPersonByIdentifierTypeAndValue
     * @uses ReadPersonByIdentifierTypeAndValue::setType()
     * @uses ReadPersonByIdentifierTypeAndValue::setIdentifier()
     * @param string $type
     * @param string $identifier
     */
    public function __construct(string $type, string $identifier)
    {
        $this
            ->setType($type)
            ->setIdentifier($identifier);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonByIdentifierTypeAndValue
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
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonByIdentifierTypeAndValue
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
}
