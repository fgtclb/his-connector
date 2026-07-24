<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generatePersonIdentifierResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GeneratePersonIdentifierResponse extends AbstractStructBase
{
    /**
     * The personIdentifier
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier
     */
    protected \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier $personIdentifier;
    /**
     * Constructor method for generatePersonIdentifierResponse
     * @uses GeneratePersonIdentifierResponse::setPersonIdentifier()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier $personIdentifier
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\PersonIdentifier $personIdentifier)
    {
        $this
            ->setPersonIdentifier($personIdentifier);
    }
    /**
     * Get personIdentifier value
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier
     */
    public function getPersonIdentifier(): \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier
    {
        return $this->personIdentifier;
    }
    /**
     * Set personIdentifier value
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier $personIdentifier
     * @return \FGTCLB\HisClient\PersonService\Struct\GeneratePersonIdentifierResponse
     */
    public function setPersonIdentifier(\FGTCLB\HisClient\PersonService\Struct\PersonIdentifier $personIdentifier): self
    {
        $this->personIdentifier = $personIdentifier;
        
        return $this;
    }
}
