<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPersonResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindPersonResponse extends AbstractStructBase
{
    /**
     * The personIds
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonIdsType
     */
    protected \FGTCLB\HisClient\PersonService\Struct\PersonIdsType $personIds;
    /**
     * Constructor method for findPersonResponse
     * @uses FindPersonResponse::setPersonIds()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonIdsType $personIds
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\PersonIdsType $personIds)
    {
        $this
            ->setPersonIds($personIds);
    }
    /**
     * Get personIds value
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdsType
     */
    public function getPersonIds(): \FGTCLB\HisClient\PersonService\Struct\PersonIdsType
    {
        return $this->personIds;
    }
    /**
     * Set personIds value
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonIdsType $personIds
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPersonResponse
     */
    public function setPersonIds(\FGTCLB\HisClient\PersonService\Struct\PersonIdsType $personIds): self
    {
        $this->personIds = $personIds;
        
        return $this;
    }
}
