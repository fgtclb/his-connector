<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchAccountForPerson Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAccountForPerson extends AbstractStructBase
{
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - documentation: A person database id.
     * @var int
     */
    protected int $personId;
    /**
     * Constructor method for searchAccountForPerson
     * @uses SearchAccountForPerson::setPersonId()
     * @param int $personId
     */
    public function __construct(int $personId)
    {
        $this
            ->setPersonId($personId);
    }
    /**
     * Get personId value
     * @return int
     */
    public function getPersonId(): int
    {
        return $this->personId;
    }
    /**
     * Set personId value
     * @param int $personId
     * @return \FGTCLB\HisClient\AccountService\Struct\SearchAccountForPerson
     */
    public function setPersonId(int $personId): self
    {
        // validation for constraint: int
        if (!is_null($personId) && !(is_int($personId) || ctype_digit($personId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        $this->personId = $personId;
        
        return $this;
    }
}
