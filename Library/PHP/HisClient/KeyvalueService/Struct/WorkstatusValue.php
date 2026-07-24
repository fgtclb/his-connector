<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkstatusValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WorkstatusValue extends AbstractKeyValue
{
    /**
     * The iconName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $iconName = null;
    /**
     * Constructor method for WorkstatusValue
     * @uses WorkstatusValue::setIconName()
     * @param string $iconName
     */
    public function __construct(?string $iconName = null)
    {
        $this
            ->setIconName($iconName);
    }
    /**
     * Get iconName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIconName(): ?string
    {
        return $this->iconName ?? null;
    }
    /**
     * Set iconName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iconName
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\WorkstatusValue
     */
    public function setIconName(?string $iconName = null): self
    {
        // validation for constraint: string
        if (!is_null($iconName) && !is_string($iconName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iconName, true), gettype($iconName)), __LINE__);
        }
        if (is_null($iconName) || (is_array($iconName) && empty($iconName))) {
            unset($this->iconName);
        } else {
            $this->iconName = $iconName;
        }
        
        return $this;
    }
}
