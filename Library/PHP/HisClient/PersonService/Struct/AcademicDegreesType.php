<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for academicDegreesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AcademicDegreesType extends AbstractStructBase
{
    /**
     * The academicDegree
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\AcademicDegree[]
     */
    protected ?array $academicDegree = null;
    /**
     * Constructor method for academicDegreesType
     * @uses AcademicDegreesType::setAcademicDegree()
     * @param \FGTCLB\HisClient\PersonService\Struct\AcademicDegree[] $academicDegree
     */
    public function __construct(?array $academicDegree = null)
    {
        $this
            ->setAcademicDegree($academicDegree);
    }
    /**
     * Get academicDegree value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\AcademicDegree[]
     */
    public function getAcademicDegree(): ?array
    {
        return $this->academicDegree ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAcademicDegree method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademicDegree method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademicDegreeForArrayConstraintFromSetAcademicDegree(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $academicDegreesTypeAcademicDegreeItem) {
            // validation for constraint: itemType
            if (!$academicDegreesTypeAcademicDegreeItem instanceof \FGTCLB\HisClient\PersonService\Struct\AcademicDegree) {
                $invalidValues[] = is_object($academicDegreesTypeAcademicDegreeItem) ? get_class($academicDegreesTypeAcademicDegreeItem) : sprintf('%s(%s)', gettype($academicDegreesTypeAcademicDegreeItem), var_export($academicDegreesTypeAcademicDegreeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The academicDegree property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\AcademicDegree, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set academicDegree value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\AcademicDegree[] $academicDegree
     * @return \FGTCLB\HisClient\PersonService\Struct\AcademicDegreesType
     */
    public function setAcademicDegree(?array $academicDegree = null): self
    {
        // validation for constraint: array
        if ('' !== ($academicDegreeArrayErrorMessage = self::validateAcademicDegreeForArrayConstraintFromSetAcademicDegree($academicDegree))) {
            throw new InvalidArgumentException($academicDegreeArrayErrorMessage, __LINE__);
        }
        if (is_null($academicDegree) || (is_array($academicDegree) && empty($academicDegree))) {
            unset($this->academicDegree);
        } else {
            $this->academicDegree = $academicDegree;
        }
        
        return $this;
    }
    /**
     * Add item to academicDegree value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\AcademicDegree $item
     * @return \FGTCLB\HisClient\PersonService\Struct\AcademicDegreesType
     */
    public function addToAcademicDegree(\FGTCLB\HisClient\PersonService\Struct\AcademicDegree $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\AcademicDegree) {
            throw new InvalidArgumentException(sprintf('The academicDegree property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\AcademicDegree, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->academicDegree[] = $item;
        
        return $this;
    }
}
