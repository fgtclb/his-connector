<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saveEAddresses201906 Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveEAddresses201906 extends AbstractStructBase
{
    /**
     * The eAddresses
     * @var \FGTCLB\HisClient\AddressService\Struct\EAddressesType
     */
    protected \FGTCLB\HisClient\AddressService\Struct\EAddressesType $eAddresses;
    /**
     * The id
     * @var int
     */
    protected int $id;
    /**
     * The objekttype
     * Meta information extracted from the WSDL
     * - documentation: Objecttype is one of 'Person', 'Orgunit', 'Room', 'Building'.
     * @var string
     */
    protected string $objekttype;
    /**
     * The notificationCategory
     * Meta information extracted from the WSDL
     * - documentation: This is the initial notification category of this address. More may be added with 'assignAddressToNotification'. See KeyvalueService with valueClass = 'NotificationCategoryValue'. Examples: COMA, ALU, ALUG, ALUK, ALUR, CA, COM,
     * OFFICE, UP, DOSV
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $notificationCategory = null;
    /**
     * Constructor method for saveEAddresses201906
     * @uses SaveEAddresses201906::setEAddresses()
     * @uses SaveEAddresses201906::setId()
     * @uses SaveEAddresses201906::setObjekttype()
     * @uses SaveEAddresses201906::setNotificationCategory()
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddressesType $eAddresses
     * @param int $id
     * @param string $objekttype
     * @param string $notificationCategory
     */
    public function __construct(\FGTCLB\HisClient\AddressService\Struct\EAddressesType $eAddresses, int $id, string $objekttype, ?string $notificationCategory = null)
    {
        $this
            ->setEAddresses($eAddresses)
            ->setId($id)
            ->setObjekttype($objekttype)
            ->setNotificationCategory($notificationCategory);
    }
    /**
     * Get eAddresses value
     * @return \FGTCLB\HisClient\AddressService\Struct\EAddressesType
     */
    public function getEAddresses(): \FGTCLB\HisClient\AddressService\Struct\EAddressesType
    {
        return $this->eAddresses;
    }
    /**
     * Set eAddresses value
     * @param \FGTCLB\HisClient\AddressService\Struct\EAddressesType $eAddresses
     * @return \FGTCLB\HisClient\AddressService\Struct\SaveEAddresses201906
     */
    public function setEAddresses(\FGTCLB\HisClient\AddressService\Struct\EAddressesType $eAddresses): self
    {
        $this->eAddresses = $eAddresses;
        
        return $this;
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
     * @return \FGTCLB\HisClient\AddressService\Struct\SaveEAddresses201906
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
     * Get objekttype value
     * @return string
     */
    public function getObjekttype(): string
    {
        return $this->objekttype;
    }
    /**
     * Set objekttype value
     * @param string $objekttype
     * @return \FGTCLB\HisClient\AddressService\Struct\SaveEAddresses201906
     */
    public function setObjekttype(string $objekttype): self
    {
        // validation for constraint: string
        if (!is_null($objekttype) && !is_string($objekttype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objekttype, true), gettype($objekttype)), __LINE__);
        }
        $this->objekttype = $objekttype;
        
        return $this;
    }
    /**
     * Get notificationCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNotificationCategory(): ?string
    {
        return $this->notificationCategory ?? null;
    }
    /**
     * Set notificationCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $notificationCategory
     * @return \FGTCLB\HisClient\AddressService\Struct\SaveEAddresses201906
     */
    public function setNotificationCategory(?string $notificationCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($notificationCategory) && !is_string($notificationCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationCategory, true), gettype($notificationCategory)), __LINE__);
        }
        if (is_null($notificationCategory) || (is_array($notificationCategory) && empty($notificationCategory))) {
            unset($this->notificationCategory);
        } else {
            $this->notificationCategory = $notificationCategory;
        }
        
        return $this;
    }
}
