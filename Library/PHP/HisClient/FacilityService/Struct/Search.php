<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for search Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Search extends AbstractStructBase
{
    /**
     * The dayOfWeek
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $dayOfWeek = null;
    /**
     * The starttime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $starttime = null;
    /**
     * The endtime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $endtime = null;
    /**
     * The rhythmus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $rhythmus = null;
    /**
     * The startdate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $startdate = null;
    /**
     * The enddate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $enddate = null;
    /**
     * The kurzbezeichnung
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $kurzbezeichnung = null;
    /**
     * The defaulttext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $defaulttext = null;
    /**
     * The langbezeichnung
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $langbezeichnung = null;
    /**
     * The roomuse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $roomuse = null;
    /**
     * The raumaustattung
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $raumaustattung = null;
    /**
     * The zugEinr
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $zugEinr = null;
    /**
     * The campus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $campus = null;
    /**
     * The gebaeude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $gebaeude = null;
    /**
     * The floorId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $floorId = null;
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
     * The centralised
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $centralised = null;
    /**
     * Constructor method for search
     * @uses Search::setDayOfWeek()
     * @uses Search::setStarttime()
     * @uses Search::setEndtime()
     * @uses Search::setRhythmus()
     * @uses Search::setStartdate()
     * @uses Search::setEnddate()
     * @uses Search::setKurzbezeichnung()
     * @uses Search::setDefaulttext()
     * @uses Search::setLangbezeichnung()
     * @uses Search::setRoomuse()
     * @uses Search::setRaumaustattung()
     * @uses Search::setZugEinr()
     * @uses Search::setCampus()
     * @uses Search::setGebaeude()
     * @uses Search::setFloorId()
     * @uses Search::setValidFrom()
     * @uses Search::setValidTo()
     * @uses Search::setCentralised()
     * @param string $dayOfWeek
     * @param string $starttime
     * @param string $endtime
     * @param string $rhythmus
     * @param string $startdate
     * @param string $enddate
     * @param string $kurzbezeichnung
     * @param string $defaulttext
     * @param string $langbezeichnung
     * @param string $roomuse
     * @param string $raumaustattung
     * @param string $zugEinr
     * @param string $campus
     * @param string $gebaeude
     * @param string $floorId
     * @param string $validFrom
     * @param string $validTo
     * @param string $centralised
     */
    public function __construct(?string $dayOfWeek = null, ?string $starttime = null, ?string $endtime = null, ?string $rhythmus = null, ?string $startdate = null, ?string $enddate = null, ?string $kurzbezeichnung = null, ?string $defaulttext = null, ?string $langbezeichnung = null, ?string $roomuse = null, ?string $raumaustattung = null, ?string $zugEinr = null, ?string $campus = null, ?string $gebaeude = null, ?string $floorId = null, ?string $validFrom = null, ?string $validTo = null, ?string $centralised = null)
    {
        $this
            ->setDayOfWeek($dayOfWeek)
            ->setStarttime($starttime)
            ->setEndtime($endtime)
            ->setRhythmus($rhythmus)
            ->setStartdate($startdate)
            ->setEnddate($enddate)
            ->setKurzbezeichnung($kurzbezeichnung)
            ->setDefaulttext($defaulttext)
            ->setLangbezeichnung($langbezeichnung)
            ->setRoomuse($roomuse)
            ->setRaumaustattung($raumaustattung)
            ->setZugEinr($zugEinr)
            ->setCampus($campus)
            ->setGebaeude($gebaeude)
            ->setFloorId($floorId)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setCentralised($centralised);
    }
    /**
     * Get dayOfWeek value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDayOfWeek(): ?string
    {
        return $this->dayOfWeek ?? null;
    }
    /**
     * Set dayOfWeek value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dayOfWeek
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setDayOfWeek(?string $dayOfWeek = null): self
    {
        // validation for constraint: string
        if (!is_null($dayOfWeek) && !is_string($dayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dayOfWeek, true), gettype($dayOfWeek)), __LINE__);
        }
        if (is_null($dayOfWeek) || (is_array($dayOfWeek) && empty($dayOfWeek))) {
            unset($this->dayOfWeek);
        } else {
            $this->dayOfWeek = $dayOfWeek;
        }
        
        return $this;
    }
    /**
     * Get starttime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStarttime(): ?string
    {
        return $this->starttime ?? null;
    }
    /**
     * Set starttime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $starttime
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setStarttime(?string $starttime = null): self
    {
        // validation for constraint: string
        if (!is_null($starttime) && !is_string($starttime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($starttime, true), gettype($starttime)), __LINE__);
        }
        if (is_null($starttime) || (is_array($starttime) && empty($starttime))) {
            unset($this->starttime);
        } else {
            $this->starttime = $starttime;
        }
        
        return $this;
    }
    /**
     * Get endtime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndtime(): ?string
    {
        return $this->endtime ?? null;
    }
    /**
     * Set endtime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endtime
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setEndtime(?string $endtime = null): self
    {
        // validation for constraint: string
        if (!is_null($endtime) && !is_string($endtime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endtime, true), gettype($endtime)), __LINE__);
        }
        if (is_null($endtime) || (is_array($endtime) && empty($endtime))) {
            unset($this->endtime);
        } else {
            $this->endtime = $endtime;
        }
        
        return $this;
    }
    /**
     * Get rhythmus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRhythmus(): ?string
    {
        return $this->rhythmus ?? null;
    }
    /**
     * Set rhythmus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $rhythmus
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setRhythmus(?string $rhythmus = null): self
    {
        // validation for constraint: string
        if (!is_null($rhythmus) && !is_string($rhythmus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rhythmus, true), gettype($rhythmus)), __LINE__);
        }
        if (is_null($rhythmus) || (is_array($rhythmus) && empty($rhythmus))) {
            unset($this->rhythmus);
        } else {
            $this->rhythmus = $rhythmus;
        }
        
        return $this;
    }
    /**
     * Get startdate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartdate(): ?string
    {
        return $this->startdate ?? null;
    }
    /**
     * Set startdate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startdate
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setStartdate(?string $startdate = null): self
    {
        // validation for constraint: string
        if (!is_null($startdate) && !is_string($startdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startdate, true), gettype($startdate)), __LINE__);
        }
        if (is_null($startdate) || (is_array($startdate) && empty($startdate))) {
            unset($this->startdate);
        } else {
            $this->startdate = $startdate;
        }
        
        return $this;
    }
    /**
     * Get enddate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEnddate(): ?string
    {
        return $this->enddate ?? null;
    }
    /**
     * Set enddate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $enddate
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setEnddate(?string $enddate = null): self
    {
        // validation for constraint: string
        if (!is_null($enddate) && !is_string($enddate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enddate, true), gettype($enddate)), __LINE__);
        }
        if (is_null($enddate) || (is_array($enddate) && empty($enddate))) {
            unset($this->enddate);
        } else {
            $this->enddate = $enddate;
        }
        
        return $this;
    }
    /**
     * Get kurzbezeichnung value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKurzbezeichnung(): ?string
    {
        return $this->kurzbezeichnung ?? null;
    }
    /**
     * Set kurzbezeichnung value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $kurzbezeichnung
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setKurzbezeichnung(?string $kurzbezeichnung = null): self
    {
        // validation for constraint: string
        if (!is_null($kurzbezeichnung) && !is_string($kurzbezeichnung)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kurzbezeichnung, true), gettype($kurzbezeichnung)), __LINE__);
        }
        if (is_null($kurzbezeichnung) || (is_array($kurzbezeichnung) && empty($kurzbezeichnung))) {
            unset($this->kurzbezeichnung);
        } else {
            $this->kurzbezeichnung = $kurzbezeichnung;
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
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
     * Get langbezeichnung value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLangbezeichnung(): ?string
    {
        return $this->langbezeichnung ?? null;
    }
    /**
     * Set langbezeichnung value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $langbezeichnung
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setLangbezeichnung(?string $langbezeichnung = null): self
    {
        // validation for constraint: string
        if (!is_null($langbezeichnung) && !is_string($langbezeichnung)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($langbezeichnung, true), gettype($langbezeichnung)), __LINE__);
        }
        if (is_null($langbezeichnung) || (is_array($langbezeichnung) && empty($langbezeichnung))) {
            unset($this->langbezeichnung);
        } else {
            $this->langbezeichnung = $langbezeichnung;
        }
        
        return $this;
    }
    /**
     * Get roomuse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRoomuse(): ?string
    {
        return $this->roomuse ?? null;
    }
    /**
     * Set roomuse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $roomuse
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setRoomuse(?string $roomuse = null): self
    {
        // validation for constraint: string
        if (!is_null($roomuse) && !is_string($roomuse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roomuse, true), gettype($roomuse)), __LINE__);
        }
        if (is_null($roomuse) || (is_array($roomuse) && empty($roomuse))) {
            unset($this->roomuse);
        } else {
            $this->roomuse = $roomuse;
        }
        
        return $this;
    }
    /**
     * Get raumaustattung value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRaumaustattung(): ?string
    {
        return $this->raumaustattung ?? null;
    }
    /**
     * Set raumaustattung value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $raumaustattung
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setRaumaustattung(?string $raumaustattung = null): self
    {
        // validation for constraint: string
        if (!is_null($raumaustattung) && !is_string($raumaustattung)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($raumaustattung, true), gettype($raumaustattung)), __LINE__);
        }
        if (is_null($raumaustattung) || (is_array($raumaustattung) && empty($raumaustattung))) {
            unset($this->raumaustattung);
        } else {
            $this->raumaustattung = $raumaustattung;
        }
        
        return $this;
    }
    /**
     * Get zugEinr value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getZugEinr(): ?string
    {
        return $this->zugEinr ?? null;
    }
    /**
     * Set zugEinr value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $zugEinr
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setZugEinr(?string $zugEinr = null): self
    {
        // validation for constraint: string
        if (!is_null($zugEinr) && !is_string($zugEinr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zugEinr, true), gettype($zugEinr)), __LINE__);
        }
        if (is_null($zugEinr) || (is_array($zugEinr) && empty($zugEinr))) {
            unset($this->zugEinr);
        } else {
            $this->zugEinr = $zugEinr;
        }
        
        return $this;
    }
    /**
     * Get campus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCampus(): ?string
    {
        return $this->campus ?? null;
    }
    /**
     * Set campus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $campus
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setCampus(?string $campus = null): self
    {
        // validation for constraint: string
        if (!is_null($campus) && !is_string($campus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campus, true), gettype($campus)), __LINE__);
        }
        if (is_null($campus) || (is_array($campus) && empty($campus))) {
            unset($this->campus);
        } else {
            $this->campus = $campus;
        }
        
        return $this;
    }
    /**
     * Get gebaeude value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGebaeude(): ?string
    {
        return $this->gebaeude ?? null;
    }
    /**
     * Set gebaeude value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $gebaeude
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setGebaeude(?string $gebaeude = null): self
    {
        // validation for constraint: string
        if (!is_null($gebaeude) && !is_string($gebaeude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gebaeude, true), gettype($gebaeude)), __LINE__);
        }
        if (is_null($gebaeude) || (is_array($gebaeude) && empty($gebaeude))) {
            unset($this->gebaeude);
        } else {
            $this->gebaeude = $gebaeude;
        }
        
        return $this;
    }
    /**
     * Get floorId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFloorId(): ?string
    {
        return $this->floorId ?? null;
    }
    /**
     * Set floorId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $floorId
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setFloorId(?string $floorId = null): self
    {
        // validation for constraint: string
        if (!is_null($floorId) && !is_string($floorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($floorId, true), gettype($floorId)), __LINE__);
        }
        if (is_null($floorId) || (is_array($floorId) && empty($floorId))) {
            unset($this->floorId);
        } else {
            $this->floorId = $floorId;
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
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
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
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
     * Get centralised value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCentralised(): ?string
    {
        return $this->centralised ?? null;
    }
    /**
     * Set centralised value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $centralised
     * @return \FGTCLB\HisClient\FacilityService\Struct\Search
     */
    public function setCentralised(?string $centralised = null): self
    {
        // validation for constraint: string
        if (!is_null($centralised) && !is_string($centralised)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centralised, true), gettype($centralised)), __LINE__);
        }
        if (is_null($centralised) || (is_array($centralised) && empty($centralised))) {
            unset($this->centralised);
        } else {
            $this->centralised = $centralised;
        }
        
        return $this;
    }
}
