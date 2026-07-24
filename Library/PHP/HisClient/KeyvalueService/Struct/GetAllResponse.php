<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllResponse extends AbstractStructBase
{
    /**
     * The values
     * @var \FGTCLB\HisClient\KeyvalueService\Struct\ValuesType
     */
    protected \FGTCLB\HisClient\KeyvalueService\Struct\ValuesType $values;
    /**
     * Constructor method for getAllResponse
     * @uses GetAllResponse::setValues()
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\ValuesType $values
     */
    public function __construct(\FGTCLB\HisClient\KeyvalueService\Struct\ValuesType $values)
    {
        $this
            ->setValues($values);
    }
    /**
     * Get values value
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValuesType
     */
    public function getValues(): \FGTCLB\HisClient\KeyvalueService\Struct\ValuesType
    {
        return $this->values;
    }
    /**
     * Set values value
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\ValuesType $values
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GetAllResponse
     */
    public function setValues(\FGTCLB\HisClient\KeyvalueService\Struct\ValuesType $values): self
    {
        $this->values = $values;
        
        return $this;
    }
}
