<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for readAffiliation Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReadAffiliation extends AbstractStructBase
{
    /**
     * The affiliationId
     * @var int
     */
    protected int $affiliationId;
    /**
     * Constructor method for readAffiliation
     * @uses ReadAffiliation::setAffiliationId()
     * @param int $affiliationId
     */
    public function __construct(int $affiliationId)
    {
        $this
            ->setAffiliationId($affiliationId);
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
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliation
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
}
