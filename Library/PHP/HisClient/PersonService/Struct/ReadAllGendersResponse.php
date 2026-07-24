<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAllGendersResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAllGendersResponse extends AbstractStructBase
{
    /**
     * The genders
     * @var \FGTCLB\HisClient\PersonService\Struct\GendersType
     */
    protected \FGTCLB\HisClient\PersonService\Struct\GendersType $genders;
    /**
     * Constructor method for readAllGendersResponse
     * @uses ReadAllGendersResponse::setGenders()
     * @param \FGTCLB\HisClient\PersonService\Struct\GendersType $genders
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\GendersType $genders)
    {
        $this
            ->setGenders($genders);
    }
    /**
     * Get genders value
     * @return \FGTCLB\HisClient\PersonService\Struct\GendersType
     */
    public function getGenders(): \FGTCLB\HisClient\PersonService\Struct\GendersType
    {
        return $this->genders;
    }
    /**
     * Set genders value
     * @param \FGTCLB\HisClient\PersonService\Struct\GendersType $genders
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadAllGendersResponse
     */
    public function setGenders(\FGTCLB\HisClient\PersonService\Struct\GendersType $genders): self
    {
        $this->genders = $genders;
        
        return $this;
    }
}
