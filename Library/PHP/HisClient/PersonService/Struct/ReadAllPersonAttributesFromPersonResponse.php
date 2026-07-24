<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAllPersonAttributesFromPersonResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAllPersonAttributesFromPersonResponse extends AbstractStructBase
{
    /**
     * The personAttributeDtos
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDtosType
     */
    protected \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDtosType $personAttributeDtos;
    /**
     * Constructor method for readAllPersonAttributesFromPersonResponse
     * @uses ReadAllPersonAttributesFromPersonResponse::setPersonAttributeDtos()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDtosType $personAttributeDtos
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\PersonAttributeDtosType $personAttributeDtos)
    {
        $this
            ->setPersonAttributeDtos($personAttributeDtos);
    }
    /**
     * Get personAttributeDtos value
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDtosType
     */
    public function getPersonAttributeDtos(): \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDtosType
    {
        return $this->personAttributeDtos;
    }
    /**
     * Set personAttributeDtos value
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributeDtosType $personAttributeDtos
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadAllPersonAttributesFromPersonResponse
     */
    public function setPersonAttributeDtos(\FGTCLB\HisClient\PersonService\Struct\PersonAttributeDtosType $personAttributeDtos): self
    {
        $this->personAttributeDtos = $personAttributeDtos;
        
        return $this;
    }
}
