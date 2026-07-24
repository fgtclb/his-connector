<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonIdentifierTypeValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonIdentifierTypeValue extends AbstractKeyValue
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for PersonIdentifierTypeValue
     * @uses PersonIdentifierTypeValue::setDescription()
     * @param string $description
     */
    public function __construct(?string $description = null)
    {
        $this
            ->setDescription($description);
    }
    /**
     * Get description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }
    /**
     * Set description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\PersonIdentifierTypeValue
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->description);
        } else {
            $this->description = $description;
        }
        
        return $this;
    }
}
