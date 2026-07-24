<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class KeyValue extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    protected int $id;
    /**
     * The objGuid
     * @var string
     */
    protected string $objGuid;
    /**
     * The lid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $lid = null;
    /**
     * The uniquename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $uniquename = null;
    /**
     * The shorttext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $shorttext = null;
    /**
     * The defaulttext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $defaulttext = null;
    /**
     * The longtext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $longtext = null;
    /**
     * The sortorder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $sortorder = null;
    /**
     * The defaultlanguage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $defaultlanguage = null;
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
     * The astat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $astat = null;
    /**
     * The hiskeyId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $hiskeyId = null;
    /**
     * Constructor method for KeyValue
     * @uses KeyValue::setId()
     * @uses KeyValue::setObjGuid()
     * @uses KeyValue::setLid()
     * @uses KeyValue::setUniquename()
     * @uses KeyValue::setShorttext()
     * @uses KeyValue::setDefaulttext()
     * @uses KeyValue::setLongtext()
     * @uses KeyValue::setSortorder()
     * @uses KeyValue::setDefaultlanguage()
     * @uses KeyValue::setValidFrom()
     * @uses KeyValue::setValidTo()
     * @uses KeyValue::setAstat()
     * @uses KeyValue::setHiskeyId()
     * @param int $id
     * @param string $objGuid
     * @param int $lid
     * @param string $uniquename
     * @param string $shorttext
     * @param string $defaulttext
     * @param string $longtext
     * @param int $sortorder
     * @param int $defaultlanguage
     * @param string $validFrom
     * @param string $validTo
     * @param string $astat
     * @param int $hiskeyId
     */
    public function __construct(int $id, string $objGuid, ?int $lid = null, ?string $uniquename = null, ?string $shorttext = null, ?string $defaulttext = null, ?string $longtext = null, ?int $sortorder = null, ?int $defaultlanguage = null, ?string $validFrom = null, ?string $validTo = null, ?string $astat = null, ?int $hiskeyId = null)
    {
        $this
            ->setId($id)
            ->setObjGuid($objGuid)
            ->setLid($lid)
            ->setUniquename($uniquename)
            ->setShorttext($shorttext)
            ->setDefaulttext($defaulttext)
            ->setLongtext($longtext)
            ->setSortorder($sortorder)
            ->setDefaultlanguage($defaultlanguage)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setAstat($astat)
            ->setHiskeyId($hiskeyId);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get objGuid value
     * @return string
     */
    public function getObjGuid(): string
    {
        return $this->objGuid;
    }
    /**
     * Set objGuid value
     * @param string $objGuid
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
     */
    public function setObjGuid(string $objGuid): self
    {
        // validation for constraint: string
        if (!is_null($objGuid) && !is_string($objGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objGuid, true), gettype($objGuid)), __LINE__);
        }
        $this->objGuid = $objGuid;
        
        return $this;
    }
    /**
     * Get lid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getLid(): ?int
    {
        return $this->lid ?? null;
    }
    /**
     * Set lid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $lid
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
     */
    public function setLid(?int $lid = null): self
    {
        // validation for constraint: int
        if (!is_null($lid) && !(is_int($lid) || ctype_digit($lid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lid, true), gettype($lid)), __LINE__);
        }
        if (is_null($lid) || (is_array($lid) && empty($lid))) {
            unset($this->lid);
        } else {
            $this->lid = $lid;
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
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
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
     * Get shorttext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShorttext(): ?string
    {
        return $this->shorttext ?? null;
    }
    /**
     * Set shorttext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shorttext
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
     */
    public function setShorttext(?string $shorttext = null): self
    {
        // validation for constraint: string
        if (!is_null($shorttext) && !is_string($shorttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shorttext, true), gettype($shorttext)), __LINE__);
        }
        if (is_null($shorttext) || (is_array($shorttext) && empty($shorttext))) {
            unset($this->shorttext);
        } else {
            $this->shorttext = $shorttext;
        }
        
        return $this;
    }
    /**
     * Get defaulttext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefaulttext(): ?string
    {
        return $this->defaulttext ?? null;
    }
    /**
     * Set defaulttext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $defaulttext
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
     */
    public function setDefaulttext(?string $defaulttext = null): self
    {
        // validation for constraint: string
        if (!is_null($defaulttext) && !is_string($defaulttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaulttext, true), gettype($defaulttext)), __LINE__);
        }
        if (is_null($defaulttext) || (is_array($defaulttext) && empty($defaulttext))) {
            unset($this->defaulttext);
        } else {
            $this->defaulttext = $defaulttext;
        }
        
        return $this;
    }
    /**
     * Get longtext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLongtext(): ?string
    {
        return $this->longtext ?? null;
    }
    /**
     * Set longtext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $longtext
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
     */
    public function setLongtext(?string $longtext = null): self
    {
        // validation for constraint: string
        if (!is_null($longtext) && !is_string($longtext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longtext, true), gettype($longtext)), __LINE__);
        }
        if (is_null($longtext) || (is_array($longtext) && empty($longtext))) {
            unset($this->longtext);
        } else {
            $this->longtext = $longtext;
        }
        
        return $this;
    }
    /**
     * Get sortorder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getSortorder(): ?int
    {
        return $this->sortorder ?? null;
    }
    /**
     * Set sortorder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $sortorder
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
     */
    public function setSortorder(?int $sortorder = null): self
    {
        // validation for constraint: int
        if (!is_null($sortorder) && !(is_int($sortorder) || ctype_digit($sortorder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortorder, true), gettype($sortorder)), __LINE__);
        }
        if (is_null($sortorder) || (is_array($sortorder) && empty($sortorder))) {
            unset($this->sortorder);
        } else {
            $this->sortorder = $sortorder;
        }
        
        return $this;
    }
    /**
     * Get defaultlanguage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDefaultlanguage(): ?int
    {
        return $this->defaultlanguage ?? null;
    }
    /**
     * Set defaultlanguage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $defaultlanguage
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
     */
    public function setDefaultlanguage(?int $defaultlanguage = null): self
    {
        // validation for constraint: int
        if (!is_null($defaultlanguage) && !(is_int($defaultlanguage) || ctype_digit($defaultlanguage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultlanguage, true), gettype($defaultlanguage)), __LINE__);
        }
        if (is_null($defaultlanguage) || (is_array($defaultlanguage) && empty($defaultlanguage))) {
            unset($this->defaultlanguage);
        } else {
            $this->defaultlanguage = $defaultlanguage;
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
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
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
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
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
    /**
     * Get astat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAstat(): ?string
    {
        return $this->astat ?? null;
    }
    /**
     * Set astat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $astat
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
     */
    public function setAstat(?string $astat = null): self
    {
        // validation for constraint: string
        if (!is_null($astat) && !is_string($astat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($astat, true), gettype($astat)), __LINE__);
        }
        if (is_null($astat) || (is_array($astat) && empty($astat))) {
            unset($this->astat);
        } else {
            $this->astat = $astat;
        }
        
        return $this;
    }
    /**
     * Get hiskeyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getHiskeyId(): ?int
    {
        return $this->hiskeyId ?? null;
    }
    /**
     * Set hiskeyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $hiskeyId
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\KeyValue
     */
    public function setHiskeyId(?int $hiskeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($hiskeyId) && !(is_int($hiskeyId) || ctype_digit($hiskeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hiskeyId, true), gettype($hiskeyId)), __LINE__);
        }
        if (is_null($hiskeyId) || (is_array($hiskeyId) && empty($hiskeyId))) {
            unset($this->hiskeyId);
        } else {
            $this->hiskeyId = $hiskeyId;
        }
        
        return $this;
    }
}
