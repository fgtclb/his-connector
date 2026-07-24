<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Personinfo201912 Struct
 * Meta information extracted from the WSDL
 * - documentation: Additional personal data
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Personinfo201912 extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The nationality
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'CountryValue'. Examples: D, AFG, ET, AL, DZ, VI, AS, AND, ANG, ATG
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $nationality = null;
    /**
     * The secondNationality
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'CountryValue'. Examples: D, AFG, ET, AL, DZ, VI, AS, AND, ANG, ATG
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $secondNationality = null;
    /**
     * The hasDoneService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $hasDoneService = null;
    /**
     * The visumnumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $visumnumber = null;
    /**
     * The healthInsuranceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $healthInsuranceNumber = null;
    /**
     * The familyStatus
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'FamilyStatusValue'. Examples: L, V
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $familyStatus = null;
    /**
     * The familystatusFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $familystatusFrom = null;
    /**
     * The religion
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'ReligionValue'. Examples: ak, ev, lt, rf, rk
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $religion = null;
    /**
     * The healthInsurance
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'HealthInsuranceValue'. Examples: 36308586, 01086312, 30165364, 52623109, 01086130, 53111948, 54706610, 60335830, 65330299, 62210889
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $healthInsurance = null;
    /**
     * The healthInsuranceText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $healthInsuranceText = null;
    /**
     * The insurantStatus
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'InsurantStatusValue'. Examples: B, P
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $insurantStatus = null;
    /**
     * The createdAt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $createdAt = null;
    /**
     * The updatedAt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $updatedAt = null;
    /**
     * The objGuid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $objGuid = null;
    /**
     * Constructor method for Personinfo201912
     * @uses Personinfo201912::setId()
     * @uses Personinfo201912::setNationality()
     * @uses Personinfo201912::setSecondNationality()
     * @uses Personinfo201912::setHasDoneService()
     * @uses Personinfo201912::setVisumnumber()
     * @uses Personinfo201912::setHealthInsuranceNumber()
     * @uses Personinfo201912::setFamilyStatus()
     * @uses Personinfo201912::setFamilystatusFrom()
     * @uses Personinfo201912::setReligion()
     * @uses Personinfo201912::setHealthInsurance()
     * @uses Personinfo201912::setHealthInsuranceText()
     * @uses Personinfo201912::setInsurantStatus()
     * @uses Personinfo201912::setCreatedAt()
     * @uses Personinfo201912::setUpdatedAt()
     * @uses Personinfo201912::setObjGuid()
     * @param int $id
     * @param string $nationality
     * @param string $secondNationality
     * @param bool $hasDoneService
     * @param string $visumnumber
     * @param string $healthInsuranceNumber
     * @param string $familyStatus
     * @param string $familystatusFrom
     * @param string $religion
     * @param string $healthInsurance
     * @param string $healthInsuranceText
     * @param string $insurantStatus
     * @param string $createdAt
     * @param string $updatedAt
     * @param string $objGuid
     */
    public function __construct(?int $id = null, ?string $nationality = null, ?string $secondNationality = null, ?bool $hasDoneService = null, ?string $visumnumber = null, ?string $healthInsuranceNumber = null, ?string $familyStatus = null, ?string $familystatusFrom = null, ?string $religion = null, ?string $healthInsurance = null, ?string $healthInsuranceText = null, ?string $insurantStatus = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $objGuid = null)
    {
        $this
            ->setId($id)
            ->setNationality($nationality)
            ->setSecondNationality($secondNationality)
            ->setHasDoneService($hasDoneService)
            ->setVisumnumber($visumnumber)
            ->setHealthInsuranceNumber($healthInsuranceNumber)
            ->setFamilyStatus($familyStatus)
            ->setFamilystatusFrom($familystatusFrom)
            ->setReligion($religion)
            ->setHealthInsurance($healthInsurance)
            ->setHealthInsuranceText($healthInsuranceText)
            ->setInsurantStatus($insurantStatus)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt)
            ->setObjGuid($objGuid);
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id ?? null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $id
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        
        return $this;
    }
    /**
     * Get nationality value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNationality(): ?string
    {
        return $this->nationality ?? null;
    }
    /**
     * Set nationality value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nationality
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setNationality(?string $nationality = null): self
    {
        // validation for constraint: string
        if (!is_null($nationality) && !is_string($nationality)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationality, true), gettype($nationality)), __LINE__);
        }
        if (is_null($nationality) || (is_array($nationality) && empty($nationality))) {
            unset($this->nationality);
        } else {
            $this->nationality = $nationality;
        }
        
        return $this;
    }
    /**
     * Get secondNationality value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSecondNationality(): ?string
    {
        return $this->secondNationality ?? null;
    }
    /**
     * Set secondNationality value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $secondNationality
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setSecondNationality(?string $secondNationality = null): self
    {
        // validation for constraint: string
        if (!is_null($secondNationality) && !is_string($secondNationality)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondNationality, true), gettype($secondNationality)), __LINE__);
        }
        if (is_null($secondNationality) || (is_array($secondNationality) && empty($secondNationality))) {
            unset($this->secondNationality);
        } else {
            $this->secondNationality = $secondNationality;
        }
        
        return $this;
    }
    /**
     * Get hasDoneService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getHasDoneService(): ?bool
    {
        return $this->hasDoneService ?? null;
    }
    /**
     * Set hasDoneService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $hasDoneService
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setHasDoneService(?bool $hasDoneService = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasDoneService) && !is_bool($hasDoneService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasDoneService, true), gettype($hasDoneService)), __LINE__);
        }
        if (is_null($hasDoneService) || (is_array($hasDoneService) && empty($hasDoneService))) {
            unset($this->hasDoneService);
        } else {
            $this->hasDoneService = $hasDoneService;
        }
        
        return $this;
    }
    /**
     * Get visumnumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVisumnumber(): ?string
    {
        return $this->visumnumber ?? null;
    }
    /**
     * Set visumnumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $visumnumber
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setVisumnumber(?string $visumnumber = null): self
    {
        // validation for constraint: string
        if (!is_null($visumnumber) && !is_string($visumnumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($visumnumber, true), gettype($visumnumber)), __LINE__);
        }
        if (is_null($visumnumber) || (is_array($visumnumber) && empty($visumnumber))) {
            unset($this->visumnumber);
        } else {
            $this->visumnumber = $visumnumber;
        }
        
        return $this;
    }
    /**
     * Get healthInsuranceNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHealthInsuranceNumber(): ?string
    {
        return $this->healthInsuranceNumber ?? null;
    }
    /**
     * Set healthInsuranceNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $healthInsuranceNumber
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setHealthInsuranceNumber(?string $healthInsuranceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($healthInsuranceNumber) && !is_string($healthInsuranceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($healthInsuranceNumber, true), gettype($healthInsuranceNumber)), __LINE__);
        }
        if (is_null($healthInsuranceNumber) || (is_array($healthInsuranceNumber) && empty($healthInsuranceNumber))) {
            unset($this->healthInsuranceNumber);
        } else {
            $this->healthInsuranceNumber = $healthInsuranceNumber;
        }
        
        return $this;
    }
    /**
     * Get familyStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFamilyStatus(): ?string
    {
        return $this->familyStatus ?? null;
    }
    /**
     * Set familyStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $familyStatus
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setFamilyStatus(?string $familyStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($familyStatus) && !is_string($familyStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($familyStatus, true), gettype($familyStatus)), __LINE__);
        }
        if (is_null($familyStatus) || (is_array($familyStatus) && empty($familyStatus))) {
            unset($this->familyStatus);
        } else {
            $this->familyStatus = $familyStatus;
        }
        
        return $this;
    }
    /**
     * Get familystatusFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFamilystatusFrom(): ?string
    {
        return $this->familystatusFrom ?? null;
    }
    /**
     * Set familystatusFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $familystatusFrom
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setFamilystatusFrom(?string $familystatusFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($familystatusFrom) && !is_string($familystatusFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($familystatusFrom, true), gettype($familystatusFrom)), __LINE__);
        }
        if (is_null($familystatusFrom) || (is_array($familystatusFrom) && empty($familystatusFrom))) {
            unset($this->familystatusFrom);
        } else {
            $this->familystatusFrom = $familystatusFrom;
        }
        
        return $this;
    }
    /**
     * Get religion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReligion(): ?string
    {
        return $this->religion ?? null;
    }
    /**
     * Set religion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $religion
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setReligion(?string $religion = null): self
    {
        // validation for constraint: string
        if (!is_null($religion) && !is_string($religion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($religion, true), gettype($religion)), __LINE__);
        }
        if (is_null($religion) || (is_array($religion) && empty($religion))) {
            unset($this->religion);
        } else {
            $this->religion = $religion;
        }
        
        return $this;
    }
    /**
     * Get healthInsurance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHealthInsurance(): ?string
    {
        return $this->healthInsurance ?? null;
    }
    /**
     * Set healthInsurance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $healthInsurance
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setHealthInsurance(?string $healthInsurance = null): self
    {
        // validation for constraint: string
        if (!is_null($healthInsurance) && !is_string($healthInsurance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($healthInsurance, true), gettype($healthInsurance)), __LINE__);
        }
        if (is_null($healthInsurance) || (is_array($healthInsurance) && empty($healthInsurance))) {
            unset($this->healthInsurance);
        } else {
            $this->healthInsurance = $healthInsurance;
        }
        
        return $this;
    }
    /**
     * Get healthInsuranceText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHealthInsuranceText(): ?string
    {
        return $this->healthInsuranceText ?? null;
    }
    /**
     * Set healthInsuranceText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $healthInsuranceText
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setHealthInsuranceText(?string $healthInsuranceText = null): self
    {
        // validation for constraint: string
        if (!is_null($healthInsuranceText) && !is_string($healthInsuranceText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($healthInsuranceText, true), gettype($healthInsuranceText)), __LINE__);
        }
        if (is_null($healthInsuranceText) || (is_array($healthInsuranceText) && empty($healthInsuranceText))) {
            unset($this->healthInsuranceText);
        } else {
            $this->healthInsuranceText = $healthInsuranceText;
        }
        
        return $this;
    }
    /**
     * Get insurantStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInsurantStatus(): ?string
    {
        return $this->insurantStatus ?? null;
    }
    /**
     * Set insurantStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $insurantStatus
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setInsurantStatus(?string $insurantStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($insurantStatus) && !is_string($insurantStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insurantStatus, true), gettype($insurantStatus)), __LINE__);
        }
        if (is_null($insurantStatus) || (is_array($insurantStatus) && empty($insurantStatus))) {
            unset($this->insurantStatus);
        } else {
            $this->insurantStatus = $insurantStatus;
        }
        
        return $this;
    }
    /**
     * Get createdAt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt ?? null;
    }
    /**
     * Set createdAt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $createdAt
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setCreatedAt(?string $createdAt = null): self
    {
        // validation for constraint: string
        if (!is_null($createdAt) && !is_string($createdAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdAt, true), gettype($createdAt)), __LINE__);
        }
        if (is_null($createdAt) || (is_array($createdAt) && empty($createdAt))) {
            unset($this->createdAt);
        } else {
            $this->createdAt = $createdAt;
        }
        
        return $this;
    }
    /**
     * Get updatedAt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt ?? null;
    }
    /**
     * Set updatedAt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $updatedAt
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setUpdatedAt(?string $updatedAt = null): self
    {
        // validation for constraint: string
        if (!is_null($updatedAt) && !is_string($updatedAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatedAt, true), gettype($updatedAt)), __LINE__);
        }
        if (is_null($updatedAt) || (is_array($updatedAt) && empty($updatedAt))) {
            unset($this->updatedAt);
        } else {
            $this->updatedAt = $updatedAt;
        }
        
        return $this;
    }
    /**
     * Get objGuid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getObjGuid(): ?string
    {
        return $this->objGuid ?? null;
    }
    /**
     * Set objGuid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $objGuid
     * @return \FGTCLB\HisClient\PersonService\Struct\Personinfo201912
     */
    public function setObjGuid(?string $objGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($objGuid) && !is_string($objGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objGuid, true), gettype($objGuid)), __LINE__);
        }
        if (is_null($objGuid) || (is_array($objGuid) && empty($objGuid))) {
            unset($this->objGuid);
        } else {
            $this->objGuid = $objGuid;
        }
        
        return $this;
    }
}
