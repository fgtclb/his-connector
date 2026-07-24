<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPerson201806Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPerson201806Response extends AbstractStructBase
{
    /**
     * The person
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\PersonService\Struct\Person201806|null
     */
    protected ?\FGTCLB\HisClient\PersonService\Struct\Person201806 $person = null;
    /**
     * Constructor method for readPerson201806Response
     * @uses ReadPerson201806Response::setPerson()
     * @param \FGTCLB\HisClient\PersonService\Struct\Person201806 $person
     */
    public function __construct(?\FGTCLB\HisClient\PersonService\Struct\Person201806 $person = null)
    {
        $this
            ->setPerson($person);
    }
    /**
     * Get person value
     * @return \FGTCLB\HisClient\PersonService\Struct\Person201806|null
     */
    public function getPerson(): ?\FGTCLB\HisClient\PersonService\Struct\Person201806
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \FGTCLB\HisClient\PersonService\Struct\Person201806 $person
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPerson201806Response
     */
    public function setPerson(?\FGTCLB\HisClient\PersonService\Struct\Person201806 $person = null): self
    {
        $this->person = $person;
        
        return $this;
    }
}
