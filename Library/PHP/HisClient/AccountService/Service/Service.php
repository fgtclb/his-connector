<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AccountService\Service;

use SoapFault;
use FGTCLB\HisClientFacade\Soap\AbstractSoapClient;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClient
{
    /**
     * Method to call the operation originally named changePasswordForAccount
     * Meta information extracted from the WSDL
     * - documentation: The password will be set for the account. Before saving, the password will be hashed and the accountAuth of the Account will be set to HASH. The marker 'isInitialPassword' will be set to 'false'. SECURED BY
     * [(cs.psv.person.EDIT_PERSON_ACCOUNT)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\ChangePasswordForAccount $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\ChangePasswordForAccountResponse|bool
     */
    public function changePasswordForAccount(\FGTCLB\HisClient\AccountService\Struct\ChangePasswordForAccount $parameters)
    {
        try {
            $this->setResult($resultChangePasswordForAccount = $this->getSoapClient()->__soapCall('changePasswordForAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultChangePasswordForAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createAccount
     * Meta information extracted from the WSDL
     * - documentation: Creates a new Account for a Person. The person is identified by its ID. If 'initialPassword' is true, the password of the Account will be saved as-is. Otherwise the password will be hashed by the algorithm configured in HISinOne.
     * Also, the accountauthId will be set to 'HASH' in this case. SECURED BY [(cs.psv.person.CREATE_PERSON_ACCOUNT or cs.psv.person.EDIT_PERSON_ACCOUNT)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\CreateAccount $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\CreateAccountResponse|bool
     */
    public function createAccount(\FGTCLB\HisClient\AccountService\Struct\CreateAccount $parameters)
    {
        try {
            $this->setResult($resultCreateAccount = $this->getSoapClient()->__soapCall('createAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createNewAccountForPerson
     * Meta information extracted from the WSDL
     * - documentation: Create new Account with username and password for Person with specified id. To enrich the account with more data, see the operations readAccount and updateAccount. SECURED BY [(cs.psv.person.CREATE_PERSON_ACCOUNT)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\CreateNewAccountForPerson $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\CreateNewAccountForPersonResponse|bool
     */
    public function createNewAccountForPerson(\FGTCLB\HisClient\AccountService\Struct\CreateNewAccountForPerson $parameters)
    {
        try {
            $this->setResult($resultCreateNewAccountForPerson = $this->getSoapClient()->__soapCall('createNewAccountForPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateNewAccountForPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createNewBlockedAccountForPerson
     * Meta information extracted from the WSDL
     * - documentation: Create new blocked Account with username and password for Person with specified id SECURED BY [(cs.psv.person.CREATE_PERSON_ACCOUNT)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\CreateNewBlockedAccountForPerson $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\CreateNewBlockedAccountForPersonResponse|bool
     */
    public function createNewBlockedAccountForPerson(\FGTCLB\HisClient\AccountService\Struct\CreateNewBlockedAccountForPerson $parameters)
    {
        try {
            $this->setResult($resultCreateNewBlockedAccountForPerson = $this->getSoapClient()->__soapCall('createNewBlockedAccountForPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateNewBlockedAccountForPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAccount
     * Meta information extracted from the WSDL
     * - documentation: Deletes an account. Marking the account as invalid is recommended instead, use updateAccount to do so. SECURED BY [(cs.psv.person.DELETE_PERSON_ACCOUNT or cs.psv.person.EDIT_PERSON_ACCOUNT)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\DeleteAccount $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\DeleteAccountResponse|bool
     */
    public function deleteAccount(\FGTCLB\HisClient\AccountService\Struct\DeleteAccount $parameters)
    {
        try {
            $this->setResult($resultDeleteAccount = $this->getSoapClient()->__soapCall('deleteAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findAccount
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.VIEW_PERSON_ACCOUNT or cs.psv.person.EDIT_PERSON_ACCOUNT)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\FindAccount $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\FindAccountResponse|bool
     */
    public function findAccount(\FGTCLB\HisClient\AccountService\Struct\FindAccount $parameters)
    {
        try {
            $this->setResult($resultFindAccount = $this->getSoapClient()->__soapCall('findAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAccount
     * Meta information extracted from the WSDL
     * - documentation: Reads an account. Returns nil if no account exists with given ID. SECURED BY [(cs.psv.person.VIEW_PERSON_ACCOUNT or cs.psv.person.EDIT_PERSON_ACCOUNT)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\ReadAccount $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\ReadAccountResponse|bool
     */
    public function readAccount(\FGTCLB\HisClient\AccountService\Struct\ReadAccount $parameters)
    {
        try {
            $this->setResult($resultReadAccount = $this->getSoapClient()->__soapCall('readAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAccount201712
     * Meta information extracted from the WSDL
     * - documentation: Reads an account. Returns nil if no account exists with given ID. SECURED BY [(cs.psv.person.VIEW_PERSON_ACCOUNT or cs.psv.person.EDIT_PERSON_ACCOUNT)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\ReadAccount201712 $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\ReadAccount201712Response|bool
     */
    public function readAccount201712(\FGTCLB\HisClient\AccountService\Struct\ReadAccount201712 $parameters)
    {
        try {
            $this->setResult($resultReadAccount201712 = $this->getSoapClient()->__soapCall('readAccount201712', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAccount201712;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAccount
     * Meta information extracted from the WSDL
     * - documentation: Save a List of Accounts for Person. SECURED BY [(cs.psv.account.reset_access_data or cs.psv.person.EDIT_PERSON_ACCOUNT or cs.psv.person.EDIT_PERSON_ACCOUNT_OWN or cs.psv.person.CREATE_PERSON_ACCOUNT or
     * cs.psv.person.DELETE_PERSON_ACCOUNT)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\SaveAccount $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\SaveAccountResponse|bool
     */
    public function saveAccount(\FGTCLB\HisClient\AccountService\Struct\SaveAccount $parameters)
    {
        try {
            $this->setResult($resultSaveAccount = $this->getSoapClient()->__soapCall('saveAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAccountForPerson
     * Meta information extracted from the WSDL
     * - documentation: Searching all Accounts for Person. SECURED BY [(RIGHT_IS_LOGGED_IN or cs.psv.person.EDIT_PERSON_ACCOUNT or cs.psv.person.VIEW_PERSON_ACCOUNT or cs.psv.person.VIEW_PERSON_ACCOUNT_OWN)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\SearchAccountForPerson $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\SearchAccountForPersonResponse|bool
     */
    public function searchAccountForPerson(\FGTCLB\HisClient\AccountService\Struct\SearchAccountForPerson $parameters)
    {
        try {
            $this->setResult($resultSearchAccountForPerson = $this->getSoapClient()->__soapCall('searchAccountForPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAccountForPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAccountForPerson61
     * Meta information extracted from the WSDL
     * - documentation: Read all accounts to given person. SECURED BY [(RIGHT_IS_LOGGED_IN or cs.psv.person.EDIT_PERSON_ACCOUNT or cs.psv.person.VIEW_PERSON_ACCOUNT or cs.psv.person.VIEW_PERSON_ACCOUNT_OWN)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\SearchAccountForPerson61 $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\SearchAccountForPerson61Response|bool
     */
    public function searchAccountForPerson61(\FGTCLB\HisClient\AccountService\Struct\SearchAccountForPerson61 $parameters)
    {
        try {
            $this->setResult($resultSearchAccountForPerson61 = $this->getSoapClient()->__soapCall('searchAccountForPerson61', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAccountForPerson61;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAccount
     * Meta information extracted from the WSDL
     * - documentation: Updates an existing account. This will not allow any altering of the owning Person or the username of any existing Accounts. The password of the Account will be saved as-is, no further hashing will be performed. Please make sure to
     * choose the accountauthId accordingly. SECURED BY [(cs.psv.person.EDIT_PERSON_ACCOUNT or CONTEXT_CM_STU_FORMER_ACCOUNT_PROZESS)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\UpdateAccount $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\UpdateAccountResponse|bool
     */
    public function updateAccount(\FGTCLB\HisClient\AccountService\Struct\UpdateAccount $parameters)
    {
        try {
            $this->setResult($resultUpdateAccount = $this->getSoapClient()->__soapCall('updateAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAccount201712
     * Meta information extracted from the WSDL
     * - documentation: Updates an existing account. This will not allow any altering of the owning Person or the username of any existing Accounts. The password of the Account will be saved as-is, no further hashing will be performed. Please make sure to
     * choose the accountauthId accordingly. SECURED BY [(cs.psv.person.EDIT_PERSON_ACCOUNT or CONTEXT_CM_STU_FORMER_ACCOUNT_PROZESS)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AccountService\Struct\UpdateAccount201712 $parameters
     * @return \FGTCLB\HisClient\AccountService\Struct\UpdateAccount201712Response|bool
     */
    public function updateAccount201712(\FGTCLB\HisClient\AccountService\Struct\UpdateAccount201712 $parameters)
    {
        try {
            $this->setResult($resultUpdateAccount201712 = $this->getSoapClient()->__soapCall('updateAccount201712', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAccount201712;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClient::getResult()
     * @return \FGTCLB\HisClient\AccountService\Struct\ChangePasswordForAccountResponse|\FGTCLB\HisClient\AccountService\Struct\CreateAccountResponse|\FGTCLB\HisClient\AccountService\Struct\CreateNewAccountForPersonResponse|\FGTCLB\HisClient\AccountService\Struct\CreateNewBlockedAccountForPersonResponse|\FGTCLB\HisClient\AccountService\Struct\DeleteAccountResponse|\FGTCLB\HisClient\AccountService\Struct\FindAccountResponse|\FGTCLB\HisClient\AccountService\Struct\ReadAccount201712Response|\FGTCLB\HisClient\AccountService\Struct\ReadAccountResponse|\FGTCLB\HisClient\AccountService\Struct\SaveAccountResponse|\FGTCLB\HisClient\AccountService\Struct\SearchAccountForPerson61Response|\FGTCLB\HisClient\AccountService\Struct\SearchAccountForPersonResponse|\FGTCLB\HisClient\AccountService\Struct\UpdateAccount201712Response|\FGTCLB\HisClient\AccountService\Struct\UpdateAccountResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
