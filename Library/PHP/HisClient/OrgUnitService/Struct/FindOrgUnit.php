<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findOrgUnit Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindOrgUnit extends AbstractStructBase
{
    /**
     * The defaultText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $defaultText = null;
    /**
     * The longText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $longText = null;
    /**
     * The shortText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $shortText = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The uniquename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $uniquename = null;
    /**
     * Constructor method for findOrgUnit
     * @uses FindOrgUnit::setDefaultText()
     * @uses FindOrgUnit::setLongText()
     * @uses FindOrgUnit::setShortText()
     * @uses FindOrgUnit::setDescription()
     * @uses FindOrgUnit::setUniquename()
     * @param string $defaultText
     * @param string $longText
     * @param string $shortText
     * @param string $description
     * @param string $uniquename
     */
    public function __construct(?string $defaultText = null, ?string $longText = null, ?string $shortText = null, ?string $description = null, ?string $uniquename = null)
    {
        $this
            ->setDefaultText($defaultText)
            ->setLongText($longText)
            ->setShortText($shortText)
            ->setDescription($description)
            ->setUniquename($uniquename);
    }
    /**
     * Get defaultText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefaultText(): ?string
    {
        return $this->defaultText ?? null;
    }
    /**
     * Set defaultText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $defaultText
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit
     */
    public function setDefaultText(?string $defaultText = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultText) && !is_string($defaultText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultText, true), gettype($defaultText)), __LINE__);
        }
        if (is_null($defaultText) || (is_array($defaultText) && empty($defaultText))) {
            unset($this->defaultText);
        } else {
            $this->defaultText = $defaultText;
        }
        
        return $this;
    }
    /**
     * Get longText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLongText(): ?string
    {
        return $this->longText ?? null;
    }
    /**
     * Set longText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $longText
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit
     */
    public function setLongText(?string $longText = null): self
    {
        // validation for constraint: string
        if (!is_null($longText) && !is_string($longText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longText, true), gettype($longText)), __LINE__);
        }
        if (is_null($longText) || (is_array($longText) && empty($longText))) {
            unset($this->longText);
        } else {
            $this->longText = $longText;
        }
        
        return $this;
    }
    /**
     * Get shortText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShortText(): ?string
    {
        return $this->shortText ?? null;
    }
    /**
     * Set shortText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shortText
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit
     */
    public function setShortText(?string $shortText = null): self
    {
        // validation for constraint: string
        if (!is_null($shortText) && !is_string($shortText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortText, true), gettype($shortText)), __LINE__);
        }
        if (is_null($shortText) || (is_array($shortText) && empty($shortText))) {
            unset($this->shortText);
        } else {
            $this->shortText = $shortText;
        }
        
        return $this;
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit
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
    /**
     * Get uniquename value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUniquename(): ?string
    {
        return $this->uniquename ?? null;
    }
    /**
     * Set uniquename value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $uniquename
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit
     */
    public function setUniquename(?string $uniquename = null): self
    {
        // validation for constraint: string
        if (!is_null($uniquename) && !is_string($uniquename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniquename, true), gettype($uniquename)), __LINE__);
        }
        if (is_null($uniquename) || (is_array($uniquename) && empty($uniquename))) {
            unset($this->uniquename);
        } else {
            $this->uniquename = $uniquename;
        }
        
        return $this;
    }
}
