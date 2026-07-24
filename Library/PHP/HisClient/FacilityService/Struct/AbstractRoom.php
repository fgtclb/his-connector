<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractRoom Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class AbstractRoom extends AbstractBuilding
{
    /**
     * The partOfRoomComposition
     * @var bool
     */
    protected bool $partOfRoomComposition;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The classRoomName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $classRoomName = null;
    /**
     * Constructor method for AbstractRoom
     * @uses AbstractRoom::setPartOfRoomComposition()
     * @uses AbstractRoom::setDescription()
     * @uses AbstractRoom::setClassRoomName()
     * @param bool $partOfRoomComposition
     * @param string $description
     * @param string $classRoomName
     */
    public function __construct(bool $partOfRoomComposition, ?string $description = null, ?string $classRoomName = null)
    {
        $this
            ->setPartOfRoomComposition($partOfRoomComposition)
            ->setDescription($description)
            ->setClassRoomName($classRoomName);
    }
    /**
     * Get partOfRoomComposition value
     * @return bool
     */
    public function getPartOfRoomComposition(): bool
    {
        return $this->partOfRoomComposition;
    }
    /**
     * Set partOfRoomComposition value
     * @param bool $partOfRoomComposition
     * @return \FGTCLB\HisClient\FacilityService\Struct\AbstractRoom
     */
    public function setPartOfRoomComposition(bool $partOfRoomComposition): self
    {
        // validation for constraint: boolean
        if (!is_null($partOfRoomComposition) && !is_bool($partOfRoomComposition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partOfRoomComposition, true), gettype($partOfRoomComposition)), __LINE__);
        }
        $this->partOfRoomComposition = $partOfRoomComposition;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \FGTCLB\HisClient\FacilityService\Struct\AbstractRoom
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get classRoomName value
     * @return string|null
     */
    public function getClassRoomName(): ?string
    {
        return $this->classRoomName;
    }
    /**
     * Set classRoomName value
     * @param string $classRoomName
     * @return \FGTCLB\HisClient\FacilityService\Struct\AbstractRoom
     */
    public function setClassRoomName(?string $classRoomName = null): self
    {
        // validation for constraint: string
        if (!is_null($classRoomName) && !is_string($classRoomName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classRoomName, true), gettype($classRoomName)), __LINE__);
        }
        $this->classRoomName = $classRoomName;
        
        return $this;
    }
}
