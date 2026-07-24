<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findAccountResponse Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FindAccountResponse extends AbstractStructBase
{
    /**
     * The findAccountResult
     * @var \FGTCLB\HisClient\AccountService\Struct\FindAccountResultType
     */
    protected \FGTCLB\HisClient\AccountService\Struct\FindAccountResultType $findAccountResult;
    /**
     * Constructor method for findAccountResponse
     * @uses FindAccountResponse::setFindAccountResult()
     * @param \FGTCLB\HisClient\AccountService\Struct\FindAccountResultType $findAccountResult
     */
    public function __construct(\FGTCLB\HisClient\AccountService\Struct\FindAccountResultType $findAccountResult)
    {
        $this
            ->setFindAccountResult($findAccountResult);
    }
    /**
     * Get findAccountResult value
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccountResultType
     */
    public function getFindAccountResult(): \FGTCLB\HisClient\AccountService\Struct\FindAccountResultType
    {
        return $this->findAccountResult;
    }
    /**
     * Set findAccountResult value
     * @param \FGTCLB\HisClient\AccountService\Struct\FindAccountResultType $findAccountResult
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccountResponse
     */
    public function setFindAccountResult(\FGTCLB\HisClient\AccountService\Struct\FindAccountResultType $findAccountResult): self
    {
        $this->findAccountResult = $findAccountResult;
        
        return $this;
    }
}
