<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentMetadata Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DocumentMetadata extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    protected int $id;
    /**
     * The documentDeletePolicy
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'DocumentDeletePolicyValue'. Examples: Verstecken, Archivierung, Endgültige Vernichtung
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $documentDeletePolicy = null;
    /**
     * The createdAt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $createdAt = null;
    /**
     * The expiryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $expiryDate = null;
    /**
     * The createdByPersonId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $createdByPersonId = null;
    /**
     * The purpose
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'PurposeValue'. Examples: alumni_management, alu_agreements_partner, alu_agreements_student, app_management, bibuser_management, ca, community, business_contact, doc_management, stu_formerstudent
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $purpose = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The dmsMetadata
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $dmsMetadata = null;
    /**
     * The logicalFilename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $logicalFilename = null;
    /**
     * The mimedata
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\MimedataService\Struct\Mimedata|null
     */
    protected ?\FGTCLB\HisClient\MimedataService\Struct\Mimedata $mimedata = null;
    /**
     * The documentMetadataCategoryValue
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'DocumentMetadataCategoryValue'. Examples: Chipkarte, All, Bibliothekausweis, Foto, SN, Abschlussarbeitsdokumente, Abschlussbericht, Abschlussdokumente, Antrag, Baudokumente
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $documentMetadataCategoryValue = null;
    /**
     * Constructor method for DocumentMetadata
     * @uses DocumentMetadata::setId()
     * @uses DocumentMetadata::setDocumentDeletePolicy()
     * @uses DocumentMetadata::setCreatedAt()
     * @uses DocumentMetadata::setExpiryDate()
     * @uses DocumentMetadata::setCreatedByPersonId()
     * @uses DocumentMetadata::setPurpose()
     * @uses DocumentMetadata::setStatus()
     * @uses DocumentMetadata::setDmsMetadata()
     * @uses DocumentMetadata::setLogicalFilename()
     * @uses DocumentMetadata::setMimedata()
     * @uses DocumentMetadata::setDocumentMetadataCategoryValue()
     * @param int $id
     * @param string $documentDeletePolicy
     * @param string $createdAt
     * @param string $expiryDate
     * @param int $createdByPersonId
     * @param string $purpose
     * @param string $status
     * @param string $dmsMetadata
     * @param string $logicalFilename
     * @param \FGTCLB\HisClient\MimedataService\Struct\Mimedata $mimedata
     * @param string $documentMetadataCategoryValue
     */
    public function __construct(int $id, ?string $documentDeletePolicy = null, ?string $createdAt = null, ?string $expiryDate = null, ?int $createdByPersonId = null, ?string $purpose = null, ?string $status = null, ?string $dmsMetadata = null, ?string $logicalFilename = null, ?\FGTCLB\HisClient\MimedataService\Struct\Mimedata $mimedata = null, ?string $documentMetadataCategoryValue = null)
    {
        $this
            ->setId($id)
            ->setDocumentDeletePolicy($documentDeletePolicy)
            ->setCreatedAt($createdAt)
            ->setExpiryDate($expiryDate)
            ->setCreatedByPersonId($createdByPersonId)
            ->setPurpose($purpose)
            ->setStatus($status)
            ->setDmsMetadata($dmsMetadata)
            ->setLogicalFilename($logicalFilename)
            ->setMimedata($mimedata)
            ->setDocumentMetadataCategoryValue($documentMetadataCategoryValue);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get documentDeletePolicy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentDeletePolicy(): ?string
    {
        return $this->documentDeletePolicy ?? null;
    }
    /**
     * Set documentDeletePolicy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentDeletePolicy
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata
     */
    public function setDocumentDeletePolicy(?string $documentDeletePolicy = null): self
    {
        // validation for constraint: string
        if (!is_null($documentDeletePolicy) && !is_string($documentDeletePolicy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentDeletePolicy, true), gettype($documentDeletePolicy)), __LINE__);
        }
        if (is_null($documentDeletePolicy) || (is_array($documentDeletePolicy) && empty($documentDeletePolicy))) {
            unset($this->documentDeletePolicy);
        } else {
            $this->documentDeletePolicy = $documentDeletePolicy;
        }
        
        return $this;
    }
    /**
     * Get createdAt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt ?? null;
    }
    /**
     * Set createdAt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $createdAt
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata
     */
    public function setCreatedAt(?string $createdAt = null): self
    {
        // validation for constraint: string
        if (!is_null($createdAt) && !is_string($createdAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdAt, true), gettype($createdAt)), __LINE__);
        }
        if (is_null($createdAt) || (is_array($createdAt) && empty($createdAt))) {
            unset($this->createdAt);
        } else {
            $this->createdAt = $createdAt;
        }
        
        return $this;
    }
    /**
     * Get expiryDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate ?? null;
    }
    /**
     * Set expiryDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expiryDate
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata
     */
    public function setExpiryDate(?string $expiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryDate, true), gettype($expiryDate)), __LINE__);
        }
        if (is_null($expiryDate) || (is_array($expiryDate) && empty($expiryDate))) {
            unset($this->expiryDate);
        } else {
            $this->expiryDate = $expiryDate;
        }
        
        return $this;
    }
    /**
     * Get createdByPersonId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCreatedByPersonId(): ?int
    {
        return $this->createdByPersonId ?? null;
    }
    /**
     * Set createdByPersonId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $createdByPersonId
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata
     */
    public function setCreatedByPersonId(?int $createdByPersonId = null): self
    {
        // validation for constraint: int
        if (!is_null($createdByPersonId) && !(is_int($createdByPersonId) || ctype_digit($createdByPersonId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($createdByPersonId, true), gettype($createdByPersonId)), __LINE__);
        }
        if (is_null($createdByPersonId) || (is_array($createdByPersonId) && empty($createdByPersonId))) {
            unset($this->createdByPersonId);
        } else {
            $this->createdByPersonId = $createdByPersonId;
        }
        
        return $this;
    }
    /**
     * Get purpose value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPurpose(): ?string
    {
        return $this->purpose ?? null;
    }
    /**
     * Set purpose value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $purpose
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata
     */
    public function setPurpose(?string $purpose = null): self
    {
        // validation for constraint: string
        if (!is_null($purpose) && !is_string($purpose)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($purpose, true), gettype($purpose)), __LINE__);
        }
        if (is_null($purpose) || (is_array($purpose) && empty($purpose))) {
            unset($this->purpose);
        } else {
            $this->purpose = $purpose;
        }
        
        return $this;
    }
    /**
     * Get status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status ?? null;
    }
    /**
     * Set status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $status
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->status);
        } else {
            $this->status = $status;
        }
        
        return $this;
    }
    /**
     * Get dmsMetadata value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDmsMetadata(): ?string
    {
        return $this->dmsMetadata ?? null;
    }
    /**
     * Set dmsMetadata value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dmsMetadata
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata
     */
    public function setDmsMetadata(?string $dmsMetadata = null): self
    {
        // validation for constraint: string
        if (!is_null($dmsMetadata) && !is_string($dmsMetadata)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dmsMetadata, true), gettype($dmsMetadata)), __LINE__);
        }
        if (is_null($dmsMetadata) || (is_array($dmsMetadata) && empty($dmsMetadata))) {
            unset($this->dmsMetadata);
        } else {
            $this->dmsMetadata = $dmsMetadata;
        }
        
        return $this;
    }
    /**
     * Get logicalFilename value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLogicalFilename(): ?string
    {
        return $this->logicalFilename ?? null;
    }
    /**
     * Set logicalFilename value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $logicalFilename
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata
     */
    public function setLogicalFilename(?string $logicalFilename = null): self
    {
        // validation for constraint: string
        if (!is_null($logicalFilename) && !is_string($logicalFilename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logicalFilename, true), gettype($logicalFilename)), __LINE__);
        }
        if (is_null($logicalFilename) || (is_array($logicalFilename) && empty($logicalFilename))) {
            unset($this->logicalFilename);
        } else {
            $this->logicalFilename = $logicalFilename;
        }
        
        return $this;
    }
    /**
     * Get mimedata value
     * @return \FGTCLB\HisClient\MimedataService\Struct\Mimedata|null
     */
    public function getMimedata(): ?\FGTCLB\HisClient\MimedataService\Struct\Mimedata
    {
        return $this->mimedata;
    }
    /**
     * Set mimedata value
     * @param \FGTCLB\HisClient\MimedataService\Struct\Mimedata $mimedata
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata
     */
    public function setMimedata(?\FGTCLB\HisClient\MimedataService\Struct\Mimedata $mimedata = null): self
    {
        $this->mimedata = $mimedata;
        
        return $this;
    }
    /**
     * Get documentMetadataCategoryValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentMetadataCategoryValue(): ?string
    {
        return $this->documentMetadataCategoryValue ?? null;
    }
    /**
     * Set documentMetadataCategoryValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentMetadataCategoryValue
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata
     */
    public function setDocumentMetadataCategoryValue(?string $documentMetadataCategoryValue = null): self
    {
        // validation for constraint: string
        if (!is_null($documentMetadataCategoryValue) && !is_string($documentMetadataCategoryValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentMetadataCategoryValue, true), gettype($documentMetadataCategoryValue)), __LINE__);
        }
        if (is_null($documentMetadataCategoryValue) || (is_array($documentMetadataCategoryValue) && empty($documentMetadataCategoryValue))) {
            unset($this->documentMetadataCategoryValue);
        } else {
            $this->documentMetadataCategoryValue = $documentMetadataCategoryValue;
        }
        
        return $this;
    }
}
