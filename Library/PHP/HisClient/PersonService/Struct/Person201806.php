<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person201806 Struct
 * Meta information extracted from the WSDL
 * - documentation: A Person represents the identity of any natural person that is used throughout the system.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Person201806 extends AbstractStructBase
{
    /**
     * The accounts
     * @var \FGTCLB\HisClient\PersonService\Struct\AccountsType
     */
    protected \FGTCLB\HisClient\PersonService\Struct\AccountsType $accounts;
    /**
     * The allfirstnames
     * Meta information extracted from the WSDL
     * - documentation: Includes the firstname.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $allfirstnames = null;
    /**
     * The dateofbirth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $dateofbirth = null;
    /**
     * The birthname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $birthname = null;
    /**
     * The artistname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $artistname = null;
    /**
     * The nameprefix
     * Meta information extracted from the WSDL
     * - documentation: Namenszusatz, i.e. 'von'.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $nameprefix = null;
    /**
     * The namesuffix
     * Meta information extracted from the WSDL
     * - documentation: Namensanhang, i.e. 'zu Augsburg'.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $namesuffix = null;
    /**
     * The academicdegreesuffix
     * Meta information extracted from the WSDL
     * - documentation: Suffix to be appended to the academic degree, i.e. '(Dr.) Dr. h. c.'
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $academicdegreesuffix = null;
    /**
     * The academicdegree
     * Meta information extracted from the WSDL
     * - documentation: Uniquename of the academic degree (see readAllAcademicDegrees). See KeyvalueService with valueClass = 'AcademicdegreeValue'. Examples: DRTEST, BA, BEd, BEng, BMus, BPSC, BAS, BUSC, dipl, Dr.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $academicdegree = null;
    /**
     * The title
     * Meta information extracted from the WSDL
     * - documentation: Uniquename of the social title (see readAllTitles). See KeyvalueService with valueClass = 'TitleValue'. Examples: Botsch., Prof.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The birthcity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $birthcity = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'CountryValue'. Examples: D, AFG, ET, AL, DZ, VI, AS, AND, ANG, ATG
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The createdAt
     * Meta information extracted from the WSDL
     * - documentation: Date and time of the creation of this Person.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $createdAt = null;
    /**
     * The updatedAt
     * Meta information extracted from the WSDL
     * - documentation: Date and time of the last update of this Person.
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $updatedAt = null;
    /**
     * The selfregistrationStatus
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'SelfregistrationStatusValue'. Examples: EMV, INV, NOT, VAL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $selfregistrationStatus = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: The technical database-ID.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The firstname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $firstname = null;
    /**
     * The surname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $surname = null;
    /**
     * The gender
     * Meta information extracted from the WSDL
     * - documentation: Uniquename of the Gender (see readAllGenders). See KeyvalueService with valueClass = 'GenderValue'. Examples: D, M, U, W
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $gender = null;
    /**
     * Constructor method for Person201806
     * @uses Person201806::setAccounts()
     * @uses Person201806::setAllfirstnames()
     * @uses Person201806::setDateofbirth()
     * @uses Person201806::setBirthname()
     * @uses Person201806::setArtistname()
     * @uses Person201806::setNameprefix()
     * @uses Person201806::setNamesuffix()
     * @uses Person201806::setAcademicdegreesuffix()
     * @uses Person201806::setAcademicdegree()
     * @uses Person201806::setTitle()
     * @uses Person201806::setBirthcity()
     * @uses Person201806::setCountry()
     * @uses Person201806::setCreatedAt()
     * @uses Person201806::setUpdatedAt()
     * @uses Person201806::setSelfregistrationStatus()
     * @uses Person201806::setId()
     * @uses Person201806::setFirstname()
     * @uses Person201806::setSurname()
     * @uses Person201806::setGender()
     * @param \FGTCLB\HisClient\PersonService\Struct\AccountsType $accounts
     * @param string $allfirstnames
     * @param string $dateofbirth
     * @param string $birthname
     * @param string $artistname
     * @param string $nameprefix
     * @param string $namesuffix
     * @param string $academicdegreesuffix
     * @param string $academicdegree
     * @param string $title
     * @param string $birthcity
     * @param string $country
     * @param string $createdAt
     * @param string $updatedAt
     * @param string $selfregistrationStatus
     * @param int $id
     * @param string $firstname
     * @param string $surname
     * @param string $gender
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\AccountsType $accounts, ?string $allfirstnames = null, ?string $dateofbirth = null, ?string $birthname = null, ?string $artistname = null, ?string $nameprefix = null, ?string $namesuffix = null, ?string $academicdegreesuffix = null, ?string $academicdegree = null, ?string $title = null, ?string $birthcity = null, ?string $country = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $selfregistrationStatus = null, ?int $id = null, ?string $firstname = null, ?string $surname = null, ?string $gender = null)
    {
        $this
            ->setAccounts($accounts)
            ->setAllfirstnames($allfirstnames)
            ->setDateofbirth($dateofbirth)
            ->setBirthname($birthname)
            ->setArtistname($artistname)
            ->setNameprefix($nameprefix)
            ->setNamesuffix($namesuffix)
            ->setAcademicdegreesuffix($academicdegreesuffix)
            ->setAcademicdegree($academicdegree)
            ->setTitle($title)
            ->setBirthcity($birthcity)
            ->setCountry($country)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt)
            ->setSelfregistrationStatus($selfregistrationStatus)
            ->setId($id)
            ->setFirstname($firstname)
            ->setSurname($surname)
            ->setGender($gender);
    }
    /**
     * Get accounts value
     * @return \FGTCLB\HisClient\PersonService\Struct\AccountsType
     */
    public function getAccounts(): \FGTCLB\HisClient\PersonService\Struct\AccountsType
    {
        return $this->accounts;
    }
    /**
     * Set accounts value
     * @param \FGTCLB\HisClient\PersonService\Struct\AccountsType $accounts
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
     */
    public function setAccounts(\FGTCLB\HisClient\PersonService\Struct\AccountsType $accounts): self
    {
        $this->accounts = $accounts;
        
        return $this;
    }
    /**
     * Get allfirstnames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAllfirstnames(): ?string
    {
        return $this->allfirstnames ?? null;
    }
    /**
     * Set allfirstnames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $allfirstnames
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
     */
    public function setAllfirstnames(?string $allfirstnames = null): self
    {
        // validation for constraint: string
        if (!is_null($allfirstnames) && !is_string($allfirstnames)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allfirstnames, true), gettype($allfirstnames)), __LINE__);
        }
        if (is_null($allfirstnames) || (is_array($allfirstnames) && empty($allfirstnames))) {
            unset($this->allfirstnames);
        } else {
            $this->allfirstnames = $allfirstnames;
        }
        
        return $this;
    }
    /**
     * Get dateofbirth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateofbirth(): ?string
    {
        return $this->dateofbirth ?? null;
    }
    /**
     * Set dateofbirth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateofbirth
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
     */
    public function setDateofbirth(?string $dateofbirth = null): self
    {
        // validation for constraint: string
        if (!is_null($dateofbirth) && !is_string($dateofbirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateofbirth, true), gettype($dateofbirth)), __LINE__);
        }
        if (is_null($dateofbirth) || (is_array($dateofbirth) && empty($dateofbirth))) {
            unset($this->dateofbirth);
        } else {
            $this->dateofbirth = $dateofbirth;
        }
        
        return $this;
    }
    /**
     * Get birthname value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBirthname(): ?string
    {
        return $this->birthname ?? null;
    }
    /**
     * Set birthname value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $birthname
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
     */
    public function setBirthname(?string $birthname = null): self
    {
        // validation for constraint: string
        if (!is_null($birthname) && !is_string($birthname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthname, true), gettype($birthname)), __LINE__);
        }
        if (is_null($birthname) || (is_array($birthname) && empty($birthname))) {
            unset($this->birthname);
        } else {
            $this->birthname = $birthname;
        }
        
        return $this;
    }
    /**
     * Get artistname value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArtistname(): ?string
    {
        return $this->artistname ?? null;
    }
    /**
     * Set artistname value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $artistname
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
     */
    public function setArtistname(?string $artistname = null): self
    {
        // validation for constraint: string
        if (!is_null($artistname) && !is_string($artistname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($artistname, true), gettype($artistname)), __LINE__);
        }
        if (is_null($artistname) || (is_array($artistname) && empty($artistname))) {
            unset($this->artistname);
        } else {
            $this->artistname = $artistname;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
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
     * Get academicdegreesuffix value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAcademicdegreesuffix(): ?string
    {
        return $this->academicdegreesuffix ?? null;
    }
    /**
     * Set academicdegreesuffix value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $academicdegreesuffix
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
     */
    public function setAcademicdegreesuffix(?string $academicdegreesuffix = null): self
    {
        // validation for constraint: string
        if (!is_null($academicdegreesuffix) && !is_string($academicdegreesuffix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($academicdegreesuffix, true), gettype($academicdegreesuffix)), __LINE__);
        }
        if (is_null($academicdegreesuffix) || (is_array($academicdegreesuffix) && empty($academicdegreesuffix))) {
            unset($this->academicdegreesuffix);
        } else {
            $this->academicdegreesuffix = $academicdegreesuffix;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
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
     * Get birthcity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBirthcity(): ?string
    {
        return $this->birthcity ?? null;
    }
    /**
     * Set birthcity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $birthcity
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
     */
    public function setBirthcity(?string $birthcity = null): self
    {
        // validation for constraint: string
        if (!is_null($birthcity) && !is_string($birthcity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthcity, true), gettype($birthcity)), __LINE__);
        }
        if (is_null($birthcity) || (is_array($birthcity) && empty($birthcity))) {
            unset($this->birthcity);
        } else {
            $this->birthcity = $birthcity;
        }
        
        return $this;
    }
    /**
     * Get country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country ?? null;
    }
    /**
     * Set country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->country);
        } else {
            $this->country = $country;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
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
     * Get selfregistrationStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSelfregistrationStatus(): ?string
    {
        return $this->selfregistrationStatus ?? null;
    }
    /**
     * Set selfregistrationStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $selfregistrationStatus
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
     */
    public function setSelfregistrationStatus(?string $selfregistrationStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($selfregistrationStatus) && !is_string($selfregistrationStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selfregistrationStatus, true), gettype($selfregistrationStatus)), __LINE__);
        }
        if (is_null($selfregistrationStatus) || (is_array($selfregistrationStatus) && empty($selfregistrationStatus))) {
            unset($this->selfregistrationStatus);
        } else {
            $this->selfregistrationStatus = $selfregistrationStatus;
        }
        
        return $this;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
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
}
