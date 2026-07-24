<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FieldOfStudyValue Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FieldOfStudyValue extends AbstractKeyValue
{
    /**
     * The astatGuestAuditor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $astatGuestAuditor = null;
    /**
     * The parentId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $parentId = null;
    /**
     * Constructor method for FieldOfStudyValue
     * @uses FieldOfStudyValue::setAstatGuestAuditor()
     * @uses FieldOfStudyValue::setParentId()
     * @param string $astatGuestAuditor
     * @param int $parentId
     */
    public function __construct(?string $astatGuestAuditor = null, ?int $parentId = null)
    {
        $this
            ->setAstatGuestAuditor($astatGuestAuditor)
            ->setParentId($parentId);
    }
    /**
     * Get astatGuestAuditor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAstatGuestAuditor(): ?string
    {
        return $this->astatGuestAuditor ?? null;
    }
    /**
     * Set astatGuestAuditor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $astatGuestAuditor
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\FieldOfStudyValue
     */
    public function setAstatGuestAuditor(?string $astatGuestAuditor = null): self
    {
        // validation for constraint: string
        if (!is_null($astatGuestAuditor) && !is_string($astatGuestAuditor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($astatGuestAuditor, true), gettype($astatGuestAuditor)), __LINE__);
        }
        if (is_null($astatGuestAuditor) || (is_array($astatGuestAuditor) && empty($astatGuestAuditor))) {
            unset($this->astatGuestAuditor);
        } else {
            $this->astatGuestAuditor = $astatGuestAuditor;
        }
        
        return $this;
    }
    /**
     * Get parentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId ?? null;
    }
    /**
     * Set parentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $parentId
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\FieldOfStudyValue
     */
    public function setParentId(?int $parentId = null): self
    {
        // validation for constraint: int
        if (!is_null($parentId) && !(is_int($parentId) || ctype_digit($parentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        if (is_null($parentId) || (is_array($parentId) && empty($parentId))) {
            unset($this->parentId);
        } else {
            $this->parentId = $parentId;
        }
        
        return $this;
    }
}
