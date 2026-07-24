<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readMimedata201912Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadMimedata201912Response extends AbstractStructBase
{
    /**
     * The mimedata
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \FGTCLB\HisClient\MimedataService\Struct\Mimedata|null
     */
    protected ?\FGTCLB\HisClient\MimedataService\Struct\Mimedata $mimedata = null;
    /**
     * Constructor method for readMimedata201912Response
     * @uses ReadMimedata201912Response::setMimedata()
     * @param \FGTCLB\HisClient\MimedataService\Struct\Mimedata $mimedata
     */
    public function __construct(?\FGTCLB\HisClient\MimedataService\Struct\Mimedata $mimedata = null)
    {
        $this
            ->setMimedata($mimedata);
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
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadMimedata201912Response
     */
    public function setMimedata(?\FGTCLB\HisClient\MimedataService\Struct\Mimedata $mimedata = null): self
    {
        $this->mimedata = $mimedata;
        
        return $this;
    }
}
