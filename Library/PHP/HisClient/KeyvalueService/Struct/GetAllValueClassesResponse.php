<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllValueClassesResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllValueClassesResponse extends AbstractStructBase
{
    /**
     * The valueClassDescriptions
     * @var \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescriptionsType
     */
    protected \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescriptionsType $valueClassDescriptions;
    /**
     * Constructor method for getAllValueClassesResponse
     * @uses GetAllValueClassesResponse::setValueClassDescriptions()
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescriptionsType $valueClassDescriptions
     */
    public function __construct(\FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescriptionsType $valueClassDescriptions)
    {
        $this
            ->setValueClassDescriptions($valueClassDescriptions);
    }
    /**
     * Get valueClassDescriptions value
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescriptionsType
     */
    public function getValueClassDescriptions(): \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescriptionsType
    {
        return $this->valueClassDescriptions;
    }
    /**
     * Set valueClassDescriptions value
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescriptionsType $valueClassDescriptions
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GetAllValueClassesResponse
     */
    public function setValueClassDescriptions(\FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescriptionsType $valueClassDescriptions): self
    {
        $this->valueClassDescriptions = $valueClassDescriptions;
        
        return $this;
    }
}
