<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HyperlinkMeta Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HyperlinkMeta extends AddressMeta
{
    /**
     * The hyperlink
     * @var \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink
     */
    protected \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink;
    /**
     * Constructor method for HyperlinkMeta
     * @uses HyperlinkMeta::setHyperlink()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink
     */
    public function __construct(\FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink)
    {
        $this
            ->setHyperlink($hyperlink);
    }
    /**
     * Get hyperlink value
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink
     */
    public function getHyperlink(): \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink
    {
        return $this->hyperlink;
    }
    /**
     * Set hyperlink value
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\HyperlinkMeta
     */
    public function setHyperlink(\FGTCLB\HisClient\PersonAddressService\Struct\Hyperlink $hyperlink): self
    {
        $this->hyperlink = $hyperlink;
        
        return $this;
    }
}
