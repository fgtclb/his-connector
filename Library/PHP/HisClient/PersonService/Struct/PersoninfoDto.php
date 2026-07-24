<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersoninfoDto Struct
 * Meta information extracted from the WSDL
 * - documentation: Additional personal data
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersoninfoDto extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: The technical database-ID.
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The createdAt
     * Meta information extracted from the WSDL
     * - documentation: Timestamp of first creation.
     * - nillable: true
     * @var string|null
     */
    protected ?string $createdAt = null;
    /**
     * The familyStatusId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $familyStatusId = null;
    /**
     * The hasDoneService
     * Meta information extracted from the WSDL
     * - documentation: Civilian service/military service/voluntary work in the social sector.
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $hasDoneService = null;
    /**
     * The healthInsuranceId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $healthInsuranceId = null;
    /**
     * The healthInsuranceNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $healthInsuranceNumber = null;
    /**
     * The healthInsuranceText
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $healthInsuranceText = null;
    /**
     * The insurantStatusId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $insurantStatusId = null;
    /**
     * The nationalityId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $nationalityId = null;
    /**
     * The religionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $religionId = null;
    /**
     * The secondNationalityId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $secondNationalityId = null;
    /**
     * The updatedAt
     * Meta information extracted from the WSDL
     * - documentation: Timestamp of last changes.
     * - nillable: true
     * @var string|null
     */
    protected ?string $updatedAt = null;
    /**
     * The visumnumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $visumnumber = null;
    /**
     * Constructor method for PersoninfoDto
     * @uses PersoninfoDto::setId()
     * @uses PersoninfoDto::setCreatedAt()
     * @uses PersoninfoDto::setFamilyStatusId()
     * @uses PersoninfoDto::setHasDoneService()
     * @uses PersoninfoDto::setHealthInsuranceId()
     * @uses PersoninfoDto::setHealthInsuranceNumber()
     * @uses PersoninfoDto::setHealthInsuranceText()
     * @uses PersoninfoDto::setInsurantStatusId()
     * @uses PersoninfoDto::setNationalityId()
     * @uses PersoninfoDto::setReligionId()
     * @uses PersoninfoDto::setSecondNationalityId()
     * @uses PersoninfoDto::setUpdatedAt()
     * @uses PersoninfoDto::setVisumnumber()
     * @param int $id
     * @param string $createdAt
     * @param int $familyStatusId
     * @param bool $hasDoneService
     * @param int $healthInsuranceId
     * @param string $healthInsuranceNumber
     * @param string $healthInsuranceText
     * @param int $insurantStatusId
     * @param int $nationalityId
     * @param int $religionId
     * @param int $secondNationalityId
     * @param string $updatedAt
     * @param string $visumnumber
     */
    public function __construct(?int $id = null, ?string $createdAt = null, ?int $familyStatusId = null, ?bool $hasDoneService = null, ?int $healthInsuranceId = null, ?string $healthInsuranceNumber = null, ?string $healthInsuranceText = null, ?int $insurantStatusId = null, ?int $nationalityId = null, ?int $religionId = null, ?int $secondNationalityId = null, ?string $updatedAt = null, ?string $visumnumber = null)
    {
        $this
            ->setId($id)
            ->setCreatedAt($createdAt)
            ->setFamilyStatusId($familyStatusId)
            ->setHasDoneService($hasDoneService)
            ->setHealthInsuranceId($healthInsuranceId)
            ->setHealthInsuranceNumber($healthInsuranceNumber)
            ->setHealthInsuranceText($healthInsuranceText)
            ->setInsurantStatusId($insurantStatusId)
            ->setNationalityId($nationalityId)
            ->setReligionId($religionId)
            ->setSecondNationalityId($secondNationalityId)
            ->setUpdatedAt($updatedAt)
            ->setVisumnumber($visumnumber);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
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
     * Get createdAt value
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     * Set createdAt value
     * @param string $createdAt
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
     */
    public function setCreatedAt(?string $createdAt = null): self
    {
        // validation for constraint: string
        if (!is_null($createdAt) && !is_string($createdAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdAt, true), gettype($createdAt)), __LINE__);
        }
        $this->createdAt = $createdAt;
        
        return $this;
    }
    /**
     * Get familyStatusId value
     * @return int|null
     */
    public function getFamilyStatusId(): ?int
    {
        return $this->familyStatusId;
    }
    /**
     * Set familyStatusId value
     * @param int $familyStatusId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
     */
    public function setFamilyStatusId(?int $familyStatusId = null): self
    {
        // validation for constraint: int
        if (!is_null($familyStatusId) && !(is_int($familyStatusId) || ctype_digit($familyStatusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($familyStatusId, true), gettype($familyStatusId)), __LINE__);
        }
        $this->familyStatusId = $familyStatusId;
        
        return $this;
    }
    /**
     * Get hasDoneService value
     * @return bool|null
     */
    public function getHasDoneService(): ?bool
    {
        return $this->hasDoneService;
    }
    /**
     * Set hasDoneService value
     * @param bool $hasDoneService
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
     */
    public function setHasDoneService(?bool $hasDoneService = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasDoneService) && !is_bool($hasDoneService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasDoneService, true), gettype($hasDoneService)), __LINE__);
        }
        $this->hasDoneService = $hasDoneService;
        
        return $this;
    }
    /**
     * Get healthInsuranceId value
     * @return int|null
     */
    public function getHealthInsuranceId(): ?int
    {
        return $this->healthInsuranceId;
    }
    /**
     * Set healthInsuranceId value
     * @param int $healthInsuranceId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
     */
    public function setHealthInsuranceId(?int $healthInsuranceId = null): self
    {
        // validation for constraint: int
        if (!is_null($healthInsuranceId) && !(is_int($healthInsuranceId) || ctype_digit($healthInsuranceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($healthInsuranceId, true), gettype($healthInsuranceId)), __LINE__);
        }
        $this->healthInsuranceId = $healthInsuranceId;
        
        return $this;
    }
    /**
     * Get healthInsuranceNumber value
     * @return string|null
     */
    public function getHealthInsuranceNumber(): ?string
    {
        return $this->healthInsuranceNumber;
    }
    /**
     * Set healthInsuranceNumber value
     * @param string $healthInsuranceNumber
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
     */
    public function setHealthInsuranceNumber(?string $healthInsuranceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($healthInsuranceNumber) && !is_string($healthInsuranceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($healthInsuranceNumber, true), gettype($healthInsuranceNumber)), __LINE__);
        }
        $this->healthInsuranceNumber = $healthInsuranceNumber;
        
        return $this;
    }
    /**
     * Get healthInsuranceText value
     * @return string|null
     */
    public function getHealthInsuranceText(): ?string
    {
        return $this->healthInsuranceText;
    }
    /**
     * Set healthInsuranceText value
     * @param string $healthInsuranceText
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
     */
    public function setHealthInsuranceText(?string $healthInsuranceText = null): self
    {
        // validation for constraint: string
        if (!is_null($healthInsuranceText) && !is_string($healthInsuranceText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($healthInsuranceText, true), gettype($healthInsuranceText)), __LINE__);
        }
        $this->healthInsuranceText = $healthInsuranceText;
        
        return $this;
    }
    /**
     * Get insurantStatusId value
     * @return int|null
     */
    public function getInsurantStatusId(): ?int
    {
        return $this->insurantStatusId;
    }
    /**
     * Set insurantStatusId value
     * @param int $insurantStatusId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
     */
    public function setInsurantStatusId(?int $insurantStatusId = null): self
    {
        // validation for constraint: int
        if (!is_null($insurantStatusId) && !(is_int($insurantStatusId) || ctype_digit($insurantStatusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insurantStatusId, true), gettype($insurantStatusId)), __LINE__);
        }
        $this->insurantStatusId = $insurantStatusId;
        
        return $this;
    }
    /**
     * Get nationalityId value
     * @return int|null
     */
    public function getNationalityId(): ?int
    {
        return $this->nationalityId;
    }
    /**
     * Set nationalityId value
     * @param int $nationalityId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
     */
    public function setNationalityId(?int $nationalityId = null): self
    {
        // validation for constraint: int
        if (!is_null($nationalityId) && !(is_int($nationalityId) || ctype_digit($nationalityId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nationalityId, true), gettype($nationalityId)), __LINE__);
        }
        $this->nationalityId = $nationalityId;
        
        return $this;
    }
    /**
     * Get religionId value
     * @return int|null
     */
    public function getReligionId(): ?int
    {
        return $this->religionId;
    }
    /**
     * Set religionId value
     * @param int $religionId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
     */
    public function setReligionId(?int $religionId = null): self
    {
        // validation for constraint: int
        if (!is_null($religionId) && !(is_int($religionId) || ctype_digit($religionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($religionId, true), gettype($religionId)), __LINE__);
        }
        $this->religionId = $religionId;
        
        return $this;
    }
    /**
     * Get secondNationalityId value
     * @return int|null
     */
    public function getSecondNationalityId(): ?int
    {
        return $this->secondNationalityId;
    }
    /**
     * Set secondNationalityId value
     * @param int $secondNationalityId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
     */
    public function setSecondNationalityId(?int $secondNationalityId = null): self
    {
        // validation for constraint: int
        if (!is_null($secondNationalityId) && !(is_int($secondNationalityId) || ctype_digit($secondNationalityId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($secondNationalityId, true), gettype($secondNationalityId)), __LINE__);
        }
        $this->secondNationalityId = $secondNationalityId;
        
        return $this;
    }
    /**
     * Get updatedAt value
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }
    /**
     * Set updatedAt value
     * @param string $updatedAt
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
     */
    public function setUpdatedAt(?string $updatedAt = null): self
    {
        // validation for constraint: string
        if (!is_null($updatedAt) && !is_string($updatedAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatedAt, true), gettype($updatedAt)), __LINE__);
        }
        $this->updatedAt = $updatedAt;
        
        return $this;
    }
    /**
     * Get visumnumber value
     * @return string|null
     */
    public function getVisumnumber(): ?string
    {
        return $this->visumnumber;
    }
    /**
     * Set visumnumber value
     * @param string $visumnumber
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
     */
    public function setVisumnumber(?string $visumnumber = null): self
    {
        // validation for constraint: string
        if (!is_null($visumnumber) && !is_string($visumnumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($visumnumber, true), gettype($visumnumber)), __LINE__);
        }
        $this->visumnumber = $visumnumber;
        
        return $this;
    }
}
