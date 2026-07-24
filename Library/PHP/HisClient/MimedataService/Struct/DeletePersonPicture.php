<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deletePersonPicture Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeletePersonPicture extends AbstractStructBase
{
    /**
     * The personId
     * Meta information extracted from the WSDL
     * - documentation: The owner of the mimedata. Caller must be authorized to VIEW main person data.
     * @var int
     */
    protected int $personId;
    /**
     * The mimedataId
     * Meta information extracted from the WSDL
     * - documentation: Mimedata to delete.
     * @var int
     */
    protected int $mimedataId;
    /**
     * Constructor method for deletePersonPicture
     * @uses DeletePersonPicture::setPersonId()
     * @uses DeletePersonPicture::setMimedataId()
     * @param int $personId
     * @param int $mimedataId
     */
    public function __construct(int $personId, int $mimedataId)
    {
        $this
            ->setPersonId($personId)
            ->setMimedataId($mimedataId);
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
     * @return \FGTCLB\HisClient\MimedataService\Struct\DeletePersonPicture
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
     * Get mimedataId value
     * @return int
     */
    public function getMimedataId(): int
    {
        return $this->mimedataId;
    }
    /**
     * Set mimedataId value
     * @param int $mimedataId
     * @return \FGTCLB\HisClient\MimedataService\Struct\DeletePersonPicture
     */
    public function setMimedataId(int $mimedataId): self
    {
        // validation for constraint: int
        if (!is_null($mimedataId) && !(is_int($mimedataId) || ctype_digit($mimedataId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mimedataId, true), gettype($mimedataId)), __LINE__);
        }
        $this->mimedataId = $mimedataId;
        
        return $this;
    }
}
