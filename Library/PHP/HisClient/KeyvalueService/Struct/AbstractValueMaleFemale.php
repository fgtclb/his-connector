<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractValueMaleFemale Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class AbstractValueMaleFemale extends AbstractKeyValue
{
    /**
     * The shorttextFemale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $shorttextFemale = null;
    /**
     * The defaulttextFemale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $defaulttextFemale = null;
    /**
     * The longtextFemale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $longtextFemale = null;
    /**
     * Constructor method for AbstractValueMaleFemale
     * @uses AbstractValueMaleFemale::setShorttextFemale()
     * @uses AbstractValueMaleFemale::setDefaulttextFemale()
     * @uses AbstractValueMaleFemale::setLongtextFemale()
     * @param string $shorttextFemale
     * @param string $defaulttextFemale
     * @param string $longtextFemale
     */
    public function __construct(?string $shorttextFemale = null, ?string $defaulttextFemale = null, ?string $longtextFemale = null)
    {
        $this
            ->setShorttextFemale($shorttextFemale)
            ->setDefaulttextFemale($defaulttextFemale)
            ->setLongtextFemale($longtextFemale);
    }
    /**
     * Get shorttextFemale value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShorttextFemale(): ?string
    {
        return $this->shorttextFemale ?? null;
    }
    /**
     * Set shorttextFemale value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shorttextFemale
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\AbstractValueMaleFemale
     */
    public function setShorttextFemale(?string $shorttextFemale = null): self
    {
        // validation for constraint: string
        if (!is_null($shorttextFemale) && !is_string($shorttextFemale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shorttextFemale, true), gettype($shorttextFemale)), __LINE__);
        }
        if (is_null($shorttextFemale) || (is_array($shorttextFemale) && empty($shorttextFemale))) {
            unset($this->shorttextFemale);
        } else {
            $this->shorttextFemale = $shorttextFemale;
        }
        
        return $this;
    }
    /**
     * Get defaulttextFemale value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefaulttextFemale(): ?string
    {
        return $this->defaulttextFemale ?? null;
    }
    /**
     * Set defaulttextFemale value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $defaulttextFemale
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\AbstractValueMaleFemale
     */
    public function setDefaulttextFemale(?string $defaulttextFemale = null): self
    {
        // validation for constraint: string
        if (!is_null($defaulttextFemale) && !is_string($defaulttextFemale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaulttextFemale, true), gettype($defaulttextFemale)), __LINE__);
        }
        if (is_null($defaulttextFemale) || (is_array($defaulttextFemale) && empty($defaulttextFemale))) {
            unset($this->defaulttextFemale);
        } else {
            $this->defaulttextFemale = $defaulttextFemale;
        }
        
        return $this;
    }
    /**
     * Get longtextFemale value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLongtextFemale(): ?string
    {
        return $this->longtextFemale ?? null;
    }
    /**
     * Set longtextFemale value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $longtextFemale
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\AbstractValueMaleFemale
     */
    public function setLongtextFemale(?string $longtextFemale = null): self
    {
        // validation for constraint: string
        if (!is_null($longtextFemale) && !is_string($longtextFemale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longtextFemale, true), gettype($longtextFemale)), __LINE__);
        }
        if (is_null($longtextFemale) || (is_array($longtextFemale) && empty($longtextFemale))) {
            unset($this->longtextFemale);
        } else {
            $this->longtextFemale = $longtextFemale;
        }
        
        return $this;
    }
}
