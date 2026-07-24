<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomComposition Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoomComposition extends AbstractRoom
{
    /**
     * The roomComponents
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\FacilityService\Struct\RoomComponentsType|null
     */
    protected ?\FGTCLB\HisClient\FacilityService\Struct\RoomComponentsType $roomComponents = null;
    /**
     * Constructor method for RoomComposition
     * @uses RoomComposition::setRoomComponents()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomComponentsType $roomComponents
     */
    public function __construct(?\FGTCLB\HisClient\FacilityService\Struct\RoomComponentsType $roomComponents = null)
    {
        $this
            ->setRoomComponents($roomComponents);
    }
    /**
     * Get roomComponents value
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomComponentsType|null
     */
    public function getRoomComponents(): ?\FGTCLB\HisClient\FacilityService\Struct\RoomComponentsType
    {
        return $this->roomComponents;
    }
    /**
     * Set roomComponents value
     * @param \FGTCLB\HisClient\FacilityService\Struct\RoomComponentsType $roomComponents
     * @return \FGTCLB\HisClient\FacilityService\Struct\RoomComposition
     */
    public function setRoomComponents(?\FGTCLB\HisClient\FacilityService\Struct\RoomComponentsType $roomComponents = null): self
    {
        $this->roomComponents = $roomComponents;
        
        return $this;
    }
}
