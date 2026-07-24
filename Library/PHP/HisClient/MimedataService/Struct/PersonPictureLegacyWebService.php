<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonPictureLegacyWebService Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonPictureLegacyWebService extends AbstractStructBase
{
    /**
     * The mimecontextId
     * @var int
     */
    protected int $mimecontextId;
    /**
     * The mimedataId
     * @var int
     */
    protected int $mimedataId;
    /**
     * The personId
     * @var int
     */
    protected int $personId;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The objGuid
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $objGuid = null;
    /**
     * Constructor method for PersonPictureLegacyWebService
     * @uses PersonPictureLegacyWebService::setMimecontextId()
     * @uses PersonPictureLegacyWebService::setMimedataId()
     * @uses PersonPictureLegacyWebService::setPersonId()
     * @uses PersonPictureLegacyWebService::setId()
     * @uses PersonPictureLegacyWebService::setObjGuid()
     * @param int $mimecontextId
     * @param int $mimedataId
     * @param int $personId
     * @param int $id
     * @param string $objGuid
     */
    public function __construct(int $mimecontextId, int $mimedataId, int $personId, ?int $id = null, ?string $objGuid = null)
    {
        $this
            ->setMimecontextId($mimecontextId)
            ->setMimedataId($mimedataId)
            ->setPersonId($personId)
            ->setId($id)
            ->setObjGuid($objGuid);
    }
    /**
     * Get mimecontextId value
     * @return int
     */
    public function getMimecontextId(): int
    {
        return $this->mimecontextId;
    }
    /**
     * Set mimecontextId value
     * @param int $mimecontextId
     * @return \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService
     */
    public function setMimecontextId(int $mimecontextId): self
    {
        // validation for constraint: int
        if (!is_null($mimecontextId) && !(is_int($mimecontextId) || ctype_digit($mimecontextId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mimecontextId, true), gettype($mimecontextId)), __LINE__);
        }
        $this->mimecontextId = $mimecontextId;
        
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
     * @return \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService
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
     * @return \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService
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
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get objGuid value
     * @return string|null
     */
    public function getObjGuid(): ?string
    {
        return $this->objGuid;
    }
    /**
     * Set objGuid value
     * @param string $objGuid
     * @return \FGTCLB\HisClient\MimedataService\Struct\PersonPictureLegacyWebService
     */
    public function setObjGuid(?string $objGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($objGuid) && !is_string($objGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objGuid, true), gettype($objGuid)), __LINE__);
        }
        $this->objGuid = $objGuid;
        
        return $this;
    }
}
