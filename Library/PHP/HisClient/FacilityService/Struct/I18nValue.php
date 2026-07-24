<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for I18nValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class I18nValue extends AbstractStructBase
{
    /**
     * The defaulttext
     * @var string
     */
    protected string $defaulttext;
    /**
     * The defaultlanguageId
     * Meta information extracted from the WSDL
     * - documentation: Language id of preferred language.
     * @var int
     */
    protected int $defaultlanguageId;
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
     * - documentation: Globally unique Identifier.
     * - nillable: true
     * @var string|null
     */
    protected ?string $objGuid = null;
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
     * Constructor method for I18nValue
     * @uses I18nValue::setDefaulttext()
     * @uses I18nValue::setDefaultlanguageId()
     * @uses I18nValue::setId()
     * @uses I18nValue::setObjGuid()
     * @uses I18nValue::setShorttext()
     * @uses I18nValue::setLongtext()
     * @param string $defaulttext
     * @param int $defaultlanguageId
     * @param int $id
     * @param string $objGuid
     * @param string $shorttext
     * @param string $longtext
     */
    public function __construct(string $defaulttext, int $defaultlanguageId, ?int $id = null, ?string $objGuid = null, ?string $shorttext = null, ?string $longtext = null)
    {
        $this
            ->setDefaulttext($defaulttext)
            ->setDefaultlanguageId($defaultlanguageId)
            ->setId($id)
            ->setObjGuid($objGuid)
            ->setShorttext($shorttext)
            ->setLongtext($longtext);
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\I18nValue
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
     * Get defaultlanguageId value
     * @return int
     */
    public function getDefaultlanguageId(): int
    {
        return $this->defaultlanguageId;
    }
    /**
     * Set defaultlanguageId value
     * @param int $defaultlanguageId
     * @return \FGTCLB\HisClient\FacilityService\Struct\I18nValue
     */
    public function setDefaultlanguageId(int $defaultlanguageId): self
    {
        // validation for constraint: int
        if (!is_null($defaultlanguageId) && !(is_int($defaultlanguageId) || ctype_digit($defaultlanguageId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultlanguageId, true), gettype($defaultlanguageId)), __LINE__);
        }
        $this->defaultlanguageId = $defaultlanguageId;
        
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\I18nValue
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\I18nValue
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\I18nValue
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\I18nValue
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
}
