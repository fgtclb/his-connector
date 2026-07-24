<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Struct;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchAccountForPerson61Response Struct
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAccountForPerson61Response extends AbstractStructBase
{
    /**
     * The completeAccounts60
     * Meta information extracted from the WSDL
     * - documentation: A list of accounts.
     * @var \FGTCLB\HisClient\AccountService\Struct\CompleteAccounts60Type
     */
    protected \FGTCLB\HisClient\AccountService\Struct\CompleteAccounts60Type $completeAccounts60;
    /**
     * Constructor method for searchAccountForPerson61Response
     * @uses SearchAccountForPerson61Response::setCompleteAccounts60()
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccounts60Type $completeAccounts60
     */
    public function __construct(\FGTCLB\HisClient\AccountService\Struct\CompleteAccounts60Type $completeAccounts60)
    {
        $this
            ->setCompleteAccounts60($completeAccounts60);
    }
    /**
     * Get completeAccounts60 value
     * @return \FGTCLB\HisClient\AccountService\Struct\CompleteAccounts60Type
     */
    public function getCompleteAccounts60(): \FGTCLB\HisClient\AccountService\Struct\CompleteAccounts60Type
    {
        return $this->completeAccounts60;
    }
    /**
     * Set completeAccounts60 value
     * @param \FGTCLB\HisClient\AccountService\Struct\CompleteAccounts60Type $completeAccounts60
     * @return \FGTCLB\HisClient\AccountService\Struct\SearchAccountForPerson61Response
     */
    public function setCompleteAccounts60(\FGTCLB\HisClient\AccountService\Struct\CompleteAccounts60Type $completeAccounts60): self
    {
        $this->completeAccounts60 = $completeAccounts60;
        
        return $this;
    }
}
