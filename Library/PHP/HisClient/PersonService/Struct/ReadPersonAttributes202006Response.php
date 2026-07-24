<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPersonAttributes202006Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPersonAttributes202006Response extends AbstractStructBase
{
    /**
     * The personAttributes202006
     * @var \FGTCLB\HisClient\PersonService\Struct\PersonAttributes202006Type
     */
    protected \FGTCLB\HisClient\PersonService\Struct\PersonAttributes202006Type $personAttributes202006;
    /**
     * Constructor method for readPersonAttributes202006Response
     * @uses ReadPersonAttributes202006Response::setPersonAttributes202006()
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributes202006Type $personAttributes202006
     */
    public function __construct(\FGTCLB\HisClient\PersonService\Struct\PersonAttributes202006Type $personAttributes202006)
    {
        $this
            ->setPersonAttributes202006($personAttributes202006);
    }
    /**
     * Get personAttributes202006 value
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonAttributes202006Type
     */
    public function getPersonAttributes202006(): \FGTCLB\HisClient\PersonService\Struct\PersonAttributes202006Type
    {
        return $this->personAttributes202006;
    }
    /**
     * Set personAttributes202006 value
     * @param \FGTCLB\HisClient\PersonService\Struct\PersonAttributes202006Type $personAttributes202006
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonAttributes202006Response
     */
    public function setPersonAttributes202006(\FGTCLB\HisClient\PersonService\Struct\PersonAttributes202006Type $personAttributes202006): self
    {
        $this->personAttributes202006 = $personAttributes202006;
        
        return $this;
    }
}
