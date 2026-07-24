<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for documentMetadatasType Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DocumentMetadatasType extends AbstractStructBase
{
    /**
     * The documentMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata[]
     */
    protected ?array $documentMetadata = null;
    /**
     * Constructor method for documentMetadatasType
     * @uses DocumentMetadatasType::setDocumentMetadata()
     * @param \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata[] $documentMetadata
     */
    public function __construct(?array $documentMetadata = null)
    {
        $this
            ->setDocumentMetadata($documentMetadata);
    }
    /**
     * Get documentMetadata value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata[]
     */
    public function getDocumentMetadata(): ?array
    {
        return $this->documentMetadata ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDocumentMetadata method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentMetadata method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentMetadataForArrayConstraintFromSetDocumentMetadata(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $documentMetadatasTypeDocumentMetadataItem) {
            // validation for constraint: itemType
            if (!$documentMetadatasTypeDocumentMetadataItem instanceof \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata) {
                $invalidValues[] = is_object($documentMetadatasTypeDocumentMetadataItem) ? get_class($documentMetadatasTypeDocumentMetadataItem) : sprintf('%s(%s)', gettype($documentMetadatasTypeDocumentMetadataItem), var_export($documentMetadatasTypeDocumentMetadataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The documentMetadata property can only contain items of type \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set documentMetadata value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata[] $documentMetadata
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadatasType
     */
    public function setDocumentMetadata(?array $documentMetadata = null): self
    {
        // validation for constraint: array
        if ('' !== ($documentMetadataArrayErrorMessage = self::validateDocumentMetadataForArrayConstraintFromSetDocumentMetadata($documentMetadata))) {
            throw new InvalidArgumentException($documentMetadataArrayErrorMessage, __LINE__);
        }
        if (is_null($documentMetadata) || (is_array($documentMetadata) && empty($documentMetadata))) {
            unset($this->documentMetadata);
        } else {
            $this->documentMetadata = $documentMetadata;
        }
        
        return $this;
    }
    /**
     * Add item to documentMetadata value
     * @throws InvalidArgumentException
     * @param \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata $item
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadatasType
     */
    public function addToDocumentMetadata(\FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata) {
            throw new InvalidArgumentException(sprintf('The documentMetadata property can only contain items of type \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadata, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->documentMetadata[] = $item;
        
        return $this;
    }
}
