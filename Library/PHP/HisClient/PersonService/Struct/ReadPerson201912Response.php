<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPerson201912Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPerson201912Response extends AbstractStructBase
{
    /**
     * The person
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\PersonService\Struct\Person201912|null
     */
    protected ?\FGTCLB\HisClient\PersonService\Struct\Person201912 $person = null;
    /**
     * Constructor method for readPerson201912Response
     * @uses ReadPerson201912Response::setPerson()
     * @param \FGTCLB\HisClient\PersonService\Struct\Person201912 $person
     */
    public function __construct(?\FGTCLB\HisClient\PersonService\Struct\Person201912 $person = null)
    {
        $this
            ->setPerson($person);
    }
    /**
     * Get person value
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201912|null
     */
    public function getPerson(): ?\FGTCLB\HisClient\PersonService\Struct\Person201912
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \FGTCLB\HisClient\PersonService\Struct\Person201912 $person
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPerson201912Response
     */
    public function setPerson(?\FGTCLB\HisClient\PersonService\Struct\Person201912 $person = null): self
    {
        $this->person = $person;
        
        return $this;
    }
}
