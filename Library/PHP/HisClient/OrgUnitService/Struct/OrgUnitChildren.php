<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgUnitChildren Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrgUnitChildren extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    protected int $id;
    /**
     * The lid
     * @var int
     */
    protected int $lid;
    /**
     * The languageId
     * @var int
     */
    protected int $languageId;
    /**
     * The displaytext
     * @var string
     */
    protected string $displaytext;
    /**
     * The shortcut
     * Meta information extracted from the WSDL
     * - documentation: is equal with uniquename
     * - nillable: true
     * @var string|null
     */
    protected ?string $shortcut = null;
    /**
     * The shorttext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $shorttext = null;
    /**
     * The uniquename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $uniquename = null;
    /**
     * The longtext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $longtext = null;
    /**
     * The parentId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $parentId = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $type = null;
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
     * The versionedObjId
     * Meta information extracted from the WSDL
     * - documentation: is equal with lid
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $versionedObjId = null;
    /**
     * Constructor method for OrgUnitChildren
     * @uses OrgUnitChildren::setId()
     * @uses OrgUnitChildren::setLid()
     * @uses OrgUnitChildren::setLanguageId()
     * @uses OrgUnitChildren::setDisplaytext()
     * @uses OrgUnitChildren::setShortcut()
     * @uses OrgUnitChildren::setShorttext()
     * @uses OrgUnitChildren::setUniquename()
     * @uses OrgUnitChildren::setLongtext()
     * @uses OrgUnitChildren::setParentId()
     * @uses OrgUnitChildren::setType()
     * @uses OrgUnitChildren::setValidFrom()
     * @uses OrgUnitChildren::setValidTo()
     * @uses OrgUnitChildren::setVersionedObjId()
     * @param int $id
     * @param int $lid
     * @param int $languageId
     * @param string $displaytext
     * @param string $shortcut
     * @param string $shorttext
     * @param string $uniquename
     * @param string $longtext
     * @param int $parentId
     * @param int $type
     * @param string $validFrom
     * @param string $validTo
     * @param int $versionedObjId
     */
    public function __construct(int $id, int $lid, int $languageId, string $displaytext, ?string $shortcut = null, ?string $shorttext = null, ?string $uniquename = null, ?string $longtext = null, ?int $parentId = null, ?int $type = null, ?string $validFrom = null, ?string $validTo = null, ?int $versionedObjId = null)
    {
        $this
            ->setId($id)
            ->setLid($lid)
            ->setLanguageId($languageId)
            ->setDisplaytext($displaytext)
            ->setShortcut($shortcut)
            ->setShorttext($shorttext)
            ->setUniquename($uniquename)
            ->setLongtext($longtext)
            ->setParentId($parentId)
            ->setType($type)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setVersionedObjId($versionedObjId);
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
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
     * Get lid value
     * @return int
     */
    public function getLid(): int
    {
        return $this->lid;
    }
    /**
     * Set lid value
     * @param int $lid
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
     */
    public function setLid(int $lid): self
    {
        // validation for constraint: int
        if (!is_null($lid) && !(is_int($lid) || ctype_digit($lid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lid, true), gettype($lid)), __LINE__);
        }
        $this->lid = $lid;
        
        return $this;
    }
    /**
     * Get languageId value
     * @return int
     */
    public function getLanguageId(): int
    {
        return $this->languageId;
    }
    /**
     * Set languageId value
     * @param int $languageId
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
     */
    public function setLanguageId(int $languageId): self
    {
        // validation for constraint: int
        if (!is_null($languageId) && !(is_int($languageId) || ctype_digit($languageId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($languageId, true), gettype($languageId)), __LINE__);
        }
        $this->languageId = $languageId;
        
        return $this;
    }
    /**
     * Get displaytext value
     * @return string
     */
    public function getDisplaytext(): string
    {
        return $this->displaytext;
    }
    /**
     * Set displaytext value
     * @param string $displaytext
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
     */
    public function setDisplaytext(string $displaytext): self
    {
        // validation for constraint: string
        if (!is_null($displaytext) && !is_string($displaytext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displaytext, true), gettype($displaytext)), __LINE__);
        }
        $this->displaytext = $displaytext;
        
        return $this;
    }
    /**
     * Get shortcut value
     * @return string|null
     */
    public function getShortcut(): ?string
    {
        return $this->shortcut;
    }
    /**
     * Set shortcut value
     * @param string $shortcut
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
     */
    public function setShortcut(?string $shortcut = null): self
    {
        // validation for constraint: string
        if (!is_null($shortcut) && !is_string($shortcut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortcut, true), gettype($shortcut)), __LINE__);
        }
        $this->shortcut = $shortcut;
        
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
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
     * Get parentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId ?? null;
    }
    /**
     * Set parentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $parentId
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
     */
    public function setParentId(?int $parentId = null): self
    {
        // validation for constraint: int
        if (!is_null($parentId) && !(is_int($parentId) || ctype_digit($parentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        if (is_null($parentId) || (is_array($parentId) && empty($parentId))) {
            unset($this->parentId);
        } else {
            $this->parentId = $parentId;
        }
        
        return $this;
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type ?? null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $type
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
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
     * Get versionedObjId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVersionedObjId(): ?int
    {
        return $this->versionedObjId ?? null;
    }
    /**
     * Set versionedObjId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $versionedObjId
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\OrgUnitChildren
     */
    public function setVersionedObjId(?int $versionedObjId = null): self
    {
        // validation for constraint: int
        if (!is_null($versionedObjId) && !(is_int($versionedObjId) || ctype_digit($versionedObjId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($versionedObjId, true), gettype($versionedObjId)), __LINE__);
        }
        if (is_null($versionedObjId) || (is_array($versionedObjId) && empty($versionedObjId))) {
            unset($this->versionedObjId);
        } else {
            $this->versionedObjId = $versionedObjId;
        }
        
        return $this;
    }
}
