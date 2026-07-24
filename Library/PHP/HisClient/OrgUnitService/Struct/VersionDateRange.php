<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VersionDateRange Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VersionDateRange extends AbstractStructBase
{
    /**
     * The from
     * @var string
     */
    protected string $from;
    /**
     * The to
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $to = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for VersionDateRange
     * @uses VersionDateRange::setFrom()
     * @uses VersionDateRange::setTo()
     * @uses VersionDateRange::setType()
     * @param string $from
     * @param string $to
     * @param string $type
     */
    public function __construct(string $from, ?string $to = null, ?string $type = null)
    {
        $this
            ->setFrom($from)
            ->setTo($to)
            ->setType($type);
    }
    /**
     * Get from value
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\VersionDateRange
     */
    public function setFrom(string $from): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;
        
        return $this;
    }
    /**
     * Get to value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to ?? null;
    }
    /**
     * Set to value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $to
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\VersionDateRange
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        if (is_null($to) || (is_array($to) && empty($to))) {
            unset($this->to);
        } else {
            $this->to = $to;
        }
        
        return $this;
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type ?? null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \FGTCLB\HisClient\OrgUnitService\Enum\TypeType::valueIsValid()
     * @uses \FGTCLB\HisClient\OrgUnitService\Enum\TypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\VersionDateRange
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\FGTCLB\HisClient\OrgUnitService\Enum\TypeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \FGTCLB\HisClient\OrgUnitService\Enum\TypeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \FGTCLB\HisClient\OrgUnitService\Enum\TypeType::getValidValues())), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
        }
        
        return $this;
    }
}
