<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for personPicturesType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonPicturesType extends AbstractStructBase
{
    /**
     * The personPicture
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService[]
     */
    protected ?array $personPicture = null;
    /**
     * Constructor method for personPicturesType
     * @uses PersonPicturesType::setPersonPicture()
     * @param \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService[] $personPicture
     */
    public function __construct(?array $personPicture = null)
    {
        $this
            ->setPersonPicture($personPicture);
    }
    /**
     * Get personPicture value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService[]
     */
    public function getPersonPicture(): ?array
    {
        return $this->personPicture ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonPicture method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonPicture method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonPictureForArrayConstraintFromSetPersonPicture(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $personPicturesTypePersonPictureItem) {
            // validation for constraint: itemType
            if (!$personPicturesTypePersonPictureItem instanceof \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService) {
                $invalidValues[] = is_object($personPicturesTypePersonPictureItem) ? get_class($personPicturesTypePersonPictureItem) : sprintf('%s(%s)', gettype($personPicturesTypePersonPictureItem), var_export($personPicturesTypePersonPictureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The personPicture property can only contain items of type \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set personPicture value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService[] $personPicture
     * @return \FGTCLB\HisClient\MimedataService\Struct\PersonPicturesType
     */
    public function setPersonPicture(?array $personPicture = null): self
    {
        // validation for constraint: array
        if ('' !== ($personPictureArrayErrorMessage = self::validatePersonPictureForArrayConstraintFromSetPersonPicture($personPicture))) {
            throw new InvalidArgumentException($personPictureArrayErrorMessage, __LINE__);
        }
        if (is_null($personPicture) || (is_array($personPicture) && empty($personPicture))) {
            unset($this->personPicture);
        } else {
            $this->personPicture = $personPicture;
        }
        
        return $this;
    }
    /**
     * Add item to personPicture value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService $item
     * @return \FGTCLB\HisClient\MimedataService\Struct\PersonPicturesType
     */
    public function addToPersonPicture(\FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService) {
            throw new InvalidArgumentException(sprintf('The personPicture property can only contain items of type \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->personPicture[] = $item;
        
        return $this;
    }
}
