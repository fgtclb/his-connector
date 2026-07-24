<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for titlesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TitlesType extends AbstractStructBase
{
    /**
     * The title
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\Title[]
     */
    protected ?array $title = null;
    /**
     * Constructor method for titlesType
     * @uses TitlesType::setTitle()
     * @param \FGTCLB\HisClient\PersonService\Struct\Title[] $title
     */
    public function __construct(?array $title = null)
    {
        $this
            ->setTitle($title);
    }
    /**
     * Get title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\Title[]
     */
    public function getTitle(): ?array
    {
        return $this->title ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTitle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTitle method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTitleForArrayConstraintFromSetTitle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $titlesTypeTitleItem) {
            // validation for constraint: itemType
            if (!$titlesTypeTitleItem instanceof \FGTCLB\HisClient\PersonService\Struct\Title) {
                $invalidValues[] = is_object($titlesTypeTitleItem) ? get_class($titlesTypeTitleItem) : sprintf('%s(%s)', gettype($titlesTypeTitleItem), var_export($titlesTypeTitleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The title property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\Title, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\Title[] $title
     * @return \FGTCLB\HisClient\PersonService\Struct\TitlesType
     */
    public function setTitle(?array $title = null): self
    {
        // validation for constraint: array
        if ('' !== ($titleArrayErrorMessage = self::validateTitleForArrayConstraintFromSetTitle($title))) {
            throw new InvalidArgumentException($titleArrayErrorMessage, __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->title);
        } else {
            $this->title = $title;
        }
        
        return $this;
    }
    /**
     * Add item to title value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonService\Struct\Title $item
     * @return \FGTCLB\HisClient\PersonService\Struct\TitlesType
     */
    public function addToTitle(\FGTCLB\HisClient\PersonService\Struct\Title $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonService\Struct\Title) {
            throw new InvalidArgumentException(sprintf('The title property can only contain items of type \FGTCLB\HisClient\PersonService\Struct\Title, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->title[] = $item;
        
        return $this;
    }
}
