<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcademicdegreeValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AcademicdegreeValue extends AbstractValueMaleFemale
{
    /**
     * The positionOfTitle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $positionOfTitle = null;
    /**
     * The lettersalutationFemale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $lettersalutationFemale = null;
    /**
     * The lettersalutation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $lettersalutation = null;
    /**
     * Constructor method for AcademicdegreeValue
     * @uses AcademicdegreeValue::setPositionOfTitle()
     * @uses AcademicdegreeValue::setLettersalutationFemale()
     * @uses AcademicdegreeValue::setLettersalutation()
     * @param int $positionOfTitle
     * @param string $lettersalutationFemale
     * @param string $lettersalutation
     */
    public function __construct(?int $positionOfTitle = null, ?string $lettersalutationFemale = null, ?string $lettersalutation = null)
    {
        $this
            ->setPositionOfTitle($positionOfTitle)
            ->setLettersalutationFemale($lettersalutationFemale)
            ->setLettersalutation($lettersalutation);
    }
    /**
     * Get positionOfTitle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPositionOfTitle(): ?int
    {
        return $this->positionOfTitle ?? null;
    }
    /**
     * Set positionOfTitle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $positionOfTitle
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\AcademicdegreeValue
     */
    public function setPositionOfTitle(?int $positionOfTitle = null): self
    {
        // validation for constraint: int
        if (!is_null($positionOfTitle) && !(is_int($positionOfTitle) || ctype_digit($positionOfTitle))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionOfTitle, true), gettype($positionOfTitle)), __LINE__);
        }
        if (is_null($positionOfTitle) || (is_array($positionOfTitle) && empty($positionOfTitle))) {
            unset($this->positionOfTitle);
        } else {
            $this->positionOfTitle = $positionOfTitle;
        }
        
        return $this;
    }
    /**
     * Get lettersalutationFemale value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLettersalutationFemale(): ?string
    {
        return $this->lettersalutationFemale ?? null;
    }
    /**
     * Set lettersalutationFemale value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lettersalutationFemale
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\AcademicdegreeValue
     */
    public function setLettersalutationFemale(?string $lettersalutationFemale = null): self
    {
        // validation for constraint: string
        if (!is_null($lettersalutationFemale) && !is_string($lettersalutationFemale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lettersalutationFemale, true), gettype($lettersalutationFemale)), __LINE__);
        }
        if (is_null($lettersalutationFemale) || (is_array($lettersalutationFemale) && empty($lettersalutationFemale))) {
            unset($this->lettersalutationFemale);
        } else {
            $this->lettersalutationFemale = $lettersalutationFemale;
        }
        
        return $this;
    }
    /**
     * Get lettersalutation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLettersalutation(): ?string
    {
        return $this->lettersalutation ?? null;
    }
    /**
     * Set lettersalutation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lettersalutation
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\AcademicdegreeValue
     */
    public function setLettersalutation(?string $lettersalutation = null): self
    {
        // validation for constraint: string
        if (!is_null($lettersalutation) && !is_string($lettersalutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lettersalutation, true), gettype($lettersalutation)), __LINE__);
        }
        if (is_null($lettersalutation) || (is_array($lettersalutation) && empty($lettersalutation))) {
            unset($this->lettersalutation);
        } else {
            $this->lettersalutation = $lettersalutation;
        }
        
        return $this;
    }
}
