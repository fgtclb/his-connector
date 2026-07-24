<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for comparePostAddressExcludeAddressTag Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ComparePostAddressExcludeAddressTag extends AbstractStructBase
{
    /**
     * The postAddressOne
     * @var \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode
     */
    protected \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $postAddressOne;
    /**
     * The postAddressTwo
     * @var \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode
     */
    protected \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $postAddressTwo;
    /**
     * Constructor method for comparePostAddressExcludeAddressTag
     * @uses ComparePostAddressExcludeAddressTag::setPostAddressOne()
     * @uses ComparePostAddressExcludeAddressTag::setPostAddressTwo()
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $postAddressOne
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $postAddressTwo
     */
    public function __construct(\FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $postAddressOne, \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $postAddressTwo)
    {
        $this
            ->setPostAddressOne($postAddressOne)
            ->setPostAddressTwo($postAddressTwo);
    }
    /**
     * Get postAddressOne value
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode
     */
    public function getPostAddressOne(): \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode
    {
        return $this->postAddressOne;
    }
    /**
     * Set postAddressOne value
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $postAddressOne
     * @return \FGTCLB\HisClient\AddressService\Struct\ComparePostAddressExcludeAddressTag
     */
    public function setPostAddressOne(\FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $postAddressOne): self
    {
        $this->postAddressOne = $postAddressOne;
        
        return $this;
    }
    /**
     * Get postAddressTwo value
     * @return \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode
     */
    public function getPostAddressTwo(): \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode
    {
        return $this->postAddressTwo;
    }
    /**
     * Set postAddressTwo value
     * @param \FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $postAddressTwo
     * @return \FGTCLB\HisClient\AddressService\Struct\ComparePostAddressExcludeAddressTag
     */
    public function setPostAddressTwo(\FGTCLB\HisClient\AddressService\Struct\PostAddressWithNillablePostcode $postAddressTwo): self
    {
        $this->postAddressTwo = $postAddressTwo;
        
        return $this;
    }
}
