<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcademicDegree Struct
 * Meta information extracted from the WSDL
 * - documentation: Contains basic information for academic degrees.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AcademicDegree extends Value
{
    /**
     * The positionOfTitle
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $positionOfTitle = null;
    /**
     * The defaulttextFemale
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $defaulttextFemale = null;
    /**
     * The longtextFemale
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $longtextFemale = null;
    /**
     * The shorttextFemale
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $shorttextFemale = null;
    /**
     * Constructor method for AcademicDegree
     * @uses AcademicDegree::setPositionOfTitle()
     * @uses AcademicDegree::setDefaulttextFemale()
     * @uses AcademicDegree::setLongtextFemale()
     * @uses AcademicDegree::setShorttextFemale()
     * @param int $positionOfTitle
     * @param string $defaulttextFemale
     * @param string $longtextFemale
     * @param string $shorttextFemale
     */
    public function __construct(?int $positionOfTitle = null, ?string $defaulttextFemale = null, ?string $longtextFemale = null, ?string $shorttextFemale = null)
    {
        $this
            ->setPositionOfTitle($positionOfTitle)
            ->setDefaulttextFemale($defaulttextFemale)
            ->setLongtextFemale($longtextFemale)
            ->setShorttextFemale($shorttextFemale);
    }
    /**
     * Get positionOfTitle value
     * @return int|null
     */
    public function getPositionOfTitle(): ?int
    {
        return $this->positionOfTitle;
    }
    /**
     * Set positionOfTitle value
     * @param int $positionOfTitle
     * @return \FGTCLB\HisClient\PersonService\Struct\AcademicDegree
     */
    public function setPositionOfTitle(?int $positionOfTitle = null): self
    {
        // validation for constraint: int
        if (!is_null($positionOfTitle) && !(is_int($positionOfTitle) || ctype_digit($positionOfTitle))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionOfTitle, true), gettype($positionOfTitle)), __LINE__);
        }
        $this->positionOfTitle = $positionOfTitle;
        
        return $this;
    }
    /**
     * Get defaulttextFemale value
     * @return string|null
     */
    public function getDefaulttextFemale(): ?string
    {
        return $this->defaulttextFemale;
    }
    /**
     * Set defaulttextFemale value
     * @param string $defaulttextFemale
     * @return \FGTCLB\HisClient\PersonService\Struct\AcademicDegree
     */
    public function setDefaulttextFemale(?string $defaulttextFemale = null): self
    {
        // validation for constraint: string
        if (!is_null($defaulttextFemale) && !is_string($defaulttextFemale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaulttextFemale, true), gettype($defaulttextFemale)), __LINE__);
        }
        $this->defaulttextFemale = $defaulttextFemale;
        
        return $this;
    }
    /**
     * Get longtextFemale value
     * @return string|null
     */
    public function getLongtextFemale(): ?string
    {
        return $this->longtextFemale;
    }
    /**
     * Set longtextFemale value
     * @param string $longtextFemale
     * @return \FGTCLB\HisClient\PersonService\Struct\AcademicDegree
     */
    public function setLongtextFemale(?string $longtextFemale = null): self
    {
        // validation for constraint: string
        if (!is_null($longtextFemale) && !is_string($longtextFemale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longtextFemale, true), gettype($longtextFemale)), __LINE__);
        }
        $this->longtextFemale = $longtextFemale;
        
        return $this;
    }
    /**
     * Get shorttextFemale value
     * @return string|null
     */
    public function getShorttextFemale(): ?string
    {
        return $this->shorttextFemale;
    }
    /**
     * Set shorttextFemale value
     * @param string $shorttextFemale
     * @return \FGTCLB\HisClient\PersonService\Struct\AcademicDegree
     */
    public function setShorttextFemale(?string $shorttextFemale = null): self
    {
        // validation for constraint: string
        if (!is_null($shorttextFemale) && !is_string($shorttextFemale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shorttextFemale, true), gettype($shorttextFemale)), __LINE__);
        }
        $this->shorttextFemale = $shorttextFemale;
        
        return $this;
    }
}
