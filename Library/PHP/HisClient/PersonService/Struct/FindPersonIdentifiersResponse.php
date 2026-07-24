<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPersonIdentifiersResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindPersonIdentifiersResponse extends AbstractStructBase
{
    /**
     * The findPersonIdentifiersResult
     * @var \FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResultType
     */
    protected \FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResultType $findPersonIdentifiersResult;
    /**
     * Constructor method for findPersonIdentifiersResponse
     * @uses FindPersonIdentifiersResponse::setFindPersonIdentifiersResult()
     * @param \FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResultType $findPersonIdentifiersResult
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResultType $findPersonIdentifiersResult)
    {
        $this
            ->setFindPersonIdentifiersResult($findPersonIdentifiersResult);
    }
    /**
     * Get findPersonIdentifiersResult value
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResultType
     */
    public function getFindPersonIdentifiersResult(): \FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResultType
    {
        return $this->findPersonIdentifiersResult;
    }
    /**
     * Set findPersonIdentifiersResult value
     * @param \FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResultType $findPersonIdentifiersResult
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResponse
     */
    public function setFindPersonIdentifiersResult(\FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResultType $findPersonIdentifiersResult): self
    {
        $this->findPersonIdentifiersResult = $findPersonIdentifiersResult;
        
        return $this;
    }
}
