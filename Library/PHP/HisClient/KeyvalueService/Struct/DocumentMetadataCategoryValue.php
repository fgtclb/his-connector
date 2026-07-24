<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentMetadataCategoryValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DocumentMetadataCategoryValue extends AbstractKeyValue
{
    /**
     * The documentStorageCategoryId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $documentStorageCategoryId = null;
    /**
     * The documentDeletePolicyId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $documentDeletePolicyId = null;
    /**
     * The additionalSubfolderToStore
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $additionalSubfolderToStore = null;
    /**
     * The additionalDmsFilenameParams
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $additionalDmsFilenameParams = null;
    /**
     * The parentId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $parentId = null;
    /**
     * Constructor method for DocumentMetadataCategoryValue
     * @uses DocumentMetadataCategoryValue::setDocumentStorageCategoryId()
     * @uses DocumentMetadataCategoryValue::setDocumentDeletePolicyId()
     * @uses DocumentMetadataCategoryValue::setAdditionalSubfolderToStore()
     * @uses DocumentMetadataCategoryValue::setAdditionalDmsFilenameParams()
     * @uses DocumentMetadataCategoryValue::setParentId()
     * @param int $documentStorageCategoryId
     * @param int $documentDeletePolicyId
     * @param string $additionalSubfolderToStore
     * @param string $additionalDmsFilenameParams
     * @param int $parentId
     */
    public function __construct(?int $documentStorageCategoryId = null, ?int $documentDeletePolicyId = null, ?string $additionalSubfolderToStore = null, ?string $additionalDmsFilenameParams = null, ?int $parentId = null)
    {
        $this
            ->setDocumentStorageCategoryId($documentStorageCategoryId)
            ->setDocumentDeletePolicyId($documentDeletePolicyId)
            ->setAdditionalSubfolderToStore($additionalSubfolderToStore)
            ->setAdditionalDmsFilenameParams($additionalDmsFilenameParams)
            ->setParentId($parentId);
    }
    /**
     * Get documentStorageCategoryId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDocumentStorageCategoryId(): ?int
    {
        return $this->documentStorageCategoryId ?? null;
    }
    /**
     * Set documentStorageCategoryId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $documentStorageCategoryId
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\DocumentMetadataCategoryValue
     */
    public function setDocumentStorageCategoryId(?int $documentStorageCategoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentStorageCategoryId) && !(is_int($documentStorageCategoryId) || ctype_digit($documentStorageCategoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentStorageCategoryId, true), gettype($documentStorageCategoryId)), __LINE__);
        }
        if (is_null($documentStorageCategoryId) || (is_array($documentStorageCategoryId) && empty($documentStorageCategoryId))) {
            unset($this->documentStorageCategoryId);
        } else {
            $this->documentStorageCategoryId = $documentStorageCategoryId;
        }
        
        return $this;
    }
    /**
     * Get documentDeletePolicyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDocumentDeletePolicyId(): ?int
    {
        return $this->documentDeletePolicyId ?? null;
    }
    /**
     * Set documentDeletePolicyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $documentDeletePolicyId
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\DocumentMetadataCategoryValue
     */
    public function setDocumentDeletePolicyId(?int $documentDeletePolicyId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentDeletePolicyId) && !(is_int($documentDeletePolicyId) || ctype_digit($documentDeletePolicyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentDeletePolicyId, true), gettype($documentDeletePolicyId)), __LINE__);
        }
        if (is_null($documentDeletePolicyId) || (is_array($documentDeletePolicyId) && empty($documentDeletePolicyId))) {
            unset($this->documentDeletePolicyId);
        } else {
            $this->documentDeletePolicyId = $documentDeletePolicyId;
        }
        
        return $this;
    }
    /**
     * Get additionalSubfolderToStore value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalSubfolderToStore(): ?string
    {
        return $this->additionalSubfolderToStore ?? null;
    }
    /**
     * Set additionalSubfolderToStore value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalSubfolderToStore
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\DocumentMetadataCategoryValue
     */
    public function setAdditionalSubfolderToStore(?string $additionalSubfolderToStore = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalSubfolderToStore) && !is_string($additionalSubfolderToStore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalSubfolderToStore, true), gettype($additionalSubfolderToStore)), __LINE__);
        }
        if (is_null($additionalSubfolderToStore) || (is_array($additionalSubfolderToStore) && empty($additionalSubfolderToStore))) {
            unset($this->additionalSubfolderToStore);
        } else {
            $this->additionalSubfolderToStore = $additionalSubfolderToStore;
        }
        
        return $this;
    }
    /**
     * Get additionalDmsFilenameParams value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalDmsFilenameParams(): ?string
    {
        return $this->additionalDmsFilenameParams ?? null;
    }
    /**
     * Set additionalDmsFilenameParams value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalDmsFilenameParams
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\DocumentMetadataCategoryValue
     */
    public function setAdditionalDmsFilenameParams(?string $additionalDmsFilenameParams = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalDmsFilenameParams) && !is_string($additionalDmsFilenameParams)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalDmsFilenameParams, true), gettype($additionalDmsFilenameParams)), __LINE__);
        }
        if (is_null($additionalDmsFilenameParams) || (is_array($additionalDmsFilenameParams) && empty($additionalDmsFilenameParams))) {
            unset($this->additionalDmsFilenameParams);
        } else {
            $this->additionalDmsFilenameParams = $additionalDmsFilenameParams;
        }
        
        return $this;
    }
    /**
     * Get parentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId ?? null;
    }
    /**
     * Set parentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $parentId
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\DocumentMetadataCategoryValue
     */
    public function setParentId(?int $parentId = null): self
    {
        // validation for constraint: int
        if (!is_null($parentId) && !(is_int($parentId) || ctype_digit($parentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        if (is_null($parentId) || (is_array($parentId) && empty($parentId))) {
            unset($this->parentId);
        } else {
            $this->parentId = $parentId;
        }
        
        return $this;
    }
}
