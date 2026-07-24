<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for savePerson Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SavePerson extends AbstractStructBase
{
    /**
     * The person
     * @var \FGTCLB\HisClient\PersonService\Struct\Person
     */
    protected \FGTCLB\HisClient\PersonService\Struct\Person $person;
    /**
     * Constructor method for savePerson
     * @uses SavePerson::setPerson()
     * @param \FGTCLB\HisClient\PersonService\Struct\Person $person
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\Person $person)
    {
        $this
            ->setPerson($person);
    }
    /**
     * Get person value
     * @return \FGTCLB\HisClient\PersonService\Struct\Person
     */
    public function getPerson(): \FGTCLB\HisClient\PersonService\Struct\Person
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \FGTCLB\HisClient\PersonService\Struct\Person $person
     * @return \FGTCLB\HisClient\PersonService\Struct\SavePerson
     */
    public function setPerson(\FGTCLB\HisClient\PersonService\Struct\Person $person): self
    {
        $this->person = $person;
        
        return $this;
    }
}
