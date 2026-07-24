<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePerson201912 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdatePerson201912 extends AbstractStructBase
{
    /**
     * The person
     * @var \FGTCLB\HisClient\PersonService\Struct\Person201912
     */
    protected \FGTCLB\HisClient\PersonService\Struct\Person201912 $person;
    /**
     * Constructor method for updatePerson201912
     * @uses UpdatePerson201912::setPerson()
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
     * @return \FGTCLB\HisClient\PersonService\Struct\UpdatePerson201912
     */
    public function setPerson(\FGTCLB\HisClient\PersonService\Struct\Person201912 $person): self
    {
        $this->person = $person;
        
        return $this;
    }
}
