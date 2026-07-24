<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPersonResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPersonResponse extends AbstractStructBase
{
    /**
     * The person
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonExisting|null
     */
    protected ?\FGTCLB\HisClient\PersonService\Struct\PersonExisting $person = null;
    /**
     * Constructor method for readPersonResponse
     * @uses ReadPersonResponse::setPerson()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonExisting $person
     */
    public function __construct(?\FGTCLB\HisClient\PersonService\Struct\PersonExisting $person = null)
    {
        $this
            ->setPerson($person);
    }
    /**
     * Get person value
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonExisting|null
     */
    public function getPerson(): ?\FGTCLB\HisClient\PersonService\Struct\PersonExisting
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonExisting $person
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonResponse
     */
    public function setPerson(?\FGTCLB\HisClient\PersonService\Struct\PersonExisting $person = null): self
    {
        $this->person = $person;
        
        return $this;
    }
}
