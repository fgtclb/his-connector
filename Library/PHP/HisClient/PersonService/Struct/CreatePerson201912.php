<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createPerson201912 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreatePerson201912 extends AbstractStructBase
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
     * Constructor method for createPerson201912
     * @uses CreatePerson201912::setPerson()
     * @uses CreatePerson201912::setOrgrole()
     * @param \FGTCLB\HisClient\PersonService\Struct\Person201912 $person
     * @param \FGTCLB\HisClient\PersonService\Struct\Orgrole $orgrole
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\Person201912 $person, \FGTCLB\HisClient\PersonService\Struct\Orgrole $orgrole)
    {
        $this
            ->setPerson($person)
            ->setOrgrole($orgrole);
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
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePerson201912
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
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePerson201912
     */
    public function setOrgrole(\FGTCLB\HisClient\PersonService\Struct\Orgrole $orgrole): self
    {
        $this->orgrole = $orgrole;
        
        return $this;
    }
}
