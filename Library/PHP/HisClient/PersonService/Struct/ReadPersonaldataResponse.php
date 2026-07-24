<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readPersonaldataResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadPersonaldataResponse extends AbstractStructBase
{
    /**
     * The personaldata
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\PersonService\Struct\Personaldata|null
     */
    protected ?\FGTCLB\HisClient\PersonService\Struct\Personaldata $personaldata = null;
    /**
     * Constructor method for readPersonaldataResponse
     * @uses ReadPersonaldataResponse::setPersonaldata()
     * @param \FGTCLB\HisClient\PersonService\Struct\Personaldata $personaldata
     */
    public function __construct(?\FGTCLB\HisClient\PersonService\Struct\Personaldata $personaldata = null)
    {
        $this
            ->setPersonaldata($personaldata);
    }
    /**
     * Get personaldata value
     * @return \FGTCLB\HisClient\PersonService\Struct\Personaldata|null
     */
    public function getPersonaldata(): ?\FGTCLB\HisClient\PersonService\Struct\Personaldata
    {
        return $this->personaldata;
    }
    /**
     * Set personaldata value
     * @param \FGTCLB\HisClient\PersonService\Struct\Personaldata $personaldata
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonaldataResponse
     */
    public function setPersonaldata(?\FGTCLB\HisClient\PersonService\Struct\Personaldata $personaldata = null): self
    {
        $this->personaldata = $personaldata;
        
        return $this;
    }
}
