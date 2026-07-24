<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readDocumentForReportResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadDocumentForReportResponse extends AbstractStructBase
{
    /**
     * The mimeblob
     * Meta information extracted from the WSDL
     * - documentation: The requested document or NIL, if no report exists with given parameters.
     * - nillable: true
     * @var string|null
     */
    protected ?string $mimeblob = null;
    /**
     * Constructor method for readDocumentForReportResponse
     * @uses ReadDocumentForReportResponse::setMimeblob()
     * @param string $mimeblob
     */
    public function __construct(?string $mimeblob = null)
    {
        $this
            ->setMimeblob($mimeblob);
    }
    /**
     * Get mimeblob value
     * @return string|null
     */
    public function getMimeblob(): ?string
    {
        return $this->mimeblob;
    }
    /**
     * Set mimeblob value
     * @param string $mimeblob
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadDocumentForReportResponse
     */
    public function setMimeblob(?string $mimeblob = null): self
    {
        // validation for constraint: string
        if (!is_null($mimeblob) && !is_string($mimeblob)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeblob, true), gettype($mimeblob)), __LINE__);
        }
        $this->mimeblob = $mimeblob;
        
        return $this;
    }
}
