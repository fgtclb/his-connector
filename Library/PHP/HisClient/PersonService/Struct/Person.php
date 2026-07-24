<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person Struct
 * Meta information extracted from the WSDL
 * - documentation: A Person represents the identity of any natural person that is used throughout the system.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Person extends AbstractStructBase
{
    /**
     * The firstname
     * @var string
     */
    protected string $firstname;
    /**
     * The surname
     * @var string
     */
    protected string $surname;
    /**
     * The gender
     * Meta information extracted from the WSDL
     * - documentation: ID of the Gender (see readAllGenders).
     * @var int
     */
    protected int $gender;
    /**
     * The accounts
     * @var \FGTCLB\HisClient\PersonService\Struct\AccountsType
     */
    protected \FGTCLB\HisClient\PersonService\Struct\AccountsType $accounts;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: The technical database-ID. Set to nil when creating a Person.
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
     * The allfirstnames
     * Meta information extracted from the WSDL
     * - documentation: Includes the firstname.
     * - nillable: true
     * @var string|null
     */
    protected ?string $allfirstnames = null;
    /**
     * The dateofbirth
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $dateofbirth = null;
    /**
     * The birthname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $birthname = null;
    /**
     * The artistname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $artistname = null;
    /**
     * The nameprefix
     * Meta information extracted from the WSDL
     * - documentation: Namenszusatz, i.e. 'von'.
     * - nillable: true
     * @var string|null
     */
    protected ?string $nameprefix = null;
    /**
     * The namesuffix
     * Meta information extracted from the WSDL
     * - documentation: Namensanhang, i.e. 'zu Augsburg'.
     * - nillable: true
     * @var string|null
     */
    protected ?string $namesuffix = null;
    /**
     * The academicdegreesuffix
     * Meta information extracted from the WSDL
     * - documentation: Suffix to be appended to the academic degree, i.e. '(Dr.) Dr. h. c.'
     * - nillable: true
     * @var string|null
     */
    protected ?string $academicdegreesuffix = null;
    /**
     * The academicdegreeId
     * Meta information extracted from the WSDL
     * - documentation: ID of the academic degree (see readAllAcademicDegrees).
     * - nillable: true
     * @var int|null
     */
    protected ?int $academicdegreeId = null;
    /**
     * The titleId
     * Meta information extracted from the WSDL
     * - documentation: ID of the social title (see readAllTitles).
     * - nillable: true
     * @var int|null
     */
    protected ?int $titleId = null;
    /**
     * The birthcity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $birthcity = null;
    /**
     * The countryId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $countryId = null;
    /**
     * The createdAt
     * Meta information extracted from the WSDL
     * - documentation: Date and time of the creation of this Person.
     * - nillable: true
     * @var string|null
     */
    protected ?string $createdAt = null;
    /**
     * The updatedAt
     * Meta information extracted from the WSDL
     * - documentation: Date and time of the last update of this Person.
     * - nillable: true
     * @var string|null
     */
    protected ?string $updatedAt = null;
    /**
     * The selfregistrationStatusId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $selfregistrationStatusId = null;
    /**
     * The personinfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto|null
     */
    protected ?\FGTCLB\HisClient\PersonService\Struct\PersoninfoDto $personinfo = null;
    /**
     * Constructor method for Person
     * @uses Person::setFirstname()
     * @uses Person::setSurname()
     * @uses Person::setGender()
     * @uses Person::setAccounts()
     * @uses Person::setId()
     * @uses Person::setObjGuid()
     * @uses Person::setAllfirstnames()
     * @uses Person::setDateofbirth()
     * @uses Person::setBirthname()
     * @uses Person::setArtistname()
     * @uses Person::setNameprefix()
     * @uses Person::setNamesuffix()
     * @uses Person::setAcademicdegreesuffix()
     * @uses Person::setAcademicdegreeId()
     * @uses Person::setTitleId()
     * @uses Person::setBirthcity()
     * @uses Person::setCountryId()
     * @uses Person::setCreatedAt()
     * @uses Person::setUpdatedAt()
     * @uses Person::setSelfregistrationStatusId()
     * @uses Person::setPersoninfo()
     * @param string $firstname
     * @param string $surname
     * @param int $gender
     * @param \FGTCLB\HisClient\PersonService\Struct\AccountsType $accounts
     * @param int $id
     * @param string $objGuid
     * @param string $allfirstnames
     * @param string $dateofbirth
     * @param string $birthname
     * @param string $artistname
     * @param string $nameprefix
     * @param string $namesuffix
     * @param string $academicdegreesuffix
     * @param int $academicdegreeId
     * @param int $titleId
     * @param string $birthcity
     * @param int $countryId
     * @param string $createdAt
     * @param string $updatedAt
     * @param int $selfregistrationStatusId
     * @param \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto $personinfo
     */
    public function __construct(string $firstname, string $surname, int $gender, \FGTCLB\HisClient\PersonService\Struct\AccountsType $accounts, ?int $id = null, ?string $objGuid = null, ?string $allfirstnames = null, ?string $dateofbirth = null, ?string $birthname = null, ?string $artistname = null, ?string $nameprefix = null, ?string $namesuffix = null, ?string $academicdegreesuffix = null, ?int $academicdegreeId = null, ?int $titleId = null, ?string $birthcity = null, ?int $countryId = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $selfregistrationStatusId = null, ?\FGTCLB\HisClient\PersonService\Struct\PersoninfoDto $personinfo = null)
    {
        $this
            ->setFirstname($firstname)
            ->setSurname($surname)
            ->setGender($gender)
            ->setAccounts($accounts)
            ->setId($id)
            ->setObjGuid($objGuid)
            ->setAllfirstnames($allfirstnames)
            ->setDateofbirth($dateofbirth)
            ->setBirthname($birthname)
            ->setArtistname($artistname)
            ->setNameprefix($nameprefix)
            ->setNamesuffix($namesuffix)
            ->setAcademicdegreesuffix($academicdegreesuffix)
            ->setAcademicdegreeId($academicdegreeId)
            ->setTitleId($titleId)
            ->setBirthcity($birthcity)
            ->setCountryId($countryId)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt)
            ->setSelfregistrationStatusId($selfregistrationStatusId)
            ->setPersoninfo($personinfo);
    }
    /**
     * Get firstname value
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    /**
     * Set firstname value
     * @param string $firstname
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setFirstname(string $firstname): self
    {
        // validation for constraint: string
        if (!is_null($firstname) && !is_string($firstname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstname, true), gettype($firstname)), __LINE__);
        }
        $this->firstname = $firstname;
        
        return $this;
    }
    /**
     * Get surname value
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }
    /**
     * Set surname value
     * @param string $surname
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setSurname(string $surname): self
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        $this->surname = $surname;
        
        return $this;
    }
    /**
     * Get gender value
     * @return int
     */
    public function getGender(): int
    {
        return $this->gender;
    }
    /**
     * Set gender value
     * @param int $gender
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setGender(int $gender): self
    {
        // validation for constraint: int
        if (!is_null($gender) && !(is_int($gender) || ctype_digit($gender))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($gender, true), gettype($gender)), __LINE__);
        }
        $this->gender = $gender;
        
        return $this;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setAccounts(\FGTCLB\HisClient\PersonService\Struct\AccountsType $accounts): self
    {
        $this->accounts = $accounts;
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
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
     * Get allfirstnames value
     * @return string|null
     */
    public function getAllfirstnames(): ?string
    {
        return $this->allfirstnames;
    }
    /**
     * Set allfirstnames value
     * @param string $allfirstnames
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setAllfirstnames(?string $allfirstnames = null): self
    {
        // validation for constraint: string
        if (!is_null($allfirstnames) && !is_string($allfirstnames)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allfirstnames, true), gettype($allfirstnames)), __LINE__);
        }
        $this->allfirstnames = $allfirstnames;
        
        return $this;
    }
    /**
     * Get dateofbirth value
     * @return string|null
     */
    public function getDateofbirth(): ?string
    {
        return $this->dateofbirth;
    }
    /**
     * Set dateofbirth value
     * @param string $dateofbirth
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setDateofbirth(?string $dateofbirth = null): self
    {
        // validation for constraint: string
        if (!is_null($dateofbirth) && !is_string($dateofbirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateofbirth, true), gettype($dateofbirth)), __LINE__);
        }
        $this->dateofbirth = $dateofbirth;
        
        return $this;
    }
    /**
     * Get birthname value
     * @return string|null
     */
    public function getBirthname(): ?string
    {
        return $this->birthname;
    }
    /**
     * Set birthname value
     * @param string $birthname
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setBirthname(?string $birthname = null): self
    {
        // validation for constraint: string
        if (!is_null($birthname) && !is_string($birthname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthname, true), gettype($birthname)), __LINE__);
        }
        $this->birthname = $birthname;
        
        return $this;
    }
    /**
     * Get artistname value
     * @return string|null
     */
    public function getArtistname(): ?string
    {
        return $this->artistname;
    }
    /**
     * Set artistname value
     * @param string $artistname
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setArtistname(?string $artistname = null): self
    {
        // validation for constraint: string
        if (!is_null($artistname) && !is_string($artistname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($artistname, true), gettype($artistname)), __LINE__);
        }
        $this->artistname = $artistname;
        
        return $this;
    }
    /**
     * Get nameprefix value
     * @return string|null
     */
    public function getNameprefix(): ?string
    {
        return $this->nameprefix;
    }
    /**
     * Set nameprefix value
     * @param string $nameprefix
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setNameprefix(?string $nameprefix = null): self
    {
        // validation for constraint: string
        if (!is_null($nameprefix) && !is_string($nameprefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameprefix, true), gettype($nameprefix)), __LINE__);
        }
        $this->nameprefix = $nameprefix;
        
        return $this;
    }
    /**
     * Get namesuffix value
     * @return string|null
     */
    public function getNamesuffix(): ?string
    {
        return $this->namesuffix;
    }
    /**
     * Set namesuffix value
     * @param string $namesuffix
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setNamesuffix(?string $namesuffix = null): self
    {
        // validation for constraint: string
        if (!is_null($namesuffix) && !is_string($namesuffix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($namesuffix, true), gettype($namesuffix)), __LINE__);
        }
        $this->namesuffix = $namesuffix;
        
        return $this;
    }
    /**
     * Get academicdegreesuffix value
     * @return string|null
     */
    public function getAcademicdegreesuffix(): ?string
    {
        return $this->academicdegreesuffix;
    }
    /**
     * Set academicdegreesuffix value
     * @param string $academicdegreesuffix
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setAcademicdegreesuffix(?string $academicdegreesuffix = null): self
    {
        // validation for constraint: string
        if (!is_null($academicdegreesuffix) && !is_string($academicdegreesuffix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($academicdegreesuffix, true), gettype($academicdegreesuffix)), __LINE__);
        }
        $this->academicdegreesuffix = $academicdegreesuffix;
        
        return $this;
    }
    /**
     * Get academicdegreeId value
     * @return int|null
     */
    public function getAcademicdegreeId(): ?int
    {
        return $this->academicdegreeId;
    }
    /**
     * Set academicdegreeId value
     * @param int $academicdegreeId
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setAcademicdegreeId(?int $academicdegreeId = null): self
    {
        // validation for constraint: int
        if (!is_null($academicdegreeId) && !(is_int($academicdegreeId) || ctype_digit($academicdegreeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($academicdegreeId, true), gettype($academicdegreeId)), __LINE__);
        }
        $this->academicdegreeId = $academicdegreeId;
        
        return $this;
    }
    /**
     * Get titleId value
     * @return int|null
     */
    public function getTitleId(): ?int
    {
        return $this->titleId;
    }
    /**
     * Set titleId value
     * @param int $titleId
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setTitleId(?int $titleId = null): self
    {
        // validation for constraint: int
        if (!is_null($titleId) && !(is_int($titleId) || ctype_digit($titleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($titleId, true), gettype($titleId)), __LINE__);
        }
        $this->titleId = $titleId;
        
        return $this;
    }
    /**
     * Get birthcity value
     * @return string|null
     */
    public function getBirthcity(): ?string
    {
        return $this->birthcity;
    }
    /**
     * Set birthcity value
     * @param string $birthcity
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setBirthcity(?string $birthcity = null): self
    {
        // validation for constraint: string
        if (!is_null($birthcity) && !is_string($birthcity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthcity, true), gettype($birthcity)), __LINE__);
        }
        $this->birthcity = $birthcity;
        
        return $this;
    }
    /**
     * Get countryId value
     * @return int|null
     */
    public function getCountryId(): ?int
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param int $countryId
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setCountryId(?int $countryId = null): self
    {
        // validation for constraint: int
        if (!is_null($countryId) && !(is_int($countryId) || ctype_digit($countryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countryId, true), gettype($countryId)), __LINE__);
        }
        $this->countryId = $countryId;
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
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
     * Get selfregistrationStatusId value
     * @return int|null
     */
    public function getSelfregistrationStatusId(): ?int
    {
        return $this->selfregistrationStatusId;
    }
    /**
     * Set selfregistrationStatusId value
     * @param int $selfregistrationStatusId
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setSelfregistrationStatusId(?int $selfregistrationStatusId = null): self
    {
        // validation for constraint: int
        if (!is_null($selfregistrationStatusId) && !(is_int($selfregistrationStatusId) || ctype_digit($selfregistrationStatusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($selfregistrationStatusId, true), gettype($selfregistrationStatusId)), __LINE__);
        }
        $this->selfregistrationStatusId = $selfregistrationStatusId;
        
        return $this;
    }
    /**
     * Get personinfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto|null
     */
    public function getPersoninfo(): ?\FGTCLB\HisClient\PersonService\Struct\PersoninfoDto
    {
        return $this->personinfo ?? null;
    }
    /**
     * Set personinfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\PersonService\Struct\PersoninfoDto $personinfo
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function setPersoninfo(?\FGTCLB\HisClient\PersonService\Struct\PersoninfoDto $personinfo = null): self
    {
        if (is_null($personinfo) || (is_array($personinfo) && empty($personinfo))) {
            unset($this->personinfo);
        } else {
            $this->personinfo = $personinfo;
        }
        
        return $this;
    }
}
