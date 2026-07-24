<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllPersonAttributeTypesResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllPersonAttributeTypesResponse extends AbstractStructBase
{
    /**
     * The personAttributeTypes
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypesType
     */
    protected \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypesType $personAttributeTypes;
    /**
     * Constructor method for getAllPersonAttributeTypesResponse
     * @uses GetAllPersonAttributeTypesResponse::setPersonAttributeTypes()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypesType $personAttributeTypes
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypesType $personAttributeTypes)
    {
        $this
            ->setPersonAttributeTypes($personAttributeTypes);
    }
    /**
     * Get personAttributeTypes value
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypesType
     */
    public function getPersonAttributeTypes(): \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypesType
    {
        return $this->personAttributeTypes;
    }
    /**
     * Set personAttributeTypes value
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypesType $personAttributeTypes
     * @return \FGTCLB\HisClient\PersonService\Struct\GetAllPersonAttributeTypesResponse
     */
    public function setPersonAttributeTypes(\FGTCLB\HisClient\PersonService\Struct\PersonAttributeTypesType $personAttributeTypes): self
    {
        $this->personAttributeTypes = $personAttributeTypes;
        
        return $this;
    }
}
