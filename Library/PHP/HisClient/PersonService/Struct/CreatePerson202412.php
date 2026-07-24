<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createPerson202412 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreatePerson202412 extends AbstractStructBase
{
    /**
     * The person
     * @var \FGTCLB\HisClient\PersonService\Struct\Person201912
     */
    protected \FGTCLB\HisClient\PersonService\Struct\Person201912 $person;
    /**
     * The orgrole
     * @var \FGTCLB\HisClient\PersonService\Struct\Orgrole
     */
    protected \FGTCLB\HisClient\PersonService\Struct\Orgrole $orgrole;
    /**
     * The duplicateSearch
     * Meta information extracted from the WSDL
     * - documentation: If the value is set to true, duplicates will be searched.
     * @var bool
     */
    protected bool $duplicateSearch;
    /**
     * The externalRelation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\PersonService\Struct\ExternalRelation|null
     */
    protected ?\FGTCLB\HisClient\PersonService\Struct\ExternalRelation $externalRelation = null;
    /**
     * Constructor method for createPerson202412
     * @uses CreatePerson202412::setPerson()
     * @uses CreatePerson202412::setOrgrole()
     * @uses CreatePerson202412::setDuplicateSearch()
     * @uses CreatePerson202412::setExternalRelation()
     * @param \FGTCLB\HisClient\PersonService\Struct\Person201912 $person
     * @param \FGTCLB\HisClient\PersonService\Struct\Orgrole $orgrole
     * @param bool $duplicateSearch
     * @param \FGTCLB\HisClient\PersonService\Struct\ExternalRelation $externalRelation
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\Person201912 $person, \FGTCLB\HisClient\PersonService\Struct\Orgrole $orgrole, bool $duplicateSearch, ?\FGTCLB\HisClient\PersonService\Struct\ExternalRelation $externalRelation = null)
    {
        $this
            ->setPerson($person)
            ->setOrgrole($orgrole)
            ->setDuplicateSearch($duplicateSearch)
            ->setExternalRelation($externalRelation);
    }
    /**
     * Get person value
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201912
     */
    public function getPerson(): \FGTCLB\HisClient\PersonService\Struct\Person201912
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \FGTCLB\HisClient\PersonService\Struct\Person201912 $person
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePerson202412
     */
    public function setPerson(\FGTCLB\HisClient\PersonService\Struct\Person201912 $person): self
    {
        $this->person = $person;
        
        return $this;
    }
    /**
     * Get orgrole value
     * @return \FGTCLB\HisClient\PersonService\Struct\Orgrole
     */
    public function getOrgrole(): \FGTCLB\HisClient\PersonService\Struct\Orgrole
    {
        return $this->orgrole;
    }
    /**
     * Set orgrole value
     * @param \FGTCLB\HisClient\PersonService\Struct\Orgrole $orgrole
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePerson202412
     */
    public function setOrgrole(\FGTCLB\HisClient\PersonService\Struct\Orgrole $orgrole): self
    {
        $this->orgrole = $orgrole;
        
        return $this;
    }
    /**
     * Get duplicateSearch value
     * @return bool
     */
    public function getDuplicateSearch(): bool
    {
        return $this->duplicateSearch;
    }
    /**
     * Set duplicateSearch value
     * @param bool $duplicateSearch
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePerson202412
     */
    public function setDuplicateSearch(bool $duplicateSearch): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateSearch) && !is_bool($duplicateSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateSearch, true), gettype($duplicateSearch)), __LINE__);
        }
        $this->duplicateSearch = $duplicateSearch;
        
        return $this;
    }
    /**
     * Get externalRelation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\PersonService\Struct\ExternalRelation|null
     */
    public function getExternalRelation(): ?\FGTCLB\HisClient\PersonService\Struct\ExternalRelation
    {
        return $this->externalRelation ?? null;
    }
    /**
     * Set externalRelation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \FGTCLB\HisClient\PersonService\Struct\ExternalRelation $externalRelation
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePerson202412
     */
    public function setExternalRelation(?\FGTCLB\HisClient\PersonService\Struct\ExternalRelation $externalRelation = null): self
    {
        if (is_null($externalRelation) || (is_array($externalRelation) && empty($externalRelation))) {
            unset($this->externalRelation);
        } else {
            $this->externalRelation = $externalRelation;
        }
        
        return $this;
    }
}
