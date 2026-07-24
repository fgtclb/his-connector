<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readRoom61Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadRoom61Response extends AbstractStructBase
{
    /**
     * The room
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\AbstractRoom|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\AbstractRoom $room = null;
    /**
     * Constructor method for readRoom61Response
     * @uses ReadRoom61Response::setRoom()
     * @param \FGTCLB\HisClient\FacilityService\Struct\AbstractRoom $room
     */
    public function __construct(?\FGTCLB\HisClient\FacilityService\Struct\AbstractRoom $room = null)
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get room value
     * @return \FGTCLB\HisClient\FacilityService\Struct\AbstractRoom|null
     */
    public function getRoom(): ?\FGTCLB\HisClient\FacilityService\Struct\AbstractRoom
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param \FGTCLB\HisClient\FacilityService\Struct\AbstractRoom $room
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoom61Response
     */
    public function setRoom(?\FGTCLB\HisClient\FacilityService\Struct\AbstractRoom $room = null): self
    {
        $this->room = $room;
        
        return $this;
    }
}
