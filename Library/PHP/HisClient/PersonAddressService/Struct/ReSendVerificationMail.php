<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reSendVerificationMail Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReSendVerificationMail extends AbstractStructBase
{
    /**
     * The addressId
     * Meta information extracted from the WSDL
     * - documentation: Email address to be verified
     * @var int
     */
    protected int $addressId;
    /**
     * The timeout
     * Meta information extracted from the WSDL
     * - documentation: the validity of verification e-mail (in days). Defaults to null, relying on global setting core.psv.email.verification.staff_timeout
     * - nillable: true
     * @var int|null
     */
    protected ?int $timeout = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - documentation: language of verification e-mail. Defaults to (1) user locale or (2) application locale
     * - nillable: true
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * Constructor method for reSendVerificationMail
     * @uses ReSendVerificationMail::setAddressId()
     * @uses ReSendVerificationMail::setTimeout()
     * @uses ReSendVerificationMail::setLanguage()
     * @param int $addressId
     * @param int $timeout
     * @param string $language
     */
    public function __construct(int $addressId, ?int $timeout = null, ?string $language = null)
    {
        $this
            ->setAddressId($addressId)
            ->setTimeout($timeout)
            ->setLanguage($language);
    }
    /**
     * Get addressId value
     * @return int
     */
    public function getAddressId(): int
    {
        return $this->addressId;
    }
    /**
     * Set addressId value
     * @param int $addressId
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReSendVerificationMail
     */
    public function setAddressId(int $addressId): self
    {
        // validation for constraint: int
        if (!is_null($addressId) && !(is_int($addressId) || ctype_digit($addressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressId, true), gettype($addressId)), __LINE__);
        }
        $this->addressId = $addressId;
        
        return $this;
    }
    /**
     * Get timeout value
     * @return int|null
     */
    public function getTimeout(): ?int
    {
        return $this->timeout;
    }
    /**
     * Set timeout value
     * @param int $timeout
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReSendVerificationMail
     */
    public function setTimeout(?int $timeout = null): self
    {
        // validation for constraint: int
        if (!is_null($timeout) && !(is_int($timeout) || ctype_digit($timeout))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeout, true), gettype($timeout)), __LINE__);
        }
        $this->timeout = $timeout;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReSendVerificationMail
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
}
