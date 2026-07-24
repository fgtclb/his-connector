<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAllTitlesResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAllTitlesResponse extends AbstractStructBase
{
    /**
     * The titles
     * @var \FGTCLB\HisClient\PersonService\Struct\TitlesType
     */
    protected \FGTCLB\HisClient\PersonService\Struct\TitlesType $titles;
    /**
     * Constructor method for readAllTitlesResponse
     * @uses ReadAllTitlesResponse::setTitles()
     * @param \FGTCLB\HisClient\PersonService\Struct\TitlesType $titles
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\TitlesType $titles)
    {
        $this
            ->setTitles($titles);
    }
    /**
     * Get titles value
     * @return \FGTCLB\HisClient\PersonService\Struct\TitlesType
     */
    public function getTitles(): \FGTCLB\HisClient\PersonService\Struct\TitlesType
    {
        return $this->titles;
    }
    /**
     * Set titles value
     * @param \FGTCLB\HisClient\PersonService\Struct\TitlesType $titles
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadAllTitlesResponse
     */
    public function setTitles(\FGTCLB\HisClient\PersonService\Struct\TitlesType $titles): self
    {
        $this->titles = $titles;
        
        return $this;
    }
}
