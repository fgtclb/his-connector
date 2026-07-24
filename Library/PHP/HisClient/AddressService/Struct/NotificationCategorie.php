<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationCategorie Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class NotificationCategorie extends HiskeyValue
{
    /**
     * The objectLocale
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $objectLocale = null;
    /**
     * Constructor method for NotificationCategorie
     * @uses NotificationCategorie::setObjectLocale()
     * @param string $objectLocale
     */
    public function __construct(?string $objectLocale = null)
    {
        $this
            ->setObjectLocale($objectLocale);
    }
    /**
     * Get objectLocale value
     * @return string|null
     */
    public function getObjectLocale(): ?string
    {
        return $this->objectLocale;
    }
    /**
     * Set objectLocale value
     * @param string $objectLocale
     * @return \FGTCLB\HisClient\AddressService\Struct\NotificationCategorie
     */
    public function setObjectLocale(?string $objectLocale = null): self
    {
        // validation for constraint: string
        if (!is_null($objectLocale) && !is_string($objectLocale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectLocale, true), gettype($objectLocale)), __LINE__);
        }
        $this->objectLocale = $objectLocale;
        
        return $this;
    }
}
