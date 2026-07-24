<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteAccount60 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CompleteAccount60 extends Account
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: Account database id. IMPORTANT: this is the identifying property of the account for read and update operations.
     * @var int
     */
    protected int $id;
    /**
     * The purposeId
     * Meta information extracted from the WSDL
     * - documentation: The purpose that was used in generation of the username.
     * - nillable: true
     * @var int|null
     */
    protected ?int $purposeId = null;
    /**
     * Constructor method for CompleteAccount60
     * @uses CompleteAccount60::setId()
     * @uses CompleteAccount60::setPurposeId()
     * @param int $id
     * @param int $purposeId
     */
    public function __construct(int $id, ?int $purposeId = null)
    {
        $this
            ->setId($id)
            ->setPurposeId($purposeId);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get purposeId value
     * @return int|null
     */
    public function getPurposeId(): ?int
    {
        return $this->purposeId;
    }
    /**
     * Set purposeId value
     * @param int $purposeId
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccount60
     */
    public function setPurposeId(?int $purposeId = null): self
    {
        // validation for constraint: int
        if (!is_null($purposeId) && !(is_int($purposeId) || ctype_digit($purposeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($purposeId, true), gettype($purposeId)), __LINE__);
        }
        $this->purposeId = $purposeId;
        
        return $this;
    }
}
