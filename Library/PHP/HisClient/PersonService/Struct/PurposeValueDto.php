<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PurposeValueDto Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PurposeValueDto extends AbstractStructBase
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
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The hiskeyId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $hiskeyId = null;
    /**
     * The longtext
     * Meta information extracted from the WSDL
     * - documentation: Specification like application, carreer service or management of students.
     * - nillable: true
     * @var string|null
     */
    protected ?string $longtext = null;
    /**
     * The objecttype
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $objecttype = null;
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
     * The uniquename
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $uniquename = null;
    /**
     * Constructor method for PurposeValueDto
     * @uses PurposeValueDto::setDefaultlanguage()
     * @uses PurposeValueDto::setDefaulttext()
     * @uses PurposeValueDto::setId()
     * @uses PurposeValueDto::setHiskeyId()
     * @uses PurposeValueDto::setLongtext()
     * @uses PurposeValueDto::setObjecttype()
     * @uses PurposeValueDto::setShorttext()
     * @uses PurposeValueDto::setSortorder()
     * @uses PurposeValueDto::setUniquename()
     * @param int $defaultlanguage
     * @param string $defaulttext
     * @param int $id
     * @param int $hiskeyId
     * @param string $longtext
     * @param string $objecttype
     * @param string $shorttext
     * @param int $sortorder
     * @param string $uniquename
     */
    public function __construct(int $defaultlanguage, string $defaulttext, ?int $id = null, ?int $hiskeyId = null, ?string $longtext = null, ?string $objecttype = null, ?string $shorttext = null, ?int $sortorder = null, ?string $uniquename = null)
    {
        $this
            ->setDefaultlanguage($defaultlanguage)
            ->setDefaulttext($defaulttext)
            ->setId($id)
            ->setHiskeyId($hiskeyId)
            ->setLongtext($longtext)
            ->setObjecttype($objecttype)
            ->setShorttext($shorttext)
            ->setSortorder($sortorder)
            ->setUniquename($uniquename);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto
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
     * Get hiskeyId value
     * @return int|null
     */
    public function getHiskeyId(): ?int
    {
        return $this->hiskeyId;
    }
    /**
     * Set hiskeyId value
     * @param int $hiskeyId
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto
     */
    public function setHiskeyId(?int $hiskeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($hiskeyId) && !(is_int($hiskeyId) || ctype_digit($hiskeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hiskeyId, true), gettype($hiskeyId)), __LINE__);
        }
        $this->hiskeyId = $hiskeyId;
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto
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
     * Get objecttype value
     * @return string|null
     */
    public function getObjecttype(): ?string
    {
        return $this->objecttype;
    }
    /**
     * Set objecttype value
     * @param string $objecttype
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto
     */
    public function setObjecttype(?string $objecttype = null): self
    {
        // validation for constraint: string
        if (!is_null($objecttype) && !is_string($objecttype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objecttype, true), gettype($objecttype)), __LINE__);
        }
        $this->objecttype = $objecttype;
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto
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
     * Get uniquename value
     * @return string|null
     */
    public function getUniquename(): ?string
    {
        return $this->uniquename;
    }
    /**
     * Set uniquename value
     * @param string $uniquename
     * @return \FGTCLB\HisClient\PersonService\Struct\PurposeValueDto
     */
    public function setUniquename(?string $uniquename = null): self
    {
        // validation for constraint: string
        if (!is_null($uniquename) && !is_string($uniquename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniquename, true), gettype($uniquename)), __LINE__);
        }
        $this->uniquename = $uniquename;
        
        return $this;
    }
}
