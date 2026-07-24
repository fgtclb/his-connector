<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPersonPictureDtoList Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchPersonPictureDtoList extends AbstractStructBase
{
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The hiskeyId
     * Meta information extracted from the WSDL
     * - documentation: hiskeyId from k_mimecontext (Verwendungszweck)
     * @var int
     */
    protected int $hiskeyId;
    /**
     * Constructor method for searchPersonPictureDtoList
     * @uses SearchPersonPictureDtoList::setPersonId()
     * @uses SearchPersonPictureDtoList::setHiskeyId()
     * @param int $personId
     * @param int $hiskeyId
     */
    public function __construct(int $personId, int $hiskeyId)
    {
        $this
            ->setPersonId($personId)
            ->setHiskeyId($hiskeyId);
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
     * @return \FGTCLB\HisClient\MimedataService\Struct\SearchPersonPictureDtoList
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
    /**
     * Get hiskeyId value
     * @return int
     */
    public function getHiskeyId(): int
    {
        return $this->hiskeyId;
    }
    /**
     * Set hiskeyId value
     * @param int $hiskeyId
     * @return \FGTCLB\HisClient\MimedataService\Struct\SearchPersonPictureDtoList
     */
    public function setHiskeyId(int $hiskeyId): self
    {
        // validation for constraint: int
        if (!is_null($hiskeyId) && !(is_int($hiskeyId) || ctype_digit($hiskeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hiskeyId, true), gettype($hiskeyId)), __LINE__);
        }
        $this->hiskeyId = $hiskeyId;
        
        return $this;
    }
}
