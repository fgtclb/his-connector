<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValueClassDescription Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValueClassDescription extends AbstractStructBase
{
    /**
     * The valueClass
     * @var string
     */
    protected string $valueClass;
    /**
     * The valueClassQualified
     * @var string
     */
    protected string $valueClassQualified;
    /**
     * The package
     * @var string
     */
    protected string $package;
    /**
     * The defaulttext
     * @var string
     */
    protected string $defaulttext;
    /**
     * The tablename
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $tablename = null;
    /**
     * Constructor method for ValueClassDescription
     * @uses ValueClassDescription::setValueClass()
     * @uses ValueClassDescription::setValueClassQualified()
     * @uses ValueClassDescription::setPackage()
     * @uses ValueClassDescription::setDefaulttext()
     * @uses ValueClassDescription::setTablename()
     * @param string $valueClass
     * @param string $valueClassQualified
     * @param string $package
     * @param string $defaulttext
     * @param string $tablename
     */
    public function __construct(string $valueClass, string $valueClassQualified, string $package, string $defaulttext, ?string $tablename = null)
    {
        $this
            ->setValueClass($valueClass)
            ->setValueClassQualified($valueClassQualified)
            ->setPackage($package)
            ->setDefaulttext($defaulttext)
            ->setTablename($tablename);
    }
    /**
     * Get valueClass value
     * @return string
     */
    public function getValueClass(): string
    {
        return $this->valueClass;
    }
    /**
     * Set valueClass value
     * @param string $valueClass
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription
     */
    public function setValueClass(string $valueClass): self
    {
        // validation for constraint: string
        if (!is_null($valueClass) && !is_string($valueClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valueClass, true), gettype($valueClass)), __LINE__);
        }
        $this->valueClass = $valueClass;
        
        return $this;
    }
    /**
     * Get valueClassQualified value
     * @return string
     */
    public function getValueClassQualified(): string
    {
        return $this->valueClassQualified;
    }
    /**
     * Set valueClassQualified value
     * @param string $valueClassQualified
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription
     */
    public function setValueClassQualified(string $valueClassQualified): self
    {
        // validation for constraint: string
        if (!is_null($valueClassQualified) && !is_string($valueClassQualified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valueClassQualified, true), gettype($valueClassQualified)), __LINE__);
        }
        $this->valueClassQualified = $valueClassQualified;
        
        return $this;
    }
    /**
     * Get package value
     * @return string
     */
    public function getPackage(): string
    {
        return $this->package;
    }
    /**
     * Set package value
     * @param string $package
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription
     */
    public function setPackage(string $package): self
    {
        // validation for constraint: string
        if (!is_null($package) && !is_string($package)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($package, true), gettype($package)), __LINE__);
        }
        $this->package = $package;
        
        return $this;
    }
    /**
     * Get defaulttext value
     * @return string
     */
    public function getDefaulttext(): string
    {
        return $this->defaulttext;
    }
    /**
     * Set defaulttext value
     * @param string $defaulttext
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription
     */
    public function setDefaulttext(string $defaulttext): self
    {
        // validation for constraint: string
        if (!is_null($defaulttext) && !is_string($defaulttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaulttext, true), gettype($defaulttext)), __LINE__);
        }
        $this->defaulttext = $defaulttext;
        
        return $this;
    }
    /**
     * Get tablename value
     * @return string|null
     */
    public function getTablename(): ?string
    {
        return $this->tablename;
    }
    /**
     * Set tablename value
     * @param string $tablename
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\ValueClassDescription
     */
    public function setTablename(?string $tablename = null): self
    {
        // validation for constraint: string
        if (!is_null($tablename) && !is_string($tablename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tablename, true), gettype($tablename)), __LINE__);
        }
        $this->tablename = $tablename;
        
        return $this;
    }
}
