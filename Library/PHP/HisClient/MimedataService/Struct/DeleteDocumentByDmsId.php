<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteDocumentByDmsId Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDocumentByDmsId extends AbstractStructBase
{
    /**
     * The dmsIdentifier
     * @var string
     */
    protected string $dmsIdentifier;
    /**
     * Constructor method for deleteDocumentByDmsId
     * @uses DeleteDocumentByDmsId::setDmsIdentifier()
     * @param string $dmsIdentifier
     */
    public function __construct(string $dmsIdentifier)
    {
        $this
            ->setDmsIdentifier($dmsIdentifier);
    }
    /**
     * Get dmsIdentifier value
     * @return string
     */
    public function getDmsIdentifier(): string
    {
        return $this->dmsIdentifier;
    }
    /**
     * Set dmsIdentifier value
     * @param string $dmsIdentifier
     * @return \FGTCLB\HisClient\MimedataService\Struct\DeleteDocumentByDmsId
     */
    public function setDmsIdentifier(string $dmsIdentifier): self
    {
        // validation for constraint: string
        if (!is_null($dmsIdentifier) && !is_string($dmsIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dmsIdentifier, true), gettype($dmsIdentifier)), __LINE__);
        }
        $this->dmsIdentifier = $dmsIdentifier;
        
        return $this;
    }
}
