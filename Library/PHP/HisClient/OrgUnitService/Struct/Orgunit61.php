<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Orgunit61 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Orgunit61 extends AbstractStructBase
{
    /**
     * The uniquename
     * @var string
     */
    protected string $uniquename;
    /**
     * The defaulttext
     * @var string
     */
    protected string $defaulttext;
    /**
     * The languageId
     * @var int
     */
    protected int $languageId;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The lid
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $lid = null;
    /**
     * The astat
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $astat = null;
    /**
     * The shorttext
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $shorttext = null;
    /**
     * The longtext
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $longtext = null;
    /**
     * The parentId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $parentId = null;
    /**
     * The parentLid
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $parentLid = null;
    /**
     * The typeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $typeId = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The sortorder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $sortorder = null;
    /**
     * The children61
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \FGTCLB\HisClient\OrgUnitService\Struct\Children61Type|null
     */
    protected ?\FGTCLB\HisClient\OrgUnitService\Struct\Children61Type $children61 = null;
    /**
     * Constructor method for Orgunit61
     * @uses Orgunit61::setUniquename()
     * @uses Orgunit61::setDefaulttext()
     * @uses Orgunit61::setLanguageId()
     * @uses Orgunit61::setId()
     * @uses Orgunit61::setLid()
     * @uses Orgunit61::setAstat()
     * @uses Orgunit61::setShorttext()
     * @uses Orgunit61::setLongtext()
     * @uses Orgunit61::setParentId()
     * @uses Orgunit61::setParentLid()
     * @uses Orgunit61::setTypeId()
     * @uses Orgunit61::setValidFrom()
     * @uses Orgunit61::setValidTo()
     * @uses Orgunit61::setSortorder()
     * @uses Orgunit61::setChildren61()
     * @param string $uniquename
     * @param string $defaulttext
     * @param int $languageId
     * @param int $id
     * @param int $lid
     * @param string $astat
     * @param string $shorttext
     * @param string $longtext
     * @param int $parentId
     * @param int $parentLid
     * @param int $typeId
     * @param string $validFrom
     * @param string $validTo
     * @param int $sortorder
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\Children61Type $children61
     */
    public function __construct(string $uniquename, string $defaulttext, int $languageId, ?int $id = null, ?int $lid = null, ?string $astat = null, ?string $shorttext = null, ?string $longtext = null, ?int $parentId = null, ?int $parentLid = null, ?int $typeId = null, ?string $validFrom = null, ?string $validTo = null, ?int $sortorder = null, ?\FGTCLB\HisClient\OrgUnitService\Struct\Children61Type $children61 = null)
    {
        $this
            ->setUniquename($uniquename)
            ->setDefaulttext($defaulttext)
            ->setLanguageId($languageId)
            ->setId($id)
            ->setLid($lid)
            ->setAstat($astat)
            ->setShorttext($shorttext)
            ->setLongtext($longtext)
            ->setParentId($parentId)
            ->setParentLid($parentLid)
            ->setTypeId($typeId)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setSortorder($sortorder)
            ->setChildren61($children61);
    }
    /**
     * Get uniquename value
     * @return string
     */
    public function getUniquename(): string
    {
        return $this->uniquename;
    }
    /**
     * Set uniquename value
     * @param string $uniquename
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setUniquename(string $uniquename): self
    {
        // validation for constraint: string
        if (!is_null($uniquename) && !is_string($uniquename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniquename, true), gettype($uniquename)), __LINE__);
        }
        $this->uniquename = $uniquename;
        
        return $this;
    }
    /**
     * Get defaulttext value
     * @return string
     */
    public function getDefaulttext(): string
    {
        return $this->defaulttext;
    }
    /**
     * Set defaulttext value
     * @param string $defaulttext
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setDefaulttext(string $defaulttext): self
    {
        // validation for constraint: string
        if (!is_null($defaulttext) && !is_string($defaulttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaulttext, true), gettype($defaulttext)), __LINE__);
        }
        $this->defaulttext = $defaulttext;
        
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
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
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setId(?int $id = null): self
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
     * @return int|null
     */
    public function getLid(): ?int
    {
        return $this->lid;
    }
    /**
     * Set lid value
     * @param int $lid
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setLid(?int $lid = null): self
    {
        // validation for constraint: int
        if (!is_null($lid) && !(is_int($lid) || ctype_digit($lid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lid, true), gettype($lid)), __LINE__);
        }
        $this->lid = $lid;
        
        return $this;
    }
    /**
     * Get astat value
     * @return string|null
     */
    public function getAstat(): ?string
    {
        return $this->astat;
    }
    /**
     * Set astat value
     * @param string $astat
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setAstat(?string $astat = null): self
    {
        // validation for constraint: string
        if (!is_null($astat) && !is_string($astat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($astat, true), gettype($astat)), __LINE__);
        }
        $this->astat = $astat;
        
        return $this;
    }
    /**
     * Get shorttext value
     * @return string|null
     */
    public function getShorttext(): ?string
    {
        return $this->shorttext;
    }
    /**
     * Set shorttext value
     * @param string $shorttext
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setShorttext(?string $shorttext = null): self
    {
        // validation for constraint: string
        if (!is_null($shorttext) && !is_string($shorttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shorttext, true), gettype($shorttext)), __LINE__);
        }
        $this->shorttext = $shorttext;
        
        return $this;
    }
    /**
     * Get longtext value
     * @return string|null
     */
    public function getLongtext(): ?string
    {
        return $this->longtext;
    }
    /**
     * Set longtext value
     * @param string $longtext
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setLongtext(?string $longtext = null): self
    {
        // validation for constraint: string
        if (!is_null($longtext) && !is_string($longtext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longtext, true), gettype($longtext)), __LINE__);
        }
        $this->longtext = $longtext;
        
        return $this;
    }
    /**
     * Get parentId value
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     * Set parentId value
     * @param int $parentId
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setParentId(?int $parentId = null): self
    {
        // validation for constraint: int
        if (!is_null($parentId) && !(is_int($parentId) || ctype_digit($parentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        $this->parentId = $parentId;
        
        return $this;
    }
    /**
     * Get parentLid value
     * @return int|null
     */
    public function getParentLid(): ?int
    {
        return $this->parentLid;
    }
    /**
     * Set parentLid value
     * @param int $parentLid
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setParentLid(?int $parentLid = null): self
    {
        // validation for constraint: int
        if (!is_null($parentLid) && !(is_int($parentLid) || ctype_digit($parentLid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentLid, true), gettype($parentLid)), __LINE__);
        }
        $this->parentLid = $parentLid;
        
        return $this;
    }
    /**
     * Get typeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->typeId ?? null;
    }
    /**
     * Set typeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $typeId
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setTypeId(?int $typeId = null): self
    {
        // validation for constraint: int
        if (!is_null($typeId) && !(is_int($typeId) || ctype_digit($typeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        if (is_null($typeId) || (is_array($typeId) && empty($typeId))) {
            unset($this->typeId);
        } else {
            $this->typeId = $typeId;
        }
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
    /**
     * Get sortorder value
     * @return int|null
     */
    public function getSortorder(): ?int
    {
        return $this->sortorder;
    }
    /**
     * Set sortorder value
     * @param int $sortorder
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setSortorder(?int $sortorder = null): self
    {
        // validation for constraint: int
        if (!is_null($sortorder) && !(is_int($sortorder) || ctype_digit($sortorder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortorder, true), gettype($sortorder)), __LINE__);
        }
        $this->sortorder = $sortorder;
        
        return $this;
    }
    /**
     * Get children61 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Children61Type|null
     */
    public function getChildren61(): ?\FGTCLB\HisClient\OrgUnitService\Struct\Children61Type
    {
        return $this->children61 ?? null;
    }
    /**
     * Set children61 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\Children61Type $children61
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\Orgunit61
     */
    public function setChildren61(?\FGTCLB\HisClient\OrgUnitService\Struct\Children61Type $children61 = null): self
    {
        if (is_null($children61) || (is_array($children61) && empty($children61))) {
            unset($this->children61);
        } else {
            $this->children61 = $children61;
        }
        
        return $this;
    }
}
