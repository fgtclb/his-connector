<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Building202006 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Building202006 extends AbstractStructBase
{
    /**
     * The openinghours
     * @var \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType
     */
    protected \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType $openinghours;
    /**
     * The objGuid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $objGuid = null;
    /**
     * The campusId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $campusId = null;
    /**
     * The inventorynumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $inventorynumber = null;
    /**
     * The longitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $longitude = null;
    /**
     * The latitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $latitude = null;
    /**
     * The shorttext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $shorttext = null;
    /**
     * The defaulttext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $defaulttext = null;
    /**
     * The longtext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $longtext = null;
    /**
     * The uniquename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $uniquename = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * Constructor method for Building202006
     * @uses Building202006::setOpeninghours()
     * @uses Building202006::setObjGuid()
     * @uses Building202006::setCampusId()
     * @uses Building202006::setInventorynumber()
     * @uses Building202006::setLongitude()
     * @uses Building202006::setLatitude()
     * @uses Building202006::setShorttext()
     * @uses Building202006::setDefaulttext()
     * @uses Building202006::setLongtext()
     * @uses Building202006::setUniquename()
     * @uses Building202006::setValidFrom()
     * @uses Building202006::setValidTo()
     * @uses Building202006::setId()
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType $openinghours
     * @param string $objGuid
     * @param int $campusId
     * @param string $inventorynumber
     * @param string $longitude
     * @param string $latitude
     * @param string $shorttext
     * @param string $defaulttext
     * @param string $longtext
     * @param string $uniquename
     * @param string $validFrom
     * @param string $validTo
     * @param int $id
     */
    public function __construct(\FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType $openinghours, ?string $objGuid = null, ?int $campusId = null, ?string $inventorynumber = null, ?string $longitude = null, ?string $latitude = null, ?string $shorttext = null, ?string $defaulttext = null, ?string $longtext = null, ?string $uniquename = null, ?string $validFrom = null, ?string $validTo = null, ?int $id = null)
    {
        $this
            ->setOpeninghours($openinghours)
            ->setObjGuid($objGuid)
            ->setCampusId($campusId)
            ->setInventorynumber($inventorynumber)
            ->setLongitude($longitude)
            ->setLatitude($latitude)
            ->setShorttext($shorttext)
            ->setDefaulttext($defaulttext)
            ->setLongtext($longtext)
            ->setUniquename($uniquename)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setId($id);
    }
    /**
     * Get openinghours value
     * @return \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType
     */
    public function getOpeninghours(): \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType
    {
        return $this->openinghours;
    }
    /**
     * Set openinghours value
     * @param \FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType $openinghours
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setOpeninghours(\FGTCLB\HisClient\FacilityService\Struct\OpeninghoursType $openinghours): self
    {
        $this->openinghours = $openinghours;
        
        return $this;
    }
    /**
     * Get objGuid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getObjGuid(): ?string
    {
        return $this->objGuid ?? null;
    }
    /**
     * Set objGuid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $objGuid
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setObjGuid(?string $objGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($objGuid) && !is_string($objGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objGuid, true), gettype($objGuid)), __LINE__);
        }
        if (is_null($objGuid) || (is_array($objGuid) && empty($objGuid))) {
            unset($this->objGuid);
        } else {
            $this->objGuid = $objGuid;
        }
        
        return $this;
    }
    /**
     * Get campusId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCampusId(): ?int
    {
        return $this->campusId ?? null;
    }
    /**
     * Set campusId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $campusId
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setCampusId(?int $campusId = null): self
    {
        // validation for constraint: int
        if (!is_null($campusId) && !(is_int($campusId) || ctype_digit($campusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campusId, true), gettype($campusId)), __LINE__);
        }
        if (is_null($campusId) || (is_array($campusId) && empty($campusId))) {
            unset($this->campusId);
        } else {
            $this->campusId = $campusId;
        }
        
        return $this;
    }
    /**
     * Get inventorynumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInventorynumber(): ?string
    {
        return $this->inventorynumber ?? null;
    }
    /**
     * Set inventorynumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inventorynumber
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setInventorynumber(?string $inventorynumber = null): self
    {
        // validation for constraint: string
        if (!is_null($inventorynumber) && !is_string($inventorynumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inventorynumber, true), gettype($inventorynumber)), __LINE__);
        }
        if (is_null($inventorynumber) || (is_array($inventorynumber) && empty($inventorynumber))) {
            unset($this->inventorynumber);
        } else {
            $this->inventorynumber = $inventorynumber;
        }
        
        return $this;
    }
    /**
     * Get longitude value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLongitude(): ?string
    {
        return $this->longitude ?? null;
    }
    /**
     * Set longitude value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $longitude
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setLongitude(?string $longitude = null): self
    {
        // validation for constraint: string
        if (!is_null($longitude) && !is_string($longitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        if (is_null($longitude) || (is_array($longitude) && empty($longitude))) {
            unset($this->longitude);
        } else {
            $this->longitude = $longitude;
        }
        
        return $this;
    }
    /**
     * Get latitude value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLatitude(): ?string
    {
        return $this->latitude ?? null;
    }
    /**
     * Set latitude value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $latitude
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setLatitude(?string $latitude = null): self
    {
        // validation for constraint: string
        if (!is_null($latitude) && !is_string($latitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        if (is_null($latitude) || (is_array($latitude) && empty($latitude))) {
            unset($this->latitude);
        } else {
            $this->latitude = $latitude;
        }
        
        return $this;
    }
    /**
     * Get shorttext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShorttext(): ?string
    {
        return $this->shorttext ?? null;
    }
    /**
     * Set shorttext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shorttext
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setShorttext(?string $shorttext = null): self
    {
        // validation for constraint: string
        if (!is_null($shorttext) && !is_string($shorttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shorttext, true), gettype($shorttext)), __LINE__);
        }
        if (is_null($shorttext) || (is_array($shorttext) && empty($shorttext))) {
            unset($this->shorttext);
        } else {
            $this->shorttext = $shorttext;
        }
        
        return $this;
    }
    /**
     * Get defaulttext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefaulttext(): ?string
    {
        return $this->defaulttext ?? null;
    }
    /**
     * Set defaulttext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $defaulttext
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setDefaulttext(?string $defaulttext = null): self
    {
        // validation for constraint: string
        if (!is_null($defaulttext) && !is_string($defaulttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaulttext, true), gettype($defaulttext)), __LINE__);
        }
        if (is_null($defaulttext) || (is_array($defaulttext) && empty($defaulttext))) {
            unset($this->defaulttext);
        } else {
            $this->defaulttext = $defaulttext;
        }
        
        return $this;
    }
    /**
     * Get longtext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLongtext(): ?string
    {
        return $this->longtext ?? null;
    }
    /**
     * Set longtext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $longtext
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setLongtext(?string $longtext = null): self
    {
        // validation for constraint: string
        if (!is_null($longtext) && !is_string($longtext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longtext, true), gettype($longtext)), __LINE__);
        }
        if (is_null($longtext) || (is_array($longtext) && empty($longtext))) {
            unset($this->longtext);
        } else {
            $this->longtext = $longtext;
        }
        
        return $this;
    }
    /**
     * Get uniquename value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUniquename(): ?string
    {
        return $this->uniquename ?? null;
    }
    /**
     * Set uniquename value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $uniquename
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setUniquename(?string $uniquename = null): self
    {
        // validation for constraint: string
        if (!is_null($uniquename) && !is_string($uniquename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniquename, true), gettype($uniquename)), __LINE__);
        }
        if (is_null($uniquename) || (is_array($uniquename) && empty($uniquename))) {
            unset($this->uniquename);
        } else {
            $this->uniquename = $uniquename;
        }
        
        return $this;
    }
    /**
     * Get validFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom ?? null;
    }
    /**
     * Set validFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validFrom
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        if (is_null($validFrom) || (is_array($validFrom) && empty($validFrom))) {
            unset($this->validFrom);
        } else {
            $this->validFrom = $validFrom;
        }
        
        return $this;
    }
    /**
     * Get validTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo ?? null;
    }
    /**
     * Set validTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validTo
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        if (is_null($validTo) || (is_array($validTo) && empty($validTo))) {
            unset($this->validTo);
        } else {
            $this->validTo = $validTo;
        }
        
        return $this;
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id ?? null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $id
     * @return \FGTCLB\HisClient\FacilityService\Struct\Building202006
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        
        return $this;
    }
}
