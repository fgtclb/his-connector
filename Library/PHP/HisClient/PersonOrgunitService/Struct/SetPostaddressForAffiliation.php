<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setPostaddressForAffiliation Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetPostaddressForAffiliation extends AbstractStructBase
{
    /**
     * The affiliationId
     * @var int
     */
    protected int $affiliationId;
    /**
     * The postaddress
     * @var \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress
     */
    protected \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress $postaddress;
    /**
     * Constructor method for setPostaddressForAffiliation
     * @uses SetPostaddressForAffiliation::setAffiliationId()
     * @uses SetPostaddressForAffiliation::setPostaddress()
     * @param int $affiliationId
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress $postaddress
     */
    public function __construct(int $affiliationId, \FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress $postaddress)
    {
        $this
            ->setAffiliationId($affiliationId)
            ->setPostaddress($postaddress);
    }
    /**
     * Get affiliationId value
     * @return int
     */
    public function getAffiliationId(): int
    {
        return $this->affiliationId;
    }
    /**
     * Set affiliationId value
     * @param int $affiliationId
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SetPostaddressForAffiliation
     */
    public function setAffiliationId(int $affiliationId): self
    {
        // validation for constraint: int
        if (!is_null($affiliationId) && !(is_int($affiliationId) || ctype_digit($affiliationId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($affiliationId, true), gettype($affiliationId)), __LINE__);
        }
        $this->affiliationId = $affiliationId;
        
        return $this;
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SetPostaddressForAffiliation
     */
    public function setPostaddress(\FGTCLB\HisClient\PersonOrgunitService\Struct\PostAddress $postaddress): self
    {
        $this->postaddress = $postaddress;
        
        return $this;
    }
}
