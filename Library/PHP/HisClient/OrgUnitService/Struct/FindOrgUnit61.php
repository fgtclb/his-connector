<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findOrgUnit61 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindOrgUnit61 extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The lid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $lid = null;
    /**
     * The parentLid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $parentLid = null;
    /**
     * The uniquename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $uniquename = null;
    /**
     * The shortText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $shortText = null;
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
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The orgunittypeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $orgunittypeId = null;
    /**
     * The astatOrgunitCategoryId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $astatOrgunitCategoryId = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for findOrgUnit61
     * @uses FindOrgUnit61::setId()
     * @uses FindOrgUnit61::setLid()
     * @uses FindOrgUnit61::setParentLid()
     * @uses FindOrgUnit61::setUniquename()
     * @uses FindOrgUnit61::setShortText()
     * @uses FindOrgUnit61::setDefaultText()
     * @uses FindOrgUnit61::setLongText()
     * @uses FindOrgUnit61::setDescription()
     * @uses FindOrgUnit61::setOrgunittypeId()
     * @uses FindOrgUnit61::setAstatOrgunitCategoryId()
     * @uses FindOrgUnit61::setValidFrom()
     * @uses FindOrgUnit61::setValidTo()
     * @param string $id
     * @param string $lid
     * @param string $parentLid
     * @param string $uniquename
     * @param string $shortText
     * @param string $defaultText
     * @param string $longText
     * @param string $description
     * @param string $orgunittypeId
     * @param string $astatOrgunitCategoryId
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?string $id = null, ?string $lid = null, ?string $parentLid = null, ?string $uniquename = null, ?string $shortText = null, ?string $defaultText = null, ?string $longText = null, ?string $description = null, ?string $orgunittypeId = null, ?string $astatOrgunitCategoryId = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setId($id)
            ->setLid($lid)
            ->setParentLid($parentLid)
            ->setUniquename($uniquename)
            ->setShortText($shortText)
            ->setDefaultText($defaultText)
            ->setLongText($longText)
            ->setDescription($description)
            ->setOrgunittypeId($orgunittypeId)
            ->setAstatOrgunitCategoryId($astatOrgunitCategoryId)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        
        return $this;
    }
    /**
     * Get lid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLid(): ?string
    {
        return $this->lid ?? null;
    }
    /**
     * Set lid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lid
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61
     */
    public function setLid(?string $lid = null): self
    {
        // validation for constraint: string
        if (!is_null($lid) && !is_string($lid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lid, true), gettype($lid)), __LINE__);
        }
        if (is_null($lid) || (is_array($lid) && empty($lid))) {
            unset($this->lid);
        } else {
            $this->lid = $lid;
        }
        
        return $this;
    }
    /**
     * Get parentLid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentLid(): ?string
    {
        return $this->parentLid ?? null;
    }
    /**
     * Set parentLid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentLid
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61
     */
    public function setParentLid(?string $parentLid = null): self
    {
        // validation for constraint: string
        if (!is_null($parentLid) && !is_string($parentLid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentLid, true), gettype($parentLid)), __LINE__);
        }
        if (is_null($parentLid) || (is_array($parentLid) && empty($parentLid))) {
            unset($this->parentLid);
        } else {
            $this->parentLid = $parentLid;
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61
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
     * Get orgunittypeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrgunittypeId(): ?string
    {
        return $this->orgunittypeId ?? null;
    }
    /**
     * Set orgunittypeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orgunittypeId
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61
     */
    public function setOrgunittypeId(?string $orgunittypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunittypeId) && !is_string($orgunittypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunittypeId, true), gettype($orgunittypeId)), __LINE__);
        }
        if (is_null($orgunittypeId) || (is_array($orgunittypeId) && empty($orgunittypeId))) {
            unset($this->orgunittypeId);
        } else {
            $this->orgunittypeId = $orgunittypeId;
        }
        
        return $this;
    }
    /**
     * Get astatOrgunitCategoryId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAstatOrgunitCategoryId(): ?string
    {
        return $this->astatOrgunitCategoryId ?? null;
    }
    /**
     * Set astatOrgunitCategoryId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $astatOrgunitCategoryId
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61
     */
    public function setAstatOrgunitCategoryId(?string $astatOrgunitCategoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($astatOrgunitCategoryId) && !is_string($astatOrgunitCategoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($astatOrgunitCategoryId, true), gettype($astatOrgunitCategoryId)), __LINE__);
        }
        if (is_null($astatOrgunitCategoryId) || (is_array($astatOrgunitCategoryId) && empty($astatOrgunitCategoryId))) {
            unset($this->astatOrgunitCategoryId);
        } else {
            $this->astatOrgunitCategoryId = $astatOrgunitCategoryId;
        }
        
        return $this;
    }
    /**
     * Get validFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom ?? null;
    }
    /**
     * Set validFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validFrom
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        if (is_null($validFrom) || (is_array($validFrom) && empty($validFrom))) {
            unset($this->validFrom);
        } else {
            $this->validFrom = $validFrom;
        }
        
        return $this;
    }
    /**
     * Get validTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo ?? null;
    }
    /**
     * Set validTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validTo
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        if (is_null($validTo) || (is_array($validTo) && empty($validTo))) {
            unset($this->validTo);
        } else {
            $this->validTo = $validTo;
        }
        
        return $this;
    }
}
