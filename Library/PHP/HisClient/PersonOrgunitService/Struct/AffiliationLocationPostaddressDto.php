<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AffiliationLocationPostaddressDto Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AffiliationLocationPostaddressDto extends AffiliationLocationDto
{
    /**
     * The postaddress
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress
     */
    protected \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress $postaddress;
    /**
     * Constructor method for AffiliationLocationPostaddressDto
     * @uses AffiliationLocationPostaddressDto::setPostaddress()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress $postaddress
     */
    public function __construct(\FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress $postaddress)
    {
        $this
            ->setPostaddress($postaddress);
    }
    /**
     * Get postaddress value
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress
     */
    public function getPostaddress(): \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress
    {
        return $this->postaddress;
    }
    /**
     * Set postaddress value
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress $postaddress
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AffiliationLocationPostaddressDto
     */
    public function setPostaddress(\FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress $postaddress): self
    {
        $this->postaddress = $postaddress;
        
        return $this;
    }
}
