<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPerson201912 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindPerson201912 extends AbstractStructBase
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
     * The academicdegree
     * Meta information extracted from the WSDL
     * - documentation: Uniquename of academicdegree (AcademicdegreeeValue).
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $academicdegree = null;
    /**
     * The title
     * Meta information extracted from the WSDL
     * - documentation: Uniquename of title (TitleValue).
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The dateOfBirth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $dateOfBirth = null;
    /**
     * The gender
     * Meta information extracted from the WSDL
     * - documentation: Uniquename of gender.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $gender = null;
    /**
     * The nationality
     * Meta information extracted from the WSDL
     * - documentation: Uniquename of country (CountryValue).
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $nationality = null;
    /**
     * The secondNationality
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $secondNationality = null;
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
     * - documentation: Uniquename of selfregistrationstatus (SelfregistrationStatusValue)
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
     * The studystatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $studystatus = null;
    /**
     * The studyTermYear
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $studyTermYear = null;
    /**
     * The studyTermType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $studyTermType = null;
    /**
     * The affiliationType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $affiliationType = null;
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
     * The role
     * Meta information extracted from the WSDL
     * - documentation: Uniquename of role (OrgroleValue).
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $role = null;
    /**
     * The orgroleOrgunitLid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $orgroleOrgunitLid = null;
    /**
     * The orgroleValidFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $orgroleValidFrom = null;
    /**
     * The orgroleValidTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $orgroleValidTo = null;
    /**
     * The personattributeType
     * Meta information extracted from the WSDL
     * - documentation: Name eines Personenattributes. Ermittelbar durch PersonService.getAllPersonAttributeTypes
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $personattributeType = null;
    /**
     * The personattributeValue
     * Meta information extracted from the WSDL
     * - documentation: Wert eines Personenattributes.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $personattributeValue = null;
    /**
     * The personattributeValidFrom
     * Meta information extracted from the WSDL
     * - documentation: Gültigkeitsbeginn des Personenattributes.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $personattributeValidFrom = null;
    /**
     * The personattributeValidTo
     * Meta information extracted from the WSDL
     * - documentation: Gültigkeitsende des Personenattributes.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $personattributeValidTo = null;
    /**
     * Constructor method for findPerson201912
     * @uses FindPerson201912::setSurname()
     * @uses FindPerson201912::setFirstname()
     * @uses FindPerson201912::setNameprefix()
     * @uses FindPerson201912::setNamesuffix()
     * @uses FindPerson201912::setAcademicdegree()
     * @uses FindPerson201912::setTitle()
     * @uses FindPerson201912::setDateOfBirth()
     * @uses FindPerson201912::setGender()
     * @uses FindPerson201912::setNationality()
     * @uses FindPerson201912::setSecondNationality()
     * @uses FindPerson201912::setUsername()
     * @uses FindPerson201912::setCreatedAt()
     * @uses FindPerson201912::setUpdatedAt()
     * @uses FindPerson201912::setEmail()
     * @uses FindPerson201912::setRegistrationStatus()
     * @uses FindPerson201912::setRegistrationsToken()
     * @uses FindPerson201912::setStudystatus()
     * @uses FindPerson201912::setStudyTermYear()
     * @uses FindPerson201912::setStudyTermType()
     * @uses FindPerson201912::setAffiliationType()
     * @uses FindPerson201912::setAffiliationValidFrom()
     * @uses FindPerson201912::setAffiliationValidTo()
     * @uses FindPerson201912::setRole()
     * @uses FindPerson201912::setOrgroleOrgunitLid()
     * @uses FindPerson201912::setOrgroleValidFrom()
     * @uses FindPerson201912::setOrgroleValidTo()
     * @uses FindPerson201912::setPersonattributeType()
     * @uses FindPerson201912::setPersonattributeValue()
     * @uses FindPerson201912::setPersonattributeValidFrom()
     * @uses FindPerson201912::setPersonattributeValidTo()
     * @param string $surname
     * @param string $firstname
     * @param string $nameprefix
     * @param string $namesuffix
     * @param string $academicdegree
     * @param string $title
     * @param string $dateOfBirth
     * @param string $gender
     * @param string $nationality
     * @param string $secondNationality
     * @param string $username
     * @param string $createdAt
     * @param string $updatedAt
     * @param string $email
     * @param string $registrationStatus
     * @param string $registrationsToken
     * @param string $studystatus
     * @param string $studyTermYear
     * @param string $studyTermType
     * @param string $affiliationType
     * @param string $affiliationValidFrom
     * @param string $affiliationValidTo
     * @param string $role
     * @param string $orgroleOrgunitLid
     * @param string $orgroleValidFrom
     * @param string $orgroleValidTo
     * @param string $personattributeType
     * @param string $personattributeValue
     * @param string $personattributeValidFrom
     * @param string $personattributeValidTo
     */
    public function __construct(?string $surname = null, ?string $firstname = null, ?string $nameprefix = null, ?string $namesuffix = null, ?string $academicdegree = null, ?string $title = null, ?string $dateOfBirth = null, ?string $gender = null, ?string $nationality = null, ?string $secondNationality = null, ?string $username = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $email = null, ?string $registrationStatus = null, ?string $registrationsToken = null, ?string $studystatus = null, ?string $studyTermYear = null, ?string $studyTermType = null, ?string $affiliationType = null, ?string $affiliationValidFrom = null, ?string $affiliationValidTo = null, ?string $role = null, ?string $orgroleOrgunitLid = null, ?string $orgroleValidFrom = null, ?string $orgroleValidTo = null, ?string $personattributeType = null, ?string $personattributeValue = null, ?string $personattributeValidFrom = null, ?string $personattributeValidTo = null)
    {
        $this
            ->setSurname($surname)
            ->setFirstname($firstname)
            ->setNameprefix($nameprefix)
            ->setNamesuffix($namesuffix)
            ->setAcademicdegree($academicdegree)
            ->setTitle($title)
            ->setDateOfBirth($dateOfBirth)
            ->setGender($gender)
            ->setNationality($nationality)
            ->setSecondNationality($secondNationality)
            ->setUsername($username)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt)
            ->setEmail($email)
            ->setRegistrationStatus($registrationStatus)
            ->setRegistrationsToken($registrationsToken)
            ->setStudystatus($studystatus)
            ->setStudyTermYear($studyTermYear)
            ->setStudyTermType($studyTermType)
            ->setAffiliationType($affiliationType)
            ->setAffiliationValidFrom($affiliationValidFrom)
            ->setAffiliationValidTo($affiliationValidTo)
            ->setRole($role)
            ->setOrgroleOrgunitLid($orgroleOrgunitLid)
            ->setOrgroleValidFrom($orgroleValidFrom)
            ->setOrgroleValidTo($orgroleValidTo)
            ->setPersonattributeType($personattributeType)
            ->setPersonattributeValue($personattributeValue)
            ->setPersonattributeValidFrom($personattributeValidFrom)
            ->setPersonattributeValidTo($personattributeValidTo);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * Get academicdegree value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAcademicdegree(): ?string
    {
        return $this->academicdegree ?? null;
    }
    /**
     * Set academicdegree value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $academicdegree
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setAcademicdegree(?string $academicdegree = null): self
    {
        // validation for constraint: string
        if (!is_null($academicdegree) && !is_string($academicdegree)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($academicdegree, true), gettype($academicdegree)), __LINE__);
        }
        if (is_null($academicdegree) || (is_array($academicdegree) && empty($academicdegree))) {
            unset($this->academicdegree);
        } else {
            $this->academicdegree = $academicdegree;
        }
        
        return $this;
    }
    /**
     * Get title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title ?? null;
    }
    /**
     * Set title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $title
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->title);
        } else {
            $this->title = $title;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * Get gender value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender ?? null;
    }
    /**
     * Set gender value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $gender
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setGender(?string $gender = null): self
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gender, true), gettype($gender)), __LINE__);
        }
        if (is_null($gender) || (is_array($gender) && empty($gender))) {
            unset($this->gender);
        } else {
            $this->gender = $gender;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * Get studystatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStudystatus(): ?string
    {
        return $this->studystatus ?? null;
    }
    /**
     * Set studystatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $studystatus
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setStudystatus(?string $studystatus = null): self
    {
        // validation for constraint: string
        if (!is_null($studystatus) && !is_string($studystatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($studystatus, true), gettype($studystatus)), __LINE__);
        }
        if (is_null($studystatus) || (is_array($studystatus) && empty($studystatus))) {
            unset($this->studystatus);
        } else {
            $this->studystatus = $studystatus;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * Get studyTermType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStudyTermType(): ?string
    {
        return $this->studyTermType ?? null;
    }
    /**
     * Set studyTermType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $studyTermType
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setStudyTermType(?string $studyTermType = null): self
    {
        // validation for constraint: string
        if (!is_null($studyTermType) && !is_string($studyTermType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($studyTermType, true), gettype($studyTermType)), __LINE__);
        }
        if (is_null($studyTermType) || (is_array($studyTermType) && empty($studyTermType))) {
            unset($this->studyTermType);
        } else {
            $this->studyTermType = $studyTermType;
        }
        
        return $this;
    }
    /**
     * Get affiliationType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAffiliationType(): ?string
    {
        return $this->affiliationType ?? null;
    }
    /**
     * Set affiliationType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $affiliationType
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setAffiliationType(?string $affiliationType = null): self
    {
        // validation for constraint: string
        if (!is_null($affiliationType) && !is_string($affiliationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($affiliationType, true), gettype($affiliationType)), __LINE__);
        }
        if (is_null($affiliationType) || (is_array($affiliationType) && empty($affiliationType))) {
            unset($this->affiliationType);
        } else {
            $this->affiliationType = $affiliationType;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
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
     * Get role value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->role ?? null;
    }
    /**
     * Set role value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $role
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setRole(?string $role = null): self
    {
        // validation for constraint: string
        if (!is_null($role) && !is_string($role)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($role, true), gettype($role)), __LINE__);
        }
        if (is_null($role) || (is_array($role) && empty($role))) {
            unset($this->role);
        } else {
            $this->role = $role;
        }
        
        return $this;
    }
    /**
     * Get orgroleOrgunitLid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrgroleOrgunitLid(): ?string
    {
        return $this->orgroleOrgunitLid ?? null;
    }
    /**
     * Set orgroleOrgunitLid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orgroleOrgunitLid
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setOrgroleOrgunitLid(?string $orgroleOrgunitLid = null): self
    {
        // validation for constraint: string
        if (!is_null($orgroleOrgunitLid) && !is_string($orgroleOrgunitLid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgroleOrgunitLid, true), gettype($orgroleOrgunitLid)), __LINE__);
        }
        if (is_null($orgroleOrgunitLid) || (is_array($orgroleOrgunitLid) && empty($orgroleOrgunitLid))) {
            unset($this->orgroleOrgunitLid);
        } else {
            $this->orgroleOrgunitLid = $orgroleOrgunitLid;
        }
        
        return $this;
    }
    /**
     * Get orgroleValidFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrgroleValidFrom(): ?string
    {
        return $this->orgroleValidFrom ?? null;
    }
    /**
     * Set orgroleValidFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orgroleValidFrom
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setOrgroleValidFrom(?string $orgroleValidFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($orgroleValidFrom) && !is_string($orgroleValidFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgroleValidFrom, true), gettype($orgroleValidFrom)), __LINE__);
        }
        if (is_null($orgroleValidFrom) || (is_array($orgroleValidFrom) && empty($orgroleValidFrom))) {
            unset($this->orgroleValidFrom);
        } else {
            $this->orgroleValidFrom = $orgroleValidFrom;
        }
        
        return $this;
    }
    /**
     * Get orgroleValidTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrgroleValidTo(): ?string
    {
        return $this->orgroleValidTo ?? null;
    }
    /**
     * Set orgroleValidTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orgroleValidTo
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setOrgroleValidTo(?string $orgroleValidTo = null): self
    {
        // validation for constraint: string
        if (!is_null($orgroleValidTo) && !is_string($orgroleValidTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgroleValidTo, true), gettype($orgroleValidTo)), __LINE__);
        }
        if (is_null($orgroleValidTo) || (is_array($orgroleValidTo) && empty($orgroleValidTo))) {
            unset($this->orgroleValidTo);
        } else {
            $this->orgroleValidTo = $orgroleValidTo;
        }
        
        return $this;
    }
    /**
     * Get personattributeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonattributeType(): ?string
    {
        return $this->personattributeType ?? null;
    }
    /**
     * Set personattributeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personattributeType
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setPersonattributeType(?string $personattributeType = null): self
    {
        // validation for constraint: string
        if (!is_null($personattributeType) && !is_string($personattributeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personattributeType, true), gettype($personattributeType)), __LINE__);
        }
        if (is_null($personattributeType) || (is_array($personattributeType) && empty($personattributeType))) {
            unset($this->personattributeType);
        } else {
            $this->personattributeType = $personattributeType;
        }
        
        return $this;
    }
    /**
     * Get personattributeValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonattributeValue(): ?string
    {
        return $this->personattributeValue ?? null;
    }
    /**
     * Set personattributeValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personattributeValue
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setPersonattributeValue(?string $personattributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($personattributeValue) && !is_string($personattributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personattributeValue, true), gettype($personattributeValue)), __LINE__);
        }
        if (is_null($personattributeValue) || (is_array($personattributeValue) && empty($personattributeValue))) {
            unset($this->personattributeValue);
        } else {
            $this->personattributeValue = $personattributeValue;
        }
        
        return $this;
    }
    /**
     * Get personattributeValidFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonattributeValidFrom(): ?string
    {
        return $this->personattributeValidFrom ?? null;
    }
    /**
     * Set personattributeValidFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personattributeValidFrom
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setPersonattributeValidFrom(?string $personattributeValidFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($personattributeValidFrom) && !is_string($personattributeValidFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personattributeValidFrom, true), gettype($personattributeValidFrom)), __LINE__);
        }
        if (is_null($personattributeValidFrom) || (is_array($personattributeValidFrom) && empty($personattributeValidFrom))) {
            unset($this->personattributeValidFrom);
        } else {
            $this->personattributeValidFrom = $personattributeValidFrom;
        }
        
        return $this;
    }
    /**
     * Get personattributeValidTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonattributeValidTo(): ?string
    {
        return $this->personattributeValidTo ?? null;
    }
    /**
     * Set personattributeValidTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personattributeValidTo
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912
     */
    public function setPersonattributeValidTo(?string $personattributeValidTo = null): self
    {
        // validation for constraint: string
        if (!is_null($personattributeValidTo) && !is_string($personattributeValidTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personattributeValidTo, true), gettype($personattributeValidTo)), __LINE__);
        }
        if (is_null($personattributeValidTo) || (is_array($personattributeValidTo) && empty($personattributeValidTo))) {
            unset($this->personattributeValidTo);
        } else {
            $this->personattributeValidTo = $personattributeValidTo;
        }
        
        return $this;
    }
}
