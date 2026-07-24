<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentStorageCategoryValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DocumentStorageCategoryValue extends AbstractKeyValue
{
    /**
     * The storageTargetKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $storageTargetKey = null;
    /**
     * The storageTargetUniquename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $storageTargetUniquename = null;
    /**
     * Constructor method for DocumentStorageCategoryValue
     * @uses DocumentStorageCategoryValue::setStorageTargetKey()
     * @uses DocumentStorageCategoryValue::setStorageTargetUniquename()
     * @param int $storageTargetKey
     * @param string $storageTargetUniquename
     */
    public function __construct(?int $storageTargetKey = null, ?string $storageTargetUniquename = null)
    {
        $this
            ->setStorageTargetKey($storageTargetKey)
            ->setStorageTargetUniquename($storageTargetUniquename);
    }
    /**
     * Get storageTargetKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getStorageTargetKey(): ?int
    {
        return $this->storageTargetKey ?? null;
    }
    /**
     * Set storageTargetKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $storageTargetKey
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\DocumentStorageCategoryValue
     */
    public function setStorageTargetKey(?int $storageTargetKey = null): self
    {
        // validation for constraint: int
        if (!is_null($storageTargetKey) && !(is_int($storageTargetKey) || ctype_digit($storageTargetKey))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storageTargetKey, true), gettype($storageTargetKey)), __LINE__);
        }
        if (is_null($storageTargetKey) || (is_array($storageTargetKey) && empty($storageTargetKey))) {
            unset($this->storageTargetKey);
        } else {
            $this->storageTargetKey = $storageTargetKey;
        }
        
        return $this;
    }
    /**
     * Get storageTargetUniquename value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStorageTargetUniquename(): ?string
    {
        return $this->storageTargetUniquename ?? null;
    }
    /**
     * Set storageTargetUniquename value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $storageTargetUniquename
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\DocumentStorageCategoryValue
     */
    public function setStorageTargetUniquename(?string $storageTargetUniquename = null): self
    {
        // validation for constraint: string
        if (!is_null($storageTargetUniquename) && !is_string($storageTargetUniquename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storageTargetUniquename, true), gettype($storageTargetUniquename)), __LINE__);
        }
        if (is_null($storageTargetUniquename) || (is_array($storageTargetUniquename) && empty($storageTargetUniquename))) {
            unset($this->storageTargetUniquename);
        } else {
            $this->storageTargetUniquename = $storageTargetUniquename;
        }
        
        return $this;
    }
}
