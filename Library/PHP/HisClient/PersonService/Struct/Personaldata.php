<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Personaldata Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Personaldata extends AbstractStructBase
{
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The workplaceDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $workplaceDescription = null;
    /**
     * The academicCareer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $academicCareer = null;
    /**
     * The professionalLife
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $professionalLife = null;
    /**
     * The researchProjects
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $researchProjects = null;
    /**
     * The practiceCooperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $practiceCooperation = null;
    /**
     * The publications
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $publications = null;
    /**
     * The administrationFunctions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $administrationFunctions = null;
    /**
     * Constructor method for Personaldata
     * @uses Personaldata::setPersonId()
     * @uses Personaldata::setWorkplaceDescription()
     * @uses Personaldata::setAcademicCareer()
     * @uses Personaldata::setProfessionalLife()
     * @uses Personaldata::setResearchProjects()
     * @uses Personaldata::setPracticeCooperation()
     * @uses Personaldata::setPublications()
     * @uses Personaldata::setAdministrationFunctions()
     * @param int $personId
     * @param string $workplaceDescription
     * @param string $academicCareer
     * @param string $professionalLife
     * @param string $researchProjects
     * @param string $practiceCooperation
     * @param string $publications
     * @param string $administrationFunctions
     */
    public function __construct(int $personId, ?string $workplaceDescription = null, ?string $academicCareer = null, ?string $professionalLife = null, ?string $researchProjects = null, ?string $practiceCooperation = null, ?string $publications = null, ?string $administrationFunctions = null)
    {
        $this
            ->setPersonId($personId)
            ->setWorkplaceDescription($workplaceDescription)
            ->setAcademicCareer($academicCareer)
            ->setProfessionalLife($professionalLife)
            ->setResearchProjects($researchProjects)
            ->setPracticeCooperation($practiceCooperation)
            ->setPublications($publications)
            ->setAdministrationFunctions($administrationFunctions);
    }
    /**
     * Get personId value
     * @return int
     */
    public function getPersonId(): int
    {
        return $this->personId;
    }
    /**
     * Set personId value
     * @param int $personId
     * @return \FGTCLB\HisClient\PersonService\Struct\Personaldata
     */
    public function setPersonId(int $personId): self
    {
        // validation for constraint: int
        if (!is_null($personId) && !(is_int($personId) || ctype_digit($personId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        $this->personId = $personId;
        
        return $this;
    }
    /**
     * Get workplaceDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWorkplaceDescription(): ?string
    {
        return $this->workplaceDescription ?? null;
    }
    /**
     * Set workplaceDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $workplaceDescription
     * @return \FGTCLB\HisClient\PersonService\Struct\Personaldata
     */
    public function setWorkplaceDescription(?string $workplaceDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($workplaceDescription) && !is_string($workplaceDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workplaceDescription, true), gettype($workplaceDescription)), __LINE__);
        }
        if (is_null($workplaceDescription) || (is_array($workplaceDescription) && empty($workplaceDescription))) {
            unset($this->workplaceDescription);
        } else {
            $this->workplaceDescription = $workplaceDescription;
        }
        
        return $this;
    }
    /**
     * Get academicCareer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAcademicCareer(): ?string
    {
        return $this->academicCareer ?? null;
    }
    /**
     * Set academicCareer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $academicCareer
     * @return \FGTCLB\HisClient\PersonService\Struct\Personaldata
     */
    public function setAcademicCareer(?string $academicCareer = null): self
    {
        // validation for constraint: string
        if (!is_null($academicCareer) && !is_string($academicCareer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($academicCareer, true), gettype($academicCareer)), __LINE__);
        }
        if (is_null($academicCareer) || (is_array($academicCareer) && empty($academicCareer))) {
            unset($this->academicCareer);
        } else {
            $this->academicCareer = $academicCareer;
        }
        
        return $this;
    }
    /**
     * Get professionalLife value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProfessionalLife(): ?string
    {
        return $this->professionalLife ?? null;
    }
    /**
     * Set professionalLife value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $professionalLife
     * @return \FGTCLB\HisClient\PersonService\Struct\Personaldata
     */
    public function setProfessionalLife(?string $professionalLife = null): self
    {
        // validation for constraint: string
        if (!is_null($professionalLife) && !is_string($professionalLife)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($professionalLife, true), gettype($professionalLife)), __LINE__);
        }
        if (is_null($professionalLife) || (is_array($professionalLife) && empty($professionalLife))) {
            unset($this->professionalLife);
        } else {
            $this->professionalLife = $professionalLife;
        }
        
        return $this;
    }
    /**
     * Get researchProjects value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResearchProjects(): ?string
    {
        return $this->researchProjects ?? null;
    }
    /**
     * Set researchProjects value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $researchProjects
     * @return \FGTCLB\HisClient\PersonService\Struct\Personaldata
     */
    public function setResearchProjects(?string $researchProjects = null): self
    {
        // validation for constraint: string
        if (!is_null($researchProjects) && !is_string($researchProjects)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($researchProjects, true), gettype($researchProjects)), __LINE__);
        }
        if (is_null($researchProjects) || (is_array($researchProjects) && empty($researchProjects))) {
            unset($this->researchProjects);
        } else {
            $this->researchProjects = $researchProjects;
        }
        
        return $this;
    }
    /**
     * Get practiceCooperation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPracticeCooperation(): ?string
    {
        return $this->practiceCooperation ?? null;
    }
    /**
     * Set practiceCooperation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $practiceCooperation
     * @return \FGTCLB\HisClient\PersonService\Struct\Personaldata
     */
    public function setPracticeCooperation(?string $practiceCooperation = null): self
    {
        // validation for constraint: string
        if (!is_null($practiceCooperation) && !is_string($practiceCooperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($practiceCooperation, true), gettype($practiceCooperation)), __LINE__);
        }
        if (is_null($practiceCooperation) || (is_array($practiceCooperation) && empty($practiceCooperation))) {
            unset($this->practiceCooperation);
        } else {
            $this->practiceCooperation = $practiceCooperation;
        }
        
        return $this;
    }
    /**
     * Get publications value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPublications(): ?string
    {
        return $this->publications ?? null;
    }
    /**
     * Set publications value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $publications
     * @return \FGTCLB\HisClient\PersonService\Struct\Personaldata
     */
    public function setPublications(?string $publications = null): self
    {
        // validation for constraint: string
        if (!is_null($publications) && !is_string($publications)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publications, true), gettype($publications)), __LINE__);
        }
        if (is_null($publications) || (is_array($publications) && empty($publications))) {
            unset($this->publications);
        } else {
            $this->publications = $publications;
        }
        
        return $this;
    }
    /**
     * Get administrationFunctions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdministrationFunctions(): ?string
    {
        return $this->administrationFunctions ?? null;
    }
    /**
     * Set administrationFunctions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $administrationFunctions
     * @return \FGTCLB\HisClient\PersonService\Struct\Personaldata
     */
    public function setAdministrationFunctions(?string $administrationFunctions = null): self
    {
        // validation for constraint: string
        if (!is_null($administrationFunctions) && !is_string($administrationFunctions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($administrationFunctions, true), gettype($administrationFunctions)), __LINE__);
        }
        if (is_null($administrationFunctions) || (is_array($administrationFunctions) && empty($administrationFunctions))) {
            unset($this->administrationFunctions);
        } else {
            $this->administrationFunctions = $administrationFunctions;
        }
        
        return $this;
    }
}
