<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Orgrole Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Orgrole extends AbstractStructBase
{
    /**
     * The orgunitLid
     * Meta information extracted from the WSDL
     * - documentation: LID of the organizational unit. Note that this is _not_ the ID of the current version.
     * @var int
     */
    protected int $orgunitLid;
    /**
     * The role
     * Meta information extracted from the WSDL
     * - documentation: Uniquename of the role definition. See KeyvalueService with valueClass = 'OrgroleValue'. Examples: tfaRequest, account_validity_extender, admin, key_tab_admin, alumni_admin, alumni_candidate, alumni_partner_candidate,
     * alumni_manager_department, alumni_prospect, alumni_manager
     * @var string
     */
    protected string $role;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - documentation: First day of validity.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for Orgrole
     * @uses Orgrole::setOrgunitLid()
     * @uses Orgrole::setRole()
     * @uses Orgrole::setValidFrom()
     * @uses Orgrole::setValidTo()
     * @param int $orgunitLid
     * @param string $role
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(int $orgunitLid, string $role, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setOrgunitLid($orgunitLid)
            ->setRole($role)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get orgunitLid value
     * @return int
     */
    public function getOrgunitLid(): int
    {
        return $this->orgunitLid;
    }
    /**
     * Set orgunitLid value
     * @param int $orgunitLid
     * @return \FGTCLB\HisClient\PersonService\Struct\Orgrole
     */
    public function setOrgunitLid(int $orgunitLid): self
    {
        // validation for constraint: int
        if (!is_null($orgunitLid) && !(is_int($orgunitLid) || ctype_digit($orgunitLid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgunitLid, true), gettype($orgunitLid)), __LINE__);
        }
        $this->orgunitLid = $orgunitLid;
        
        return $this;
    }
    /**
     * Get role value
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * Set role value
     * @param string $role
     * @return \FGTCLB\HisClient\PersonService\Struct\Orgrole
     */
    public function setRole(string $role): self
    {
        // validation for constraint: string
        if (!is_null($role) && !is_string($role)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($role, true), gettype($role)), __LINE__);
        }
        $this->role = $role;
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Orgrole
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
     * @return \FGTCLB\HisClient\PersonService\Struct\Orgrole
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
}
