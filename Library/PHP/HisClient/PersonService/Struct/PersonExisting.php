<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonExisting Struct
 * Meta information extracted from the WSDL
 * - documentation: Data of an existing person.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonExisting extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: The technical database-ID.
     * @var int
     */
    protected int $id;
    /**
     * The firstname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $firstname = null;
    /**
     * The surname
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $surname = null;
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
     * The genderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $genderId = null;
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
     * The academicdegreeId
     * Meta information extracted from the WSDL
     * - documentation: ID of the academic degree (see readAllAcademicDegrees).
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $academicdegreeId = null;
    /**
     * The titleId
     * Meta information extracted from the WSDL
     * - documentation: ID of the social title (see readAllTitles).
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $titleId = null;
    /**
     * The birthcity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $birthcity = null;
    /**
     * The countryId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $countryId = null;
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
     * The selfregistrationStatusId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
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
     * Constructor method for PersonExisting
     * @uses PersonExisting::setId()
     * @uses PersonExisting::setFirstname()
     * @uses PersonExisting::setSurname()
     * @uses PersonExisting::setAllfirstnames()
     * @uses PersonExisting::setDateofbirth()
     * @uses PersonExisting::setGenderId()
     * @uses PersonExisting::setBirthname()
     * @uses PersonExisting::setArtistname()
     * @uses PersonExisting::setNameprefix()
     * @uses PersonExisting::setNamesuffix()
     * @uses PersonExisting::setAcademicdegreesuffix()
     * @uses PersonExisting::setAcademicdegreeId()
     * @uses PersonExisting::setTitleId()
     * @uses PersonExisting::setBirthcity()
     * @uses PersonExisting::setCountryId()
     * @uses PersonExisting::setCreatedAt()
     * @uses PersonExisting::setUpdatedAt()
     * @uses PersonExisting::setSelfregistrationStatusId()
     * @uses PersonExisting::setPersoninfo()
     * @param int $id
     * @param string $firstname
     * @param string $surname
     * @param string $allfirstnames
     * @param string $dateofbirth
     * @param int $genderId
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
    public function __construct(int $id, ?string $firstname = null, ?string $surname = null, ?string $allfirstnames = null, ?string $dateofbirth = null, ?int $genderId = null, ?string $birthname = null, ?string $artistname = null, ?string $nameprefix = null, ?string $namesuffix = null, ?string $academicdegreesuffix = null, ?int $academicdegreeId = null, ?int $titleId = null, ?string $birthcity = null, ?int $countryId = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $selfregistrationStatusId = null, ?\FGTCLB\HisClient\PersonService\Struct\PersoninfoDto $personinfo = null)
    {
        $this
            ->setId($id)
            ->setFirstname($firstname)
            ->setSurname($surname)
            ->setAllfirstnames($allfirstnames)
            ->setDateofbirth($dateofbirth)
            ->setGenderId($genderId)
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
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
     * Get genderId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getGenderId(): ?int
    {
        return $this->genderId ?? null;
    }
    /**
     * Set genderId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $genderId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
     */
    public function setGenderId(?int $genderId = null): self
    {
        // validation for constraint: int
        if (!is_null($genderId) && !(is_int($genderId) || ctype_digit($genderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($genderId, true), gettype($genderId)), __LINE__);
        }
        if (is_null($genderId) || (is_array($genderId) && empty($genderId))) {
            unset($this->genderId);
        } else {
            $this->genderId = $genderId;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
     * Get academicdegreeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAcademicdegreeId(): ?int
    {
        return $this->academicdegreeId ?? null;
    }
    /**
     * Set academicdegreeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $academicdegreeId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
     */
    public function setAcademicdegreeId(?int $academicdegreeId = null): self
    {
        // validation for constraint: int
        if (!is_null($academicdegreeId) && !(is_int($academicdegreeId) || ctype_digit($academicdegreeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($academicdegreeId, true), gettype($academicdegreeId)), __LINE__);
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
     * @return int|null
     */
    public function getTitleId(): ?int
    {
        return $this->titleId ?? null;
    }
    /**
     * Set titleId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $titleId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
     */
    public function setTitleId(?int $titleId = null): self
    {
        // validation for constraint: int
        if (!is_null($titleId) && !(is_int($titleId) || ctype_digit($titleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($titleId, true), gettype($titleId)), __LINE__);
        }
        if (is_null($titleId) || (is_array($titleId) && empty($titleId))) {
            unset($this->titleId);
        } else {
            $this->titleId = $titleId;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
     * Get countryId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCountryId(): ?int
    {
        return $this->countryId ?? null;
    }
    /**
     * Set countryId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $countryId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
     */
    public function setCountryId(?int $countryId = null): self
    {
        // validation for constraint: int
        if (!is_null($countryId) && !(is_int($countryId) || ctype_digit($countryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countryId, true), gettype($countryId)), __LINE__);
        }
        if (is_null($countryId) || (is_array($countryId) && empty($countryId))) {
            unset($this->countryId);
        } else {
            $this->countryId = $countryId;
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
     * Get selfregistrationStatusId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getSelfregistrationStatusId(): ?int
    {
        return $this->selfregistrationStatusId ?? null;
    }
    /**
     * Set selfregistrationStatusId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $selfregistrationStatusId
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
     */
    public function setSelfregistrationStatusId(?int $selfregistrationStatusId = null): self
    {
        // validation for constraint: int
        if (!is_null($selfregistrationStatusId) && !(is_int($selfregistrationStatusId) || ctype_digit($selfregistrationStatusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($selfregistrationStatusId, true), gettype($selfregistrationStatusId)), __LINE__);
        }
        if (is_null($selfregistrationStatusId) || (is_array($selfregistrationStatusId) && empty($selfregistrationStatusId))) {
            unset($this->selfregistrationStatusId);
        } else {
            $this->selfregistrationStatusId = $selfregistrationStatusId;
        }
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
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
