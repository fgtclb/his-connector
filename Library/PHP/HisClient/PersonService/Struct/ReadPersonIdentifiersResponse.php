<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPersonIdentifiersResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPersonIdentifiersResponse extends AbstractStructBase
{
    /**
     * The readPersonIdentifiersResult
     * @var \FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResultType
     */
    protected \FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResultType $readPersonIdentifiersResult;
    /**
     * Constructor method for readPersonIdentifiersResponse
     * @uses ReadPersonIdentifiersResponse::setReadPersonIdentifiersResult()
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResultType $readPersonIdentifiersResult
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResultType $readPersonIdentifiersResult)
    {
        $this
            ->setReadPersonIdentifiersResult($readPersonIdentifiersResult);
    }
    /**
     * Get readPersonIdentifiersResult value
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResultType
     */
    public function getReadPersonIdentifiersResult(): \FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResultType
    {
        return $this->readPersonIdentifiersResult;
    }
    /**
     * Set readPersonIdentifiersResult value
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResultType $readPersonIdentifiersResult
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResponse
     */
    public function setReadPersonIdentifiersResult(\FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResultType $readPersonIdentifiersResult): self
    {
        $this->readPersonIdentifiersResult = $readPersonIdentifiersResult;
        
        return $this;
    }
}
