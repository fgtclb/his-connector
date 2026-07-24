<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonIdentifier Struct
 * Meta information extracted from the WSDL
 * - documentation: Details of a personal identifikator
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PersonIdentifier extends AbstractStructBase
{
    /**
     * The identifier
     * @var string
     */
    protected string $identifier;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: See KeyvalueService with valueClass = 'PersonIdentifierTypeValue'. Examples: nkb-bPK2, nkb-postkorb-handle, esi, hisinone-muster-h1pre, mbrwallet, orcid
     * @var string
     */
    protected string $type;
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
     * The issuer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $issuer = null;
    /**
     * The issuerUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $issuerUrl = null;
    /**
     * Constructor method for PersonIdentifier
     * @uses PersonIdentifier::setIdentifier()
     * @uses PersonIdentifier::setType()
     * @uses PersonIdentifier::setValidFrom()
     * @uses PersonIdentifier::setValidTo()
     * @uses PersonIdentifier::setIssuer()
     * @uses PersonIdentifier::setIssuerUrl()
     * @param string $identifier
     * @param string $type
     * @param string $validFrom
     * @param string $validTo
     * @param string $issuer
     * @param string $issuerUrl
     */
    public function __construct(string $identifier, string $type, ?string $validFrom = null, ?string $validTo = null, ?string $issuer = null, ?string $issuerUrl = null)
    {
        $this
            ->setIdentifier($identifier)
            ->setType($type)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setIssuer($issuer)
            ->setIssuerUrl($issuerUrl);
    }
    /**
     * Get identifier value
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }
    /**
     * Set identifier value
     * @param string $identifier
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier
     */
    public function setIdentifier(string $identifier): self
    {
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifier, true), gettype($identifier)), __LINE__);
        }
        $this->identifier = $identifier;
        
        return $this;
    }
    /**
     * Get type value
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier
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
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier
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
     * Get issuer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIssuer(): ?string
    {
        return $this->issuer ?? null;
    }
    /**
     * Set issuer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $issuer
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier
     */
    public function setIssuer(?string $issuer = null): self
    {
        // validation for constraint: string
        if (!is_null($issuer) && !is_string($issuer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuer, true), gettype($issuer)), __LINE__);
        }
        if (is_null($issuer) || (is_array($issuer) && empty($issuer))) {
            unset($this->issuer);
        } else {
            $this->issuer = $issuer;
        }
        
        return $this;
    }
    /**
     * Get issuerUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIssuerUrl(): ?string
    {
        return $this->issuerUrl ?? null;
    }
    /**
     * Set issuerUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $issuerUrl
     * @return \FGTCLB\HisClient\PersonService\Struct\PersonIdentifier
     */
    public function setIssuerUrl(?string $issuerUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($issuerUrl) && !is_string($issuerUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuerUrl, true), gettype($issuerUrl)), __LINE__);
        }
        if (is_null($issuerUrl) || (is_array($issuerUrl) && empty($issuerUrl))) {
            unset($this->issuerUrl);
        } else {
            $this->issuerUrl = $issuerUrl;
        }
        
        return $this;
    }
}
