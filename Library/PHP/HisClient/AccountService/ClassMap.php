<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'Account' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\Account',
            'CompleteAccount60' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\CompleteAccount60',
            'NewAccount' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\NewAccount',
            'CompleteAccount' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\CompleteAccount',
            'Account201712' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\Account201712',
            'AccountInfo' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\AccountInfo',
            'changePasswordForAccount' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\ChangePasswordForAccount',
            'changePasswordForAccountResponse' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\ChangePasswordForAccountResponse',
            'createAccount' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\CreateAccount',
            'createAccountResponse' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\CreateAccountResponse',
            'createNewAccountForPerson' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\CreateNewAccountForPerson',
            'createNewAccountForPersonResponse' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\CreateNewAccountForPersonResponse',
            'createNewBlockedAccountForPerson' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\CreateNewBlockedAccountForPerson',
            'createNewBlockedAccountForPersonResponse' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\CreateNewBlockedAccountForPersonResponse',
            'deleteAccount' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\DeleteAccount',
            'deleteAccountResponse' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\DeleteAccountResponse',
            'findAccount' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\FindAccount',
            'findAccountResponse' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\FindAccountResponse',
            'readAccount' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\ReadAccount',
            'readAccountResponse' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\ReadAccountResponse',
            'readAccount201712' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\ReadAccount201712',
            'readAccount201712Response' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\ReadAccount201712Response',
            'saveAccount' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\SaveAccount',
            'saveAccountResponse' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\SaveAccountResponse',
            'searchAccountForPerson' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\SearchAccountForPerson',
            'searchAccountForPersonResponse' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\SearchAccountForPersonResponse',
            'searchAccountForPerson61' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\SearchAccountForPerson61',
            'searchAccountForPerson61Response' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\SearchAccountForPerson61Response',
            'updateAccount' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\UpdateAccount',
            'updateAccountResponse' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\UpdateAccountResponse',
            'updateAccount201712' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\UpdateAccount201712',
            'updateAccount201712Response' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\UpdateAccount201712Response',
            'findAccountResultType' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\FindAccountResultType',
            'completeAccountsType' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\CompleteAccountsType',
            'savedAccountsType' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\SavedAccountsType',
            'completeAccounts60Type' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\CompleteAccounts60Type',
            'ServiceFault' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\ServiceFault',
            'ValidationMessage' => '\\FGTCLB\\HisClient\\AccountService\\Struct\\ValidationMessage',
        ];
    }
}
