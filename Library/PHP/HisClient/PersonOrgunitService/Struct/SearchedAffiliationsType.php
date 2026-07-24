<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchedAffiliationsType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchedAffiliationsType extends AbstractStructBase
{
    /**
     * The searchedAffiliation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended[]
     */
    protected ?array $searchedAffiliation = null;
    /**
     * Constructor method for searchedAffiliationsType
     * @uses SearchedAffiliationsType::setSearchedAffiliation()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended[] $searchedAffiliation
     */
    public function __construct(?array $searchedAffiliation = null)
    {
        $this
            ->setSearchedAffiliation($searchedAffiliation);
    }
    /**
     * Get searchedAffiliation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended[]
     */
    public function getSearchedAffiliation(): ?array
    {
        return $this->searchedAffiliation ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSearchedAffiliation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchedAffiliation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchedAffiliationForArrayConstraintFromSetSearchedAffiliation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchedAffiliationsTypeSearchedAffiliationItem) {
            // validation for constraint: itemType
            if (!$searchedAffiliationsTypeSearchedAffiliationItem instanceof \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended) {
                $invalidValues[] = is_object($searchedAffiliationsTypeSearchedAffiliationItem) ? get_class($searchedAffiliationsTypeSearchedAffiliationItem) : sprintf('%s(%s)', gettype($searchedAffiliationsTypeSearchedAffiliationItem), var_export($searchedAffiliationsTypeSearchedAffiliationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The searchedAffiliation property can only contain items of type \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set searchedAffiliation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended[] $searchedAffiliation
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationsType
     */
    public function setSearchedAffiliation(?array $searchedAffiliation = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchedAffiliationArrayErrorMessage = self::validateSearchedAffiliationForArrayConstraintFromSetSearchedAffiliation($searchedAffiliation))) {
            throw new InvalidArgumentException($searchedAffiliationArrayErrorMessage, __LINE__);
        }
        if (is_null($searchedAffiliation) || (is_array($searchedAffiliation) && empty($searchedAffiliation))) {
            unset($this->searchedAffiliation);
        } else {
            $this->searchedAffiliation = $searchedAffiliation;
        }
        
        return $this;
    }
    /**
     * Add item to searchedAffiliation value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended $item
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationsType
     */
    public function addToSearchedAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended) {
            throw new InvalidArgumentException(sprintf('The searchedAffiliation property can only contain items of type \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchedAffiliationExtended, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->searchedAffiliation[] = $item;
        
        return $this;
    }
}
