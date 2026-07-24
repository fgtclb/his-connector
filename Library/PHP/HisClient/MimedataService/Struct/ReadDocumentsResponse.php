<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readDocumentsResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadDocumentsResponse extends AbstractStructBase
{
    /**
     * The documentMetadatas
     * @var \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadatasType
     */
    protected \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadatasType $documentMetadatas;
    /**
     * Constructor method for readDocumentsResponse
     * @uses ReadDocumentsResponse::setDocumentMetadatas()
     * @param \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadatasType $documentMetadatas
     */
    public function __construct(\FGTCLB\HisClient\MimedataService\Struct\DocumentMetadatasType $documentMetadatas)
    {
        $this
            ->setDocumentMetadatas($documentMetadatas);
    }
    /**
     * Get documentMetadatas value
     * @return \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadatasType
     */
    public function getDocumentMetadatas(): \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadatasType
    {
        return $this->documentMetadatas;
    }
    /**
     * Set documentMetadatas value
     * @param \FGTCLB\HisClient\MimedataService\Struct\DocumentMetadatasType $documentMetadatas
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadDocumentsResponse
     */
    public function setDocumentMetadatas(\FGTCLB\HisClient\MimedataService\Struct\DocumentMetadatasType $documentMetadatas): self
    {
        $this->documentMetadatas = $documentMetadatas;
        
        return $this;
    }
}
