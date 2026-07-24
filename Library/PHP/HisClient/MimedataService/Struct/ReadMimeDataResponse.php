<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readMimeDataResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadMimeDataResponse extends AbstractStructBase
{
    /**
     * The mimeBlob
     * @var string
     */
    protected string $mimeBlob;
    /**
     * Constructor method for readMimeDataResponse
     * @uses ReadMimeDataResponse::setMimeBlob()
     * @param string $mimeBlob
     */
    public function __construct(string $mimeBlob)
    {
        $this
            ->setMimeBlob($mimeBlob);
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
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadMimeDataResponse
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
}
