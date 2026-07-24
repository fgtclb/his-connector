<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllValidExtendedResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllValidExtendedResponse extends AbstractStructBase
{
    /**
     * The valuesXtd
     * @var \FGTCLB\HisClient\KeyvalueService\Struct\ValuesXtdType
     */
    protected \FGTCLB\HisClient\KeyvalueService\Struct\ValuesXtdType $valuesXtd;
    /**
     * Constructor method for getAllValidExtendedResponse
     * @uses GetAllValidExtendedResponse::setValuesXtd()
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\ValuesXtdType $valuesXtd
     */
    public function __construct(\FGTCLB\HisClient\KeyvalueService\Struct\ValuesXtdType $valuesXtd)
    {
        $this
            ->setValuesXtd($valuesXtd);
    }
    /**
     * Get valuesXtd value
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValuesXtdType
     */
    public function getValuesXtd(): \FGTCLB\HisClient\KeyvalueService\Struct\ValuesXtdType
    {
        return $this->valuesXtd;
    }
    /**
     * Set valuesXtd value
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\ValuesXtdType $valuesXtd
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GetAllValidExtendedResponse
     */
    public function setValuesXtd(\FGTCLB\HisClient\KeyvalueService\Struct\ValuesXtdType $valuesXtd): self
    {
        $this->valuesXtd = $valuesXtd;
        
        return $this;
    }
}
