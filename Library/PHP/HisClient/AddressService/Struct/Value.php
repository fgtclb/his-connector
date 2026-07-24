<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Value Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Value extends AbstractStructBase
{
    /**
     * The defaultlanguage
     * @var int
     */
    protected int $defaultlanguage;
    /**
     * The defaulttext
     * @var string
     */
    protected string $defaulttext;
    /**
     * The uniquename
     * @var string
     */
    protected string $uniquename;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The objGuid
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $objGuid = null;
    /**
     * The longtext
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $longtext = null;
    /**
     * The shorttext
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $shorttext = null;
    /**
     * The sortorder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $sortorder = null;
    /**
     * Constructor method for Value
     * @uses Value::setDefaultlanguage()
     * @uses Value::setDefaulttext()
     * @uses Value::setUniquename()
     * @uses Value::setId()
     * @uses Value::setObjGuid()
     * @uses Value::setLongtext()
     * @uses Value::setShorttext()
     * @uses Value::setSortorder()
     * @param int $defaultlanguage
     * @param string $defaulttext
     * @param string $uniquename
     * @param int $id
     * @param string $objGuid
     * @param string $longtext
     * @param string $shorttext
     * @param int $sortorder
     */
    public function __construct(int $defaultlanguage, string $defaulttext, string $uniquename, ?int $id = null, ?string $objGuid = null, ?string $longtext = null, ?string $shorttext = null, ?int $sortorder = null)
    {
        $this
            ->setDefaultlanguage($defaultlanguage)
            ->setDefaulttext($defaulttext)
            ->setUniquename($uniquename)
            ->setId($id)
            ->setObjGuid($objGuid)
            ->setLongtext($longtext)
            ->setShorttext($shorttext)
            ->setSortorder($sortorder);
    }
    /**
     * Get defaultlanguage value
     * @return int
     */
    public function getDefaultlanguage(): int
    {
        return $this->defaultlanguage;
    }
    /**
     * Set defaultlanguage value
     * @param int $defaultlanguage
     * @return \FGTCLB\HisClient\AddressService\Struct\Value
     */
    public function setDefaultlanguage(int $defaultlanguage): self
    {
        // validation for constraint: int
        if (!is_null($defaultlanguage) && !(is_int($defaultlanguage) || ctype_digit($defaultlanguage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultlanguage, true), gettype($defaultlanguage)), __LINE__);
        }
        $this->defaultlanguage = $defaultlanguage;
        
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
     * @return \FGTCLB\HisClient\AddressService\Struct\Value
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
     * @return \FGTCLB\HisClient\AddressService\Struct\Value
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
     * @return \FGTCLB\HisClient\AddressService\Struct\Value
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
     * Get objGuid value
     * @return string|null
     */
    public function getObjGuid(): ?string
    {
        return $this->objGuid;
    }
    /**
     * Set objGuid value
     * @param string $objGuid
     * @return \FGTCLB\HisClient\AddressService\Struct\Value
     */
    public function setObjGuid(?string $objGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($objGuid) && !is_string($objGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objGuid, true), gettype($objGuid)), __LINE__);
        }
        $this->objGuid = $objGuid;
        
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
     * @return \FGTCLB\HisClient\AddressService\Struct\Value
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
     * @return \FGTCLB\HisClient\AddressService\Struct\Value
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
     * @return \FGTCLB\HisClient\AddressService\Struct\Value
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
}
