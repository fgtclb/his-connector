<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fee Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Fee extends AbstractKeyValue
{
    /**
     * The commentary
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $commentary = null;
    /**
     * Constructor method for Fee
     * @uses Fee::setCommentary()
     * @param string $commentary
     */
    public function __construct(?string $commentary = null)
    {
        $this
            ->setCommentary($commentary);
    }
    /**
     * Get commentary value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommentary(): ?string
    {
        return $this->commentary ?? null;
    }
    /**
     * Set commentary value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $commentary
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\Fee
     */
    public function setCommentary(?string $commentary = null): self
    {
        // validation for constraint: string
        if (!is_null($commentary) && !is_string($commentary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentary, true), gettype($commentary)), __LINE__);
        }
        if (is_null($commentary) || (is_array($commentary) && empty($commentary))) {
            unset($this->commentary);
        } else {
            $this->commentary = $commentary;
        }
        
        return $this;
    }
}
