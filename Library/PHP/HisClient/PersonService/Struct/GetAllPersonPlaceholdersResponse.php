<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllPersonPlaceholdersResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllPersonPlaceholdersResponse extends AbstractStructBase
{
    /**
     * The placeholders
     * @var \FGTCLB\HisClient\PersonService\Struct\PlaceholdersType
     */
    protected \FGTCLB\HisClient\PersonService\Struct\PlaceholdersType $placeholders;
    /**
     * Constructor method for getAllPersonPlaceholdersResponse
     * @uses GetAllPersonPlaceholdersResponse::setPlaceholders()
     * @param \FGTCLB\HisClient\PersonService\Struct\PlaceholdersType $placeholders
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\PlaceholdersType $placeholders)
    {
        $this
            ->setPlaceholders($placeholders);
    }
    /**
     * Get placeholders value
     * @return \FGTCLB\HisClient\PersonService\Struct\PlaceholdersType
     */
    public function getPlaceholders(): \FGTCLB\HisClient\PersonService\Struct\PlaceholdersType
    {
        return $this->placeholders;
    }
    /**
     * Set placeholders value
     * @param \FGTCLB\HisClient\PersonService\Struct\PlaceholdersType $placeholders
     * @return \FGTCLB\HisClient\PersonService\Struct\GetAllPersonPlaceholdersResponse
     */
    public function setPlaceholders(\FGTCLB\HisClient\PersonService\Struct\PlaceholdersType $placeholders): self
    {
        $this->placeholders = $placeholders;
        
        return $this;
    }
}
