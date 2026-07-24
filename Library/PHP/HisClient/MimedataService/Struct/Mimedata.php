<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Mimedata Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Mimedata extends AbstractStructBase
{
    /**
     * The mimeBlob
     * @var string
     */
    protected string $mimeBlob;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The objGuid
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $objGuid = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The externalDmsIdentifier
     * Meta information extracted from the WSDL
     * - documentation: Id of the file in an external DMS
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $externalDmsIdentifier = null;
    /**
     * The mimePath
     * Meta information extracted from the WSDL
     * - documentation: Path of the file on the fileserver (ending with '/')
     * - nillable: true
     * @var string|null
     */
    protected ?string $mimePath = null;
    /**
     * The mimeType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $mimeType = null;
    /**
     * The createdAt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $createdAt = null;
    /**
     * The updatedAt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $updatedAt = null;
    /**
     * The mimeFilename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mimeFilename = null;
    /**
     * Constructor method for Mimedata
     * @uses Mimedata::setMimeBlob()
     * @uses Mimedata::setId()
     * @uses Mimedata::setObjGuid()
     * @uses Mimedata::setDescription()
     * @uses Mimedata::setExternalDmsIdentifier()
     * @uses Mimedata::setMimePath()
     * @uses Mimedata::setMimeType()
     * @uses Mimedata::setCreatedAt()
     * @uses Mimedata::setUpdatedAt()
     * @uses Mimedata::setMimeFilename()
     * @param string $mimeBlob
     * @param int $id
     * @param string $objGuid
     * @param string $description
     * @param string $externalDmsIdentifier
     * @param string $mimePath
     * @param string $mimeType
     * @param string $createdAt
     * @param string $updatedAt
     * @param string $mimeFilename
     */
    public function __construct(string $mimeBlob, ?int $id = null, ?string $objGuid = null, ?string $description = null, ?string $externalDmsIdentifier = null, ?string $mimePath = null, ?string $mimeType = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $mimeFilename = null)
    {
        $this
            ->setMimeBlob($mimeBlob)
            ->setId($id)
            ->setObjGuid($objGuid)
            ->setDescription($description)
            ->setExternalDmsIdentifier($externalDmsIdentifier)
            ->setMimePath($mimePath)
            ->setMimeType($mimeType)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt)
            ->setMimeFilename($mimeFilename);
    }
    /**
     * Get mimeBlob value
     * @return string
     */
    public function getMimeBlob(): string
    {
        return $this->mimeBlob;
    }
    /**
     * Set mimeBlob value
     * @param string $mimeBlob
     * @return \FGTCLB\HisClient\MimedataService\Struct\Mimedata
     */
    public function setMimeBlob(string $mimeBlob): self
    {
        // validation for constraint: string
        if (!is_null($mimeBlob) && !is_string($mimeBlob)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeBlob, true), gettype($mimeBlob)), __LINE__);
        }
        $this->mimeBlob = $mimeBlob;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\MimedataService\Struct\Mimedata
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get objGuid value
     * @return string|null
     */
    public function getObjGuid(): ?string
    {
        return $this->objGuid;
    }
    /**
     * Set objGuid value
     * @param string $objGuid
     * @return \FGTCLB\HisClient\MimedataService\Struct\Mimedata
     */
    public function setObjGuid(?string $objGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($objGuid) && !is_string($objGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objGuid, true), gettype($objGuid)), __LINE__);
        }
        $this->objGuid = $objGuid;
        
        return $this;
    }
    /**
     * Get description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }
    /**
     * Set description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \FGTCLB\HisClient\MimedataService\Struct\Mimedata
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->description);
        } else {
            $this->description = $description;
        }
        
        return $this;
    }
    /**
     * Get externalDmsIdentifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExternalDmsIdentifier(): ?string
    {
        return $this->externalDmsIdentifier ?? null;
    }
    /**
     * Set externalDmsIdentifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $externalDmsIdentifier
     * @return \FGTCLB\HisClient\MimedataService\Struct\Mimedata
     */
    public function setExternalDmsIdentifier(?string $externalDmsIdentifier = null): self
    {
        // validation for constraint: string
        if (!is_null($externalDmsIdentifier) && !is_string($externalDmsIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalDmsIdentifier, true), gettype($externalDmsIdentifier)), __LINE__);
        }
        if (is_null($externalDmsIdentifier) || (is_array($externalDmsIdentifier) && empty($externalDmsIdentifier))) {
            unset($this->externalDmsIdentifier);
        } else {
            $this->externalDmsIdentifier = $externalDmsIdentifier;
        }
        
        return $this;
    }
    /**
     * Get mimePath value
     * @return string|null
     */
    public function getMimePath(): ?string
    {
        return $this->mimePath;
    }
    /**
     * Set mimePath value
     * @param string $mimePath
     * @return \FGTCLB\HisClient\MimedataService\Struct\Mimedata
     */
    public function setMimePath(?string $mimePath = null): self
    {
        // validation for constraint: string
        if (!is_null($mimePath) && !is_string($mimePath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimePath, true), gettype($mimePath)), __LINE__);
        }
        $this->mimePath = $mimePath;
        
        return $this;
    }
    /**
     * Get mimeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType ?? null;
    }
    /**
     * Set mimeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mimeType
     * @return \FGTCLB\HisClient\MimedataService\Struct\Mimedata
     */
    public function setMimeType(?string $mimeType = null): self
    {
        // validation for constraint: string
        if (!is_null($mimeType) && !is_string($mimeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeType, true), gettype($mimeType)), __LINE__);
        }
        if (is_null($mimeType) || (is_array($mimeType) && empty($mimeType))) {
            unset($this->mimeType);
        } else {
            $this->mimeType = $mimeType;
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
     * @return \FGTCLB\HisClient\MimedataService\Struct\Mimedata
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
     * Get updatedAt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt ?? null;
    }
    /**
     * Set updatedAt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $updatedAt
     * @return \FGTCLB\HisClient\MimedataService\Struct\Mimedata
     */
    public function setUpdatedAt(?string $updatedAt = null): self
    {
        // validation for constraint: string
        if (!is_null($updatedAt) && !is_string($updatedAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatedAt, true), gettype($updatedAt)), __LINE__);
        }
        if (is_null($updatedAt) || (is_array($updatedAt) && empty($updatedAt))) {
            unset($this->updatedAt);
        } else {
            $this->updatedAt = $updatedAt;
        }
        
        return $this;
    }
    /**
     * Get mimeFilename value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMimeFilename(): ?string
    {
        return $this->mimeFilename ?? null;
    }
    /**
     * Set mimeFilename value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mimeFilename
     * @return \FGTCLB\HisClient\MimedataService\Struct\Mimedata
     */
    public function setMimeFilename(?string $mimeFilename = null): self
    {
        // validation for constraint: string
        if (!is_null($mimeFilename) && !is_string($mimeFilename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeFilename, true), gettype($mimeFilename)), __LINE__);
        }
        if (is_null($mimeFilename) || (is_array($mimeFilename) && empty($mimeFilename))) {
            unset($this->mimeFilename);
        } else {
            $this->mimeFilename = $mimeFilename;
        }
        
        return $this;
    }
}
