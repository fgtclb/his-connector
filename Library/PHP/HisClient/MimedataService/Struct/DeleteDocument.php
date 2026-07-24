<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteDocument Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDocument extends AbstractStructBase
{
    /**
     * The documentMetadataId
     * @var int
     */
    protected int $documentMetadataId;
    /**
     * Constructor method for deleteDocument
     * @uses DeleteDocument::setDocumentMetadataId()
     * @param int $documentMetadataId
     */
    public function __construct(int $documentMetadataId)
    {
        $this
            ->setDocumentMetadataId($documentMetadataId);
    }
    /**
     * Get documentMetadataId value
     * @return int
     */
    public function getDocumentMetadataId(): int
    {
        return $this->documentMetadataId;
    }
    /**
     * Set documentMetadataId value
     * @param int $documentMetadataId
     * @return \FGTCLB\HisClient\MimedataService\Struct\DeleteDocument
     */
    public function setDocumentMetadataId(int $documentMetadataId): self
    {
        // validation for constraint: int
        if (!is_null($documentMetadataId) && !(is_int($documentMetadataId) || ctype_digit($documentMetadataId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentMetadataId, true), gettype($documentMetadataId)), __LINE__);
        }
        $this->documentMetadataId = $documentMetadataId;
        
        return $this;
    }
}
