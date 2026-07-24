<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRelation Struct
 * Meta information extracted from the WSDL
 * - documentation: An external Relation entry for this person.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRelation extends AbstractStructBase
{
    /**
     * The externalSystem
     * @var string
     */
    protected string $externalSystem;
    /**
     * The externalTable
     * @var string
     */
    protected string $externalTable;
    /**
     * The externalTabpk
     * @var string
     */
    protected string $externalTabpk;
    /**
     * Constructor method for ExternalRelation
     * @uses ExternalRelation::setExternalSystem()
     * @uses ExternalRelation::setExternalTable()
     * @uses ExternalRelation::setExternalTabpk()
     * @param string $externalSystem
     * @param string $externalTable
     * @param string $externalTabpk
     */
    public function __construct(string $externalSystem, string $externalTable, string $externalTabpk)
    {
        $this
            ->setExternalSystem($externalSystem)
            ->setExternalTable($externalTable)
            ->setExternalTabpk($externalTabpk);
    }
    /**
     * Get externalSystem value
     * @return string
     */
    public function getExternalSystem(): string
    {
        return $this->externalSystem;
    }
    /**
     * Set externalSystem value
     * @param string $externalSystem
     * @return \FGTCLB\HisClient\PersonService\Struct\ExternalRelation
     */
    public function setExternalSystem(string $externalSystem): self
    {
        // validation for constraint: string
        if (!is_null($externalSystem) && !is_string($externalSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalSystem, true), gettype($externalSystem)), __LINE__);
        }
        $this->externalSystem = $externalSystem;
        
        return $this;
    }
    /**
     * Get externalTable value
     * @return string
     */
    public function getExternalTable(): string
    {
        return $this->externalTable;
    }
    /**
     * Set externalTable value
     * @param string $externalTable
     * @return \FGTCLB\HisClient\PersonService\Struct\ExternalRelation
     */
    public function setExternalTable(string $externalTable): self
    {
        // validation for constraint: string
        if (!is_null($externalTable) && !is_string($externalTable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalTable, true), gettype($externalTable)), __LINE__);
        }
        $this->externalTable = $externalTable;
        
        return $this;
    }
    /**
     * Get externalTabpk value
     * @return string
     */
    public function getExternalTabpk(): string
    {
        return $this->externalTabpk;
    }
    /**
     * Set externalTabpk value
     * @param string $externalTabpk
     * @return \FGTCLB\HisClient\PersonService\Struct\ExternalRelation
     */
    public function setExternalTabpk(string $externalTabpk): self
    {
        // validation for constraint: string
        if (!is_null($externalTabpk) && !is_string($externalTabpk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalTabpk, true), gettype($externalTabpk)), __LINE__);
        }
        $this->externalTabpk = $externalTabpk;
        
        return $this;
    }
}
