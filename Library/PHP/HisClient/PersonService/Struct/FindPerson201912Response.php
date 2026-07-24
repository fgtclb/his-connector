<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPerson201912Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindPerson201912Response extends AbstractStructBase
{
    /**
     * The personIds
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonIdsType
     */
    protected \FGTCLB\HisClient\PersonService\Struct\PersonIdsType $personIds;
    /**
     * Constructor method for findPerson201912Response
     * @uses FindPerson201912Response::setPersonIds()
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
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912Response
     */
    public function setPersonIds(\FGTCLB\HisClient\PersonService\Struct\PersonIdsType $personIds): self
    {
        $this->personIds = $personIds;
        
        return $this;
    }
}
