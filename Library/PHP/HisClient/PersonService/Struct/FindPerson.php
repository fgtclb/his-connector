<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPerson Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindPerson extends AbstractStructBase
{
    /**
     * The surname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $surname = null;
    /**
     * The firstname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $firstname = null;
    /**
     * The nameprefix
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $nameprefix = null;
    /**
     * The namesuffix
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $namesuffix = null;
    /**
     * The academicdegreeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $academicdegreeId = null;
    /**
     * The titleId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $titleId = null;
    /**
     * The dateOfBirth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $dateOfBirth = null;
    /**
     * The genderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $genderId = null;
    /**
     * The nationalityId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $nationalityId = null;
    /**
     * The secondNationalityId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $secondNationalityId = null;
    /**
     * The username
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $username = null;
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
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The registrationStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $registrationStatus = null;
    /**
     * The registrationsToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $registrationsToken = null;
    /**
     * The studystatusId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $studystatusId = null;
    /**
     * The studyTermYear
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $studyTermYear = null;
    /**
     * The studyTermTypeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $studyTermTypeId = null;
    /**
     * The affiliationTypeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $affiliationTypeId = null;
    /**
     * The affiliationValidFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $affiliationValidFrom = null;
    /**
     * The affiliationValidTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $affiliationValidTo = null;
    /**
     * The identifierTypId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $identifierTypId = null;
    /**
     * The identifier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $identifier = null;
    /**
     * Constructor method for findPerson
     * @uses FindPerson::setSurname()
     * @uses FindPerson::setFirstname()
     * @uses FindPerson::setNameprefix()
     * @uses FindPerson::setNamesuffix()
     * @uses FindPerson::setAcademicdegreeId()
     * @uses FindPerson::setTitleId()
     * @uses FindPerson::setDateOfBirth()
     * @uses FindPerson::setGenderId()
     * @uses FindPerson::setNationalityId()
     * @uses FindPerson::setSecondNationalityId()
     * @uses FindPerson::setUsername()
     * @uses FindPerson::setCreatedAt()
     * @uses FindPerson::setUpdatedAt()
     * @uses FindPerson::setEmail()
     * @uses FindPerson::setRegistrationStatus()
     * @uses FindPerson::setRegistrationsToken()
     * @uses FindPerson::setStudystatusId()
     * @uses FindPerson::setStudyTermYear()
     * @uses FindPerson::setStudyTermTypeId()
     * @uses FindPerson::setAffiliationTypeId()
     * @uses FindPerson::setAffiliationValidFrom()
     * @uses FindPerson::setAffiliationValidTo()
     * @uses FindPerson::setIdentifierTypId()
     * @uses FindPerson::setIdentifier()
     * @param string $surname
     * @param string $firstname
     * @param string $nameprefix
     * @param string $namesuffix
     * @param string $academicdegreeId
     * @param string $titleId
     * @param string $dateOfBirth
     * @param string $genderId
     * @param string $nationalityId
     * @param string $secondNationalityId
     * @param string $username
     * @param string $createdAt
     * @param string $updatedAt
     * @param string $email
     * @param string $registrationStatus
     * @param string $registrationsToken
     * @param string $studystatusId
     * @param string $studyTermYear
     * @param string $studyTermTypeId
     * @param string $affiliationTypeId
     * @param string $affiliationValidFrom
     * @param string $affiliationValidTo
     * @param string $identifierTypId
     * @param string $identifier
     */
    public function __construct(?string $surname = null, ?string $firstname = null, ?string $nameprefix = null, ?string $namesuffix = null, ?string $academicdegreeId = null, ?string $titleId = null, ?string $dateOfBirth = null, ?string $genderId = null, ?string $nationalityId = null, ?string $secondNationalityId = null, ?string $username = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $email = null, ?string $registrationStatus = null, ?string $registrationsToken = null, ?string $studystatusId = null, ?string $studyTermYear = null, ?string $studyTermTypeId = null, ?string $affiliationTypeId = null, ?string $affiliationValidFrom = null, ?string $affiliationValidTo = null, ?string $identifierTypId = null, ?string $identifier = null)
    {
        $this
            ->setSurname($surname)
            ->setFirstname($firstname)
            ->setNameprefix($nameprefix)
            ->setNamesuffix($namesuffix)
            ->setAcademicdegreeId($academicdegreeId)
            ->setTitleId($titleId)
            ->setDateOfBirth($dateOfBirth)
            ->setGenderId($genderId)
            ->setNationalityId($nationalityId)
            ->setSecondNationalityId($secondNationalityId)
            ->setUsername($username)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt)
            ->setEmail($email)
            ->setRegistrationStatus($registrationStatus)
            ->setRegistrationsToken($registrationsToken)
            ->setStudystatusId($studystatusId)
            ->setStudyTermYear($studyTermYear)
            ->setStudyTermTypeId($studyTermTypeId)
            ->setAffiliationTypeId($affiliationTypeId)
            ->setAffiliationValidFrom($affiliationValidFrom)
            ->setAffiliationValidTo($affiliationValidTo)
            ->setIdentifierTypId($identifierTypId)
            ->setIdentifier($identifier);
    }
    /**
     * Get surname value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname ?? null;
    }
    /**
     * Set surname value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $surname
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setSurname(?string $surname = null): self
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        if (is_null($surname) || (is_array($surname) && empty($surname))) {
            unset($this->surname);
        } else {
            $this->surname = $surname;
        }
        
        return $this;
    }
    /**
     * Get firstname value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname ?? null;
    }
    /**
     * Set firstname value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstname
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setFirstname(?string $firstname = null): self
    {
        // validation for constraint: string
        if (!is_null($firstname) && !is_string($firstname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstname, true), gettype($firstname)), __LINE__);
        }
        if (is_null($firstname) || (is_array($firstname) && empty($firstname))) {
            unset($this->firstname);
        } else {
            $this->firstname = $firstname;
        }
        
        return $this;
    }
    /**
     * Get nameprefix value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNameprefix(): ?string
    {
        return $this->nameprefix ?? null;
    }
    /**
     * Set nameprefix value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nameprefix
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setNameprefix(?string $nameprefix = null): self
    {
        // validation for constraint: string
        if (!is_null($nameprefix) && !is_string($nameprefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameprefix, true), gettype($nameprefix)), __LINE__);
        }
        if (is_null($nameprefix) || (is_array($nameprefix) && empty($nameprefix))) {
            unset($this->nameprefix);
        } else {
            $this->nameprefix = $nameprefix;
        }
        
        return $this;
    }
    /**
     * Get namesuffix value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNamesuffix(): ?string
    {
        return $this->namesuffix ?? null;
    }
    /**
     * Set namesuffix value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $namesuffix
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setNamesuffix(?string $namesuffix = null): self
    {
        // validation for constraint: string
        if (!is_null($namesuffix) && !is_string($namesuffix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($namesuffix, true), gettype($namesuffix)), __LINE__);
        }
        if (is_null($namesuffix) || (is_array($namesuffix) && empty($namesuffix))) {
            unset($this->namesuffix);
        } else {
            $this->namesuffix = $namesuffix;
        }
        
        return $this;
    }
    /**
     * Get academicdegreeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAcademicdegreeId(): ?string
    {
        return $this->academicdegreeId ?? null;
    }
    /**
     * Set academicdegreeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $academicdegreeId
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setAcademicdegreeId(?string $academicdegreeId = null): self
    {
        // validation for constraint: string
        if (!is_null($academicdegreeId) && !is_string($academicdegreeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($academicdegreeId, true), gettype($academicdegreeId)), __LINE__);
        }
        if (is_null($academicdegreeId) || (is_array($academicdegreeId) && empty($academicdegreeId))) {
            unset($this->academicdegreeId);
        } else {
            $this->academicdegreeId = $academicdegreeId;
        }
        
        return $this;
    }
    /**
     * Get titleId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTitleId(): ?string
    {
        return $this->titleId ?? null;
    }
    /**
     * Set titleId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $titleId
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setTitleId(?string $titleId = null): self
    {
        // validation for constraint: string
        if (!is_null($titleId) && !is_string($titleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titleId, true), gettype($titleId)), __LINE__);
        }
        if (is_null($titleId) || (is_array($titleId) && empty($titleId))) {
            unset($this->titleId);
        } else {
            $this->titleId = $titleId;
        }
        
        return $this;
    }
    /**
     * Get dateOfBirth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth ?? null;
    }
    /**
     * Set dateOfBirth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateOfBirth
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setDateOfBirth(?string $dateOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateOfBirth, true), gettype($dateOfBirth)), __LINE__);
        }
        if (is_null($dateOfBirth) || (is_array($dateOfBirth) && empty($dateOfBirth))) {
            unset($this->dateOfBirth);
        } else {
            $this->dateOfBirth = $dateOfBirth;
        }
        
        return $this;
    }
    /**
     * Get genderId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGenderId(): ?string
    {
        return $this->genderId ?? null;
    }
    /**
     * Set genderId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $genderId
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setGenderId(?string $genderId = null): self
    {
        // validation for constraint: string
        if (!is_null($genderId) && !is_string($genderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($genderId, true), gettype($genderId)), __LINE__);
        }
        if (is_null($genderId) || (is_array($genderId) && empty($genderId))) {
            unset($this->genderId);
        } else {
            $this->genderId = $genderId;
        }
        
        return $this;
    }
    /**
     * Get nationalityId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNationalityId(): ?string
    {
        return $this->nationalityId ?? null;
    }
    /**
     * Set nationalityId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nationalityId
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setNationalityId(?string $nationalityId = null): self
    {
        // validation for constraint: string
        if (!is_null($nationalityId) && !is_string($nationalityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationalityId, true), gettype($nationalityId)), __LINE__);
        }
        if (is_null($nationalityId) || (is_array($nationalityId) && empty($nationalityId))) {
            unset($this->nationalityId);
        } else {
            $this->nationalityId = $nationalityId;
        }
        
        return $this;
    }
    /**
     * Get secondNationalityId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSecondNationalityId(): ?string
    {
        return $this->secondNationalityId ?? null;
    }
    /**
     * Set secondNationalityId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $secondNationalityId
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setSecondNationalityId(?string $secondNationalityId = null): self
    {
        // validation for constraint: string
        if (!is_null($secondNationalityId) && !is_string($secondNationalityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondNationalityId, true), gettype($secondNationalityId)), __LINE__);
        }
        if (is_null($secondNationalityId) || (is_array($secondNationalityId) && empty($secondNationalityId))) {
            unset($this->secondNationalityId);
        } else {
            $this->secondNationalityId = $secondNationalityId;
        }
        
        return $this;
    }
    /**
     * Get username value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username ?? null;
    }
    /**
     * Set username value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $username
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        if (is_null($username) || (is_array($username) && empty($username))) {
            unset($this->username);
        } else {
            $this->username = $username;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
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
     * Get email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email ?? null;
    }
    /**
     * Set email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $email
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->email);
        } else {
            $this->email = $email;
        }
        
        return $this;
    }
    /**
     * Get registrationStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegistrationStatus(): ?string
    {
        return $this->registrationStatus ?? null;
    }
    /**
     * Set registrationStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $registrationStatus
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setRegistrationStatus(?string $registrationStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($registrationStatus) && !is_string($registrationStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationStatus, true), gettype($registrationStatus)), __LINE__);
        }
        if (is_null($registrationStatus) || (is_array($registrationStatus) && empty($registrationStatus))) {
            unset($this->registrationStatus);
        } else {
            $this->registrationStatus = $registrationStatus;
        }
        
        return $this;
    }
    /**
     * Get registrationsToken value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegistrationsToken(): ?string
    {
        return $this->registrationsToken ?? null;
    }
    /**
     * Set registrationsToken value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $registrationsToken
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setRegistrationsToken(?string $registrationsToken = null): self
    {
        // validation for constraint: string
        if (!is_null($registrationsToken) && !is_string($registrationsToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationsToken, true), gettype($registrationsToken)), __LINE__);
        }
        if (is_null($registrationsToken) || (is_array($registrationsToken) && empty($registrationsToken))) {
            unset($this->registrationsToken);
        } else {
            $this->registrationsToken = $registrationsToken;
        }
        
        return $this;
    }
    /**
     * Get studystatusId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStudystatusId(): ?string
    {
        return $this->studystatusId ?? null;
    }
    /**
     * Set studystatusId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $studystatusId
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setStudystatusId(?string $studystatusId = null): self
    {
        // validation for constraint: string
        if (!is_null($studystatusId) && !is_string($studystatusId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($studystatusId, true), gettype($studystatusId)), __LINE__);
        }
        if (is_null($studystatusId) || (is_array($studystatusId) && empty($studystatusId))) {
            unset($this->studystatusId);
        } else {
            $this->studystatusId = $studystatusId;
        }
        
        return $this;
    }
    /**
     * Get studyTermYear value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStudyTermYear(): ?string
    {
        return $this->studyTermYear ?? null;
    }
    /**
     * Set studyTermYear value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $studyTermYear
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setStudyTermYear(?string $studyTermYear = null): self
    {
        // validation for constraint: string
        if (!is_null($studyTermYear) && !is_string($studyTermYear)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($studyTermYear, true), gettype($studyTermYear)), __LINE__);
        }
        if (is_null($studyTermYear) || (is_array($studyTermYear) && empty($studyTermYear))) {
            unset($this->studyTermYear);
        } else {
            $this->studyTermYear = $studyTermYear;
        }
        
        return $this;
    }
    /**
     * Get studyTermTypeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStudyTermTypeId(): ?string
    {
        return $this->studyTermTypeId ?? null;
    }
    /**
     * Set studyTermTypeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $studyTermTypeId
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setStudyTermTypeId(?string $studyTermTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($studyTermTypeId) && !is_string($studyTermTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($studyTermTypeId, true), gettype($studyTermTypeId)), __LINE__);
        }
        if (is_null($studyTermTypeId) || (is_array($studyTermTypeId) && empty($studyTermTypeId))) {
            unset($this->studyTermTypeId);
        } else {
            $this->studyTermTypeId = $studyTermTypeId;
        }
        
        return $this;
    }
    /**
     * Get affiliationTypeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAffiliationTypeId(): ?string
    {
        return $this->affiliationTypeId ?? null;
    }
    /**
     * Set affiliationTypeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $affiliationTypeId
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setAffiliationTypeId(?string $affiliationTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($affiliationTypeId) && !is_string($affiliationTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($affiliationTypeId, true), gettype($affiliationTypeId)), __LINE__);
        }
        if (is_null($affiliationTypeId) || (is_array($affiliationTypeId) && empty($affiliationTypeId))) {
            unset($this->affiliationTypeId);
        } else {
            $this->affiliationTypeId = $affiliationTypeId;
        }
        
        return $this;
    }
    /**
     * Get affiliationValidFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAffiliationValidFrom(): ?string
    {
        return $this->affiliationValidFrom ?? null;
    }
    /**
     * Set affiliationValidFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $affiliationValidFrom
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setAffiliationValidFrom(?string $affiliationValidFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($affiliationValidFrom) && !is_string($affiliationValidFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($affiliationValidFrom, true), gettype($affiliationValidFrom)), __LINE__);
        }
        if (is_null($affiliationValidFrom) || (is_array($affiliationValidFrom) && empty($affiliationValidFrom))) {
            unset($this->affiliationValidFrom);
        } else {
            $this->affiliationValidFrom = $affiliationValidFrom;
        }
        
        return $this;
    }
    /**
     * Get affiliationValidTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAffiliationValidTo(): ?string
    {
        return $this->affiliationValidTo ?? null;
    }
    /**
     * Set affiliationValidTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $affiliationValidTo
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setAffiliationValidTo(?string $affiliationValidTo = null): self
    {
        // validation for constraint: string
        if (!is_null($affiliationValidTo) && !is_string($affiliationValidTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($affiliationValidTo, true), gettype($affiliationValidTo)), __LINE__);
        }
        if (is_null($affiliationValidTo) || (is_array($affiliationValidTo) && empty($affiliationValidTo))) {
            unset($this->affiliationValidTo);
        } else {
            $this->affiliationValidTo = $affiliationValidTo;
        }
        
        return $this;
    }
    /**
     * Get identifierTypId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentifierTypId(): ?string
    {
        return $this->identifierTypId ?? null;
    }
    /**
     * Set identifierTypId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identifierTypId
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setIdentifierTypId(?string $identifierTypId = null): self
    {
        // validation for constraint: string
        if (!is_null($identifierTypId) && !is_string($identifierTypId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifierTypId, true), gettype($identifierTypId)), __LINE__);
        }
        if (is_null($identifierTypId) || (is_array($identifierTypId) && empty($identifierTypId))) {
            unset($this->identifierTypId);
        } else {
            $this->identifierTypId = $identifierTypId;
        }
        
        return $this;
    }
    /**
     * Get identifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier ?? null;
    }
    /**
     * Set identifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identifier
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson
     */
    public function setIdentifier(?string $identifier = null): self
    {
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifier, true), gettype($identifier)), __LINE__);
        }
        if (is_null($identifier) || (is_array($identifier) && empty($identifier))) {
            unset($this->identifier);
        } else {
            $this->identifier = $identifier;
        }
        
        return $this;
    }
}
