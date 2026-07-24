<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPersonByIdentifierTypeAndValueResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPersonByIdentifierTypeAndValueResponse extends AbstractStructBase
{
    /**
     * The person
     * @var \FGTCLB\HisClient\PersonService\Struct\Person201912
     */
    protected \FGTCLB\HisClient\PersonService\Struct\Person201912 $person;
    /**
     * Constructor method for readPersonByIdentifierTypeAndValueResponse
     * @uses ReadPersonByIdentifierTypeAndValueResponse::setPerson()
     * @param \FGTCLB\HisClient\PersonService\Struct\Person201912 $person
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\Person201912 $person)
    {
        $this
            ->setPerson($person);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonByIdentifierTypeAndValueResponse
     */
    public function setPerson(\FGTCLB\HisClient\PersonService\Struct\Person201912 $person): self
    {
        $this->person = $person;
        
        return $this;
    }
}
