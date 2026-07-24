<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Building Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Building extends AbstractBuilding
{
    /**
     * The floorCount
     * @var int
     */
    protected int $floorCount;
    /**
     * The campusId
     * @var int
     */
    protected int $campusId;
    /**
     * The inventorynumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $inventorynumber = null;
    /**
     * The longitude
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $longitude = null;
    /**
     * The latitude
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $latitude = null;
    /**
     * Constructor method for Building
     * @uses Building::setFloorCount()
     * @uses Building::setCampusId()
     * @uses Building::setInventorynumber()
     * @uses Building::setLongitude()
     * @uses Building::setLatitude()
     * @param int $floorCount
     * @param int $campusId
     * @param string $inventorynumber
     * @param string $longitude
     * @param string $latitude
     */
    public function __construct(int $floorCount, int $campusId, ?string $inventorynumber = null, ?string $longitude = null, ?string $latitude = null)
    {
        $this
            ->setFloorCount($floorCount)
            ->setCampusId($campusId)
            ->setInventorynumber($inventorynumber)
            ->setLongitude($longitude)
            ->setLatitude($latitude);
    }
    /**
     * Get floorCount value
     * @return int
     */
    public function getFloorCount(): int
    {
        return $this->floorCount;
    }
    /**
     * Set floorCount value
     * @param int $floorCount
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building
     */
    public function setFloorCount(int $floorCount): self
    {
        // validation for constraint: int
        if (!is_null($floorCount) && !(is_int($floorCount) || ctype_digit($floorCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($floorCount, true), gettype($floorCount)), __LINE__);
        }
        $this->floorCount = $floorCount;
        
        return $this;
    }
    /**
     * Get campusId value
     * @return int
     */
    public function getCampusId(): int
    {
        return $this->campusId;
    }
    /**
     * Set campusId value
     * @param int $campusId
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building
     */
    public function setCampusId(int $campusId): self
    {
        // validation for constraint: int
        if (!is_null($campusId) && !(is_int($campusId) || ctype_digit($campusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campusId, true), gettype($campusId)), __LINE__);
        }
        $this->campusId = $campusId;
        
        return $this;
    }
    /**
     * Get inventorynumber value
     * @return string|null
     */
    public function getInventorynumber(): ?string
    {
        return $this->inventorynumber;
    }
    /**
     * Set inventorynumber value
     * @param string $inventorynumber
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building
     */
    public function setInventorynumber(?string $inventorynumber = null): self
    {
        // validation for constraint: string
        if (!is_null($inventorynumber) && !is_string($inventorynumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inventorynumber, true), gettype($inventorynumber)), __LINE__);
        }
        $this->inventorynumber = $inventorynumber;
        
        return $this;
    }
    /**
     * Get longitude value
     * @return string|null
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param string $longitude
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building
     */
    public function setLongitude(?string $longitude = null): self
    {
        // validation for constraint: string
        if (!is_null($longitude) && !is_string($longitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->longitude = $longitude;
        
        return $this;
    }
    /**
     * Get latitude value
     * @return string|null
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param string $latitude
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building
     */
    public function setLatitude(?string $latitude = null): self
    {
        // validation for constraint: string
        if (!is_null($latitude) && !is_string($latitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->latitude = $latitude;
        
        return $this;
    }
}
