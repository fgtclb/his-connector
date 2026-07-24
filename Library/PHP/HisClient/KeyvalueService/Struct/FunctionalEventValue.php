<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FunctionalEventValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FunctionalEventValue extends AbstractKeyValue
{
    /**
     * The technicalContext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $technicalContext = null;
    /**
     * Constructor method for FunctionalEventValue
     * @uses FunctionalEventValue::setTechnicalContext()
     * @param string $technicalContext
     */
    public function __construct(?string $technicalContext = null)
    {
        $this
            ->setTechnicalContext($technicalContext);
    }
    /**
     * Get technicalContext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTechnicalContext(): ?string
    {
        return $this->technicalContext ?? null;
    }
    /**
     * Set technicalContext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $technicalContext
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\FunctionalEventValue
     */
    public function setTechnicalContext(?string $technicalContext = null): self
    {
        // validation for constraint: string
        if (!is_null($technicalContext) && !is_string($technicalContext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($technicalContext, true), gettype($technicalContext)), __LINE__);
        }
        if (is_null($technicalContext) || (is_array($technicalContext) && empty($technicalContext))) {
            unset($this->technicalContext);
        } else {
            $this->technicalContext = $technicalContext;
        }
        
        return $this;
    }
}
