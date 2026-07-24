<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePerson Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdatePerson extends AbstractStructBase
{
    /**
     * The person
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonExisting
     */
    protected \FGTCLB\HisClient\PersonService\Struct\PersonExisting $person;
    /**
     * Constructor method for updatePerson
     * @uses UpdatePerson::setPerson()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonExisting $person
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\PersonExisting $person)
    {
        $this
            ->setPerson($person);
    }
    /**
     * Get person value
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting
     */
    public function getPerson(): \FGTCLB\HisClient\PersonService\Struct\PersonExisting
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonExisting $person
     * @return \FGTCLB\HisClient\PersonService\Struct\UpdatePerson
     */
    public function setPerson(\FGTCLB\HisClient\PersonService\Struct\PersonExisting $person): self
    {
        $this->person = $person;
        
        return $this;
    }
}
