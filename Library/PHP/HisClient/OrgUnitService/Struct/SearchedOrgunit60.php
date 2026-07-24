<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchedOrgunit60 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchedOrgunit60 extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    protected int $id;
    /**
     * The lid
     * @var int
     */
    protected int $lid;
    /**
     * The uniquename
     * @var string
     */
    protected string $uniquename;
    /**
     * The defaulttext
     * @var string
     */
    protected string $defaulttext;
    /**
     * The parentLid
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $parentLid = null;
    /**
     * Constructor method for SearchedOrgunit60
     * @uses SearchedOrgunit60::setId()
     * @uses SearchedOrgunit60::setLid()
     * @uses SearchedOrgunit60::setUniquename()
     * @uses SearchedOrgunit60::setDefaulttext()
     * @uses SearchedOrgunit60::setParentLid()
     * @param int $id
     * @param int $lid
     * @param string $uniquename
     * @param string $defaulttext
     * @param int $parentLid
     */
    public function __construct(int $id, int $lid, string $uniquename, string $defaulttext, ?int $parentLid = null)
    {
        $this
            ->setId($id)
            ->setLid($lid)
            ->setUniquename($uniquename)
            ->setDefaulttext($defaulttext)
            ->setParentLid($parentLid);
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
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60
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
     * Get lid value
     * @return int
     */
    public function getLid(): int
    {
        return $this->lid;
    }
    /**
     * Set lid value
     * @param int $lid
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60
     */
    public function setLid(int $lid): self
    {
        // validation for constraint: int
        if (!is_null($lid) && !(is_int($lid) || ctype_digit($lid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lid, true), gettype($lid)), __LINE__);
        }
        $this->lid = $lid;
        
        return $this;
    }
    /**
     * Get uniquename value
     * @return string
     */
    public function getUniquename(): string
    {
        return $this->uniquename;
    }
    /**
     * Set uniquename value
     * @param string $uniquename
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60
     */
    public function setUniquename(string $uniquename): self
    {
        // validation for constraint: string
        if (!is_null($uniquename) && !is_string($uniquename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniquename, true), gettype($uniquename)), __LINE__);
        }
        $this->uniquename = $uniquename;
        
        return $this;
    }
    /**
     * Get defaulttext value
     * @return string
     */
    public function getDefaulttext(): string
    {
        return $this->defaulttext;
    }
    /**
     * Set defaulttext value
     * @param string $defaulttext
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60
     */
    public function setDefaulttext(string $defaulttext): self
    {
        // validation for constraint: string
        if (!is_null($defaulttext) && !is_string($defaulttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaulttext, true), gettype($defaulttext)), __LINE__);
        }
        $this->defaulttext = $defaulttext;
        
        return $this;
    }
    /**
     * Get parentLid value
     * @return int|null
     */
    public function getParentLid(): ?int
    {
        return $this->parentLid;
    }
    /**
     * Set parentLid value
     * @param int $parentLid
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SearchedOrgunit60
     */
    public function setParentLid(?int $parentLid = null): self
    {
        // validation for constraint: int
        if (!is_null($parentLid) && !(is_int($parentLid) || ctype_digit($parentLid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentLid, true), gettype($parentLid)), __LINE__);
        }
        $this->parentLid = $parentLid;
        
        return $this;
    }
}
