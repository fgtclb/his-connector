<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createPerson Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreatePerson extends AbstractStructBase
{
    /**
     * The person
     * @var \FGTCLB\HisClient\PersonService\Struct\Person201806
     */
    protected \FGTCLB\HisClient\PersonService\Struct\Person201806 $person;
    /**
     * Constructor method for createPerson
     * @uses CreatePerson::setPerson()
     * @param \FGTCLB\HisClient\PersonService\Struct\Person201806 $person
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\Person201806 $person)
    {
        $this
            ->setPerson($person);
    }
    /**
     * Get person value
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806
     */
    public function getPerson(): \FGTCLB\HisClient\PersonService\Struct\Person201806
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \FGTCLB\HisClient\PersonService\Struct\Person201806 $person
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePerson
     */
    public function setPerson(\FGTCLB\HisClient\PersonService\Struct\Person201806 $person): self
    {
        $this->person = $person;
        
        return $this;
    }
}
