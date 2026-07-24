<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonAddressService\Service;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named assignAddressToNotification
     * Meta information extracted from the WSDL
     * - documentation: Assign an address to given notification category. This will consider both your rightsparameters and current address configurations and may fail accordingly. SECURED BY [(cs.psv.person.ASSIGN_PURPOSE_TO_ADDRESS or
     * cs.psv.self.CHANGE_ADDRESS_OF_PURPOSE) and (cs.psv.person.ASSIGN_PURPOSE_TO_ADDRESS or cs.psv.self.CHANGE_ADDRESS_OF_PURPOSE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\AssignAddressToNotification $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AssignAddressToNotificationResponse|bool
     */
    public function assignAddressToNotification(\FGTCLB\HisClient\PersonAddressService\Struct\AssignAddressToNotification $parameters)
    {
        try {
            $this->setResult($resultAssignAddressToNotification = $this->getSoapClient()->__soapCall('assignAddressToNotification', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAssignAddressToNotification;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named assignAddressToNotification202506
     * Meta information extracted from the WSDL
     * - documentation: Assign an address to given notification category. An email address can only be assigned if the address is verified - An unverified email address will cause an exception. This will consider both your rightsparameters and current
     * address configurations and may fail accordingly. SECURED BY [(cs.psv.person.ASSIGN_PURPOSE_TO_ADDRESS or cs.psv.self.CHANGE_ADDRESS_OF_PURPOSE) and (cs.psv.person.ASSIGN_PURPOSE_TO_ADDRESS or cs.psv.self.CHANGE_ADDRESS_OF_PURPOSE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\AssignAddressToNotification202506 $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AssignAddressToNotification202506Response|bool
     */
    public function assignAddressToNotification202506(\FGTCLB\HisClient\PersonAddressService\Struct\AssignAddressToNotification202506 $parameters)
    {
        try {
            $this->setResult($resultAssignAddressToNotification202506 = $this->getSoapClient()->__soapCall('assignAddressToNotification202506', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAssignAddressToNotification202506;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createEmail
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.CREATE_EADDRESS_EMAIL or cs.psv.self.CREATE_EADDRESS_EMAIL) and (cs.psv.person.ASSIGN_PURPOSE_TO_ADDRESS or cs.psv.self.CHANGE_ADDRESS_OF_PURPOSE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateEmailResponse|bool
     */
    public function createEmail(\FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail $parameters)
    {
        try {
            $this->setResult($resultCreateEmail = $this->getSoapClient()->__soapCall('createEmail', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createEmail202506
     * Meta information extracted from the WSDL
     * - documentation: Creates a new email address. Allows to mark the new email address as verified if the webservice user role has the right 'cs.psv.person.MARK_EADDRESS_EMAIL_VERIFIED'. SECURED BY [(cs.psv.person.CREATE_EADDRESS_EMAIL or
     * cs.psv.self.CREATE_EADDRESS_EMAIL) and (cs.psv.person.ASSIGN_PURPOSE_TO_ADDRESS or cs.psv.self.CHANGE_ADDRESS_OF_PURPOSE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail202506 $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail202506Response|bool
     */
    public function createEmail202506(\FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail202506 $parameters)
    {
        try {
            $this->setResult($resultCreateEmail202506 = $this->getSoapClient()->__soapCall('createEmail202506', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateEmail202506;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createHyperlink
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.CREATE_EADDRESS_HYPERLINK or cs.psv.self.CREATE_EADDRESS_HYPERLINK) and (cs.psv.person.ASSIGN_PURPOSE_TO_ADDRESS or cs.psv.self.CHANGE_ADDRESS_OF_PURPOSE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\CreateHyperlink $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateHyperlinkResponse|bool
     */
    public function createHyperlink(\FGTCLB\HisClient\PersonAddressService\Struct\CreateHyperlink $parameters)
    {
        try {
            $this->setResult($resultCreateHyperlink = $this->getSoapClient()->__soapCall('createHyperlink', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateHyperlink;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createMessenger
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.CREATE_EADDRESS_MESSENGER or cs.psv.self.CREATE_EADDRESS_MESSENGER) and (cs.psv.person.ASSIGN_PURPOSE_TO_ADDRESS or cs.psv.self.CHANGE_ADDRESS_OF_PURPOSE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\CreateMessenger $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreateMessengerResponse|bool
     */
    public function createMessenger(\FGTCLB\HisClient\PersonAddressService\Struct\CreateMessenger $parameters)
    {
        try {
            $this->setResult($resultCreateMessenger = $this->getSoapClient()->__soapCall('createMessenger', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateMessenger;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPhone
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.CREATE_EADDRESS_PHONE or cs.psv.self.CREATE_EADDRESS_PHONE) and (cs.psv.person.ASSIGN_PURPOSE_TO_ADDRESS or cs.psv.self.CHANGE_ADDRESS_OF_PURPOSE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\CreatePhone $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreatePhoneResponse|bool
     */
    public function createPhone(\FGTCLB\HisClient\PersonAddressService\Struct\CreatePhone $parameters)
    {
        try {
            $this->setResult($resultCreatePhone = $this->getSoapClient()->__soapCall('createPhone', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreatePhone;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPostaddress
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.CREATE_PERSON_POSTADDRESS or cs.psv.self.CREATE_POSTADDRESS) and (cs.psv.person.ASSIGN_PURPOSE_TO_ADDRESS or cs.psv.self.CHANGE_ADDRESS_OF_PURPOSE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\CreatePostaddress $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\CreatePostaddressResponse|bool
     */
    public function createPostaddress(\FGTCLB\HisClient\PersonAddressService\Struct\CreatePostaddress $parameters)
    {
        try {
            $this->setResult($resultCreatePostaddress = $this->getSoapClient()->__soapCall('createPostaddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreatePostaddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAddress
     * Meta information extracted from the WSDL
     * - documentation: Delete given address. The operation will fail if the address is assigned to any mandatory notification categories or if you are not authorized to remove one of the assigned notification categories. SECURED BY
     * [(cs.psv.person.DELETE_ADDRESS or cs.psv.self.DELETE_ADDRESS)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\DeleteAddress $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\DeleteAddressResponse|bool
     */
    public function deleteAddress(\FGTCLB\HisClient\PersonAddressService\Struct\DeleteAddress $parameters)
    {
        try {
            $this->setResult($resultDeleteAddress = $this->getSoapClient()->__soapCall('deleteAddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findEaddress
     * Meta information extracted from the WSDL
     * - documentation: Look-up for an EAddress. Will return ID of Address, ID of Person and the value of EAddress for each EAddress that match all given criteria.Yields both verified and unverified e-mail addresses. SECURED BY
     * [(cs.psv.person.VIEW_ADDRESSES)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\FindEaddress $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindEaddressResponse|bool
     */
    public function findEaddress(\FGTCLB\HisClient\PersonAddressService\Struct\FindEaddress $parameters)
    {
        try {
            $this->setResult($resultFindEaddress = $this->getSoapClient()->__soapCall('findEaddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindEaddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findPostaddress
     * Meta information extracted from the WSDL
     * - documentation: Look-up for an Postaddress. Will return ID of Address, ID of Person and the values of Postaddress for each Postaddress that match all given criteria. SECURED BY [(cs.psv.person.VIEW_ADDRESSES)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddressResponse|bool
     */
    public function findPostaddress(\FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddress $parameters)
    {
        try {
            $this->setResult($resultFindPostaddress = $this->getSoapClient()->__soapCall('findPostaddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPostaddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findUnverifiedEMails
     * Meta information extracted from the WSDL
     * - documentation: Look-up for an unverified email Address. Will return ID of Address, ID of Person and the value of EAddress for each EAddress that match all given criteria. SECURED BY [(cs.psv.person.VIEW_ADDRESSES)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\FindUnverifiedEMails $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindUnverifiedEMailsResponse|bool
     */
    public function findUnverifiedEMails(\FGTCLB\HisClient\PersonAddressService\Struct\FindUnverifiedEMails $parameters)
    {
        try {
            $this->setResult($resultFindUnverifiedEMails = $this->getSoapClient()->__soapCall('findUnverifiedEMails', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindUnverifiedEMails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findVerifiedEmails
     * Meta information extracted from the WSDL
     * - documentation: Look-up for verified e-mail addresses. Will return ID of Address, ID of Person and the value of EAddress for each EAddress that match all given criteria.In case of an email, this operation returns only verified emails. SECURED BY
     * [(cs.psv.person.VIEW_ADDRESSES)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\FindVerifiedEmails $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\FindVerifiedEmailsResponse|bool
     */
    public function findVerifiedEmails(\FGTCLB\HisClient\PersonAddressService\Struct\FindVerifiedEmails $parameters)
    {
        try {
            $this->setResult($resultFindVerifiedEmails = $this->getSoapClient()->__soapCall('findVerifiedEmails', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindVerifiedEmails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAddressConfigurationForPerson
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.VIEW_ADDRESSES)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\GetAddressConfigurationForPerson $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\GetAddressConfigurationForPersonResponse|bool
     */
    public function getAddressConfigurationForPerson(\FGTCLB\HisClient\PersonAddressService\Struct\GetAddressConfigurationForPerson $parameters)
    {
        try {
            $this->setResult($resultGetAddressConfigurationForPerson = $this->getSoapClient()->__soapCall('getAddressConfigurationForPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAddressConfigurationForPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named reSendVerificationMail
     * Meta information extracted from the WSDL
     * - documentation: Verifikationsmail an die angegebene Email-Adresse versenden SECURED BY [(cs.psv.person.VERIFY_EADDRESS_EMAIL) and (cs.psv.person.VERIFY_EADDRESS_EMAIL)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\ReSendVerificationMail $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReSendVerificationMailResponse|bool
     */
    public function reSendVerificationMail(\FGTCLB\HisClient\PersonAddressService\Struct\ReSendVerificationMail $parameters)
    {
        try {
            $this->setResult($resultReSendVerificationMail = $this->getSoapClient()->__soapCall('reSendVerificationMail', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReSendVerificationMail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAddresses
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.VIEW_ADDRESSES or cs.psv.self.VIEW_ADDRESSES)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddresses $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesResponse|bool
     */
    public function readAddresses(\FGTCLB\HisClient\PersonAddressService\Struct\ReadAddresses $parameters)
    {
        try {
            $this->setResult($resultReadAddresses = $this->getSoapClient()->__soapCall('readAddresses', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAddresses202506
     * Meta information extracted from the WSDL
     * - documentation: Reads all addresses for the given personId. For emails this method returns the new parameter isVerified for the indication of the verification state of the email. SECURED BY [(cs.psv.person.VIEW_ADDRESSES or
     * cs.psv.self.VIEW_ADDRESSES)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddresses202506 $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddresses202506Response|bool
     */
    public function readAddresses202506(\FGTCLB\HisClient\PersonAddressService\Struct\ReadAddresses202506 $parameters)
    {
        try {
            $this->setResult($resultReadAddresses202506 = $this->getSoapClient()->__soapCall('readAddresses202506', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAddresses202506;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAddressesByNotification
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.VIEW_ADDRESSES or cs.psv.self.VIEW_ADDRESSES)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesByNotification $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesByNotificationResponse|bool
     */
    public function readAddressesByNotification(\FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesByNotification $parameters)
    {
        try {
            $this->setResult($resultReadAddressesByNotification = $this->getSoapClient()->__soapCall('readAddressesByNotification', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAddressesByNotification;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAddressesByNotification202506
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.VIEW_ADDRESSES or cs.psv.self.VIEW_ADDRESSES)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesByNotification202506 $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesByNotification202506Response|bool
     */
    public function readAddressesByNotification202506(\FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesByNotification202506 $parameters)
    {
        try {
            $this->setResult($resultReadAddressesByNotification202506 = $this->getSoapClient()->__soapCall('readAddressesByNotification202506', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAddressesByNotification202506;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readEaddresses
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.VIEW_ADDRESSES or cs.psv.self.VIEW_ADDRESSES)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\ReadEaddresses_1 $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadEaddressesResponse_1|bool
     */
    public function readEaddresses(\FGTCLB\HisClient\PersonAddressService\Struct\ReadEaddresses_1 $parameters)
    {
        try {
            $this->setResult($resultReadEaddresses = $this->getSoapClient()->__soapCall('readEaddresses', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadEaddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readPostaddressById
     * Meta information extracted from the WSDL
     * - documentation: For a given AddressID, get the corresponding Postaddress. Will return nil if no Postaddress exists with given ID. SECURED BY [(cs.psv.person.VIEW_ADDRESSES)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\ReadPostaddressById $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadPostaddressByIdResponse|bool
     */
    public function readPostaddressById(\FGTCLB\HisClient\PersonAddressService\Struct\ReadPostaddressById $parameters)
    {
        try {
            $this->setResult($resultReadPostaddressById = $this->getSoapClient()->__soapCall('readPostaddressById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadPostaddressById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readPostaddresses
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.VIEW_ADDRESSES or cs.psv.self.VIEW_ADDRESSES)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\ReadPostaddresses_1 $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\ReadPostaddressesResponse_1|bool
     */
    public function readPostaddresses(\FGTCLB\HisClient\PersonAddressService\Struct\ReadPostaddresses_1 $parameters)
    {
        try {
            $this->setResult($resultReadPostaddresses = $this->getSoapClient()->__soapCall('readPostaddresses', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadPostaddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named removeAddressFromNotification
     * Meta information extracted from the WSDL
     * - documentation: Removes an address from given notification category. This will consider both your rightsparameters and current address configurations and may fail accordingly. SECURED BY [(cs.psv.person.ASSIGN_PURPOSE_TO_ADDRESS or
     * cs.psv.self.CHANGE_ADDRESS_OF_PURPOSE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\RemoveAddressFromNotification $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\RemoveAddressFromNotificationResponse|bool
     */
    public function removeAddressFromNotification(\FGTCLB\HisClient\PersonAddressService\Struct\RemoveAddressFromNotification $parameters)
    {
        try {
            $this->setResult($resultRemoveAddressFromNotification = $this->getSoapClient()->__soapCall('removeAddressFromNotification', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAddressFromNotification;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateEmail
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.EDIT_EADDRESS_EMAIL or cs.psv.self.EDIT_EADDRESS_EMAIL) and (cs.psv.person.EDIT_EADDRESS_EMAIL or cs.psv.self.EDIT_EADDRESS_EMAIL)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmail $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmailResponse|bool
     */
    public function updateEmail(\FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmail $parameters)
    {
        try {
            $this->setResult($resultUpdateEmail = $this->getSoapClient()->__soapCall('updateEmail', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateEmail202506
     * Meta information extracted from the WSDL
     * - documentation: Updates an existing email address. Allows to mark the email as verified if the webservice user role has the right ''cs.psv.person.MARK_EADDRESS_EMAIL_VERIFIED SECURED BY [(cs.psv.person.EDIT_EADDRESS_EMAIL or
     * cs.psv.self.EDIT_EADDRESS_EMAIL) and (cs.psv.person.EDIT_EADDRESS_EMAIL or cs.psv.self.EDIT_EADDRESS_EMAIL)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmail202506 $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmail202506Response|bool
     */
    public function updateEmail202506(\FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmail202506 $parameters)
    {
        try {
            $this->setResult($resultUpdateEmail202506 = $this->getSoapClient()->__soapCall('updateEmail202506', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateEmail202506;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateHyperlink
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.EDIT_EADDRESS_HYPERLINK or cs.psv.self.EDIT_EADDRESS_HYPERLINK)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\UpdateHyperlink $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateHyperlinkResponse|bool
     */
    public function updateHyperlink(\FGTCLB\HisClient\PersonAddressService\Struct\UpdateHyperlink $parameters)
    {
        try {
            $this->setResult($resultUpdateHyperlink = $this->getSoapClient()->__soapCall('updateHyperlink', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateHyperlink;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateMessenger
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.EDIT_EADDRESS_MESSENGER or cs.psv.self.EDIT_EADDRESS_MESSENGER)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\UpdateMessenger $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdateMessengerResponse|bool
     */
    public function updateMessenger(\FGTCLB\HisClient\PersonAddressService\Struct\UpdateMessenger $parameters)
    {
        try {
            $this->setResult($resultUpdateMessenger = $this->getSoapClient()->__soapCall('updateMessenger', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateMessenger;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePhone
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.EDIT_EADDRESS_PHONE or cs.psv.self.EDIT_EADDRESS_PHONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\UpdatePhone $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdatePhoneResponse|bool
     */
    public function updatePhone(\FGTCLB\HisClient\PersonAddressService\Struct\UpdatePhone $parameters)
    {
        try {
            $this->setResult($resultUpdatePhone = $this->getSoapClient()->__soapCall('updatePhone', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePhone;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePostaddress
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.EDIT_PERSON_POSTADDRESS or cs.psv.self.EDIT_POSTADDRESS)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\PersonAddressService\Struct\UpdatePostaddress $parameters
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\UpdatePostaddressResponse|bool
     */
    public function updatePostaddress(\FGTCLB\HisClient\PersonAddressService\Struct\UpdatePostaddress $parameters)
    {
        try {
            $this->setResult($resultUpdatePostaddress = $this->getSoapClient()->__soapCall('updatePostaddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePostaddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \FGTCLB\HisClient\PersonAddressService\Struct\AssignAddressToNotification202506Response|\FGTCLB\HisClient\PersonAddressService\Struct\AssignAddressToNotificationResponse|\FGTCLB\HisClient\PersonAddressService\Struct\CreateEmail202506Response|\FGTCLB\HisClient\PersonAddressService\Struct\CreateEmailResponse|\FGTCLB\HisClient\PersonAddressService\Struct\CreateHyperlinkResponse|\FGTCLB\HisClient\PersonAddressService\Struct\CreateMessengerResponse|\FGTCLB\HisClient\PersonAddressService\Struct\CreatePhoneResponse|\FGTCLB\HisClient\PersonAddressService\Struct\CreatePostaddressResponse|\FGTCLB\HisClient\PersonAddressService\Struct\DeleteAddressResponse|\FGTCLB\HisClient\PersonAddressService\Struct\FindEaddressResponse|\FGTCLB\HisClient\PersonAddressService\Struct\FindPostaddressResponse|\FGTCLB\HisClient\PersonAddressService\Struct\FindUnverifiedEMailsResponse|\FGTCLB\HisClient\PersonAddressService\Struct\FindVerifiedEmailsResponse|\FGTCLB\HisClient\PersonAddressService\Struct\GetAddressConfigurationForPersonResponse|\FGTCLB\HisClient\PersonAddressService\Struct\ReadAddresses202506Response|\FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesByNotification202506Response|\FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesByNotificationResponse|\FGTCLB\HisClient\PersonAddressService\Struct\ReadAddressesResponse|\FGTCLB\HisClient\PersonAddressService\Struct\ReadEaddressesResponse_1|\FGTCLB\HisClient\PersonAddressService\Struct\ReadPostaddressByIdResponse|\FGTCLB\HisClient\PersonAddressService\Struct\ReadPostaddressesResponse_1|\FGTCLB\HisClient\PersonAddressService\Struct\RemoveAddressFromNotificationResponse|\FGTCLB\HisClient\PersonAddressService\Struct\ReSendVerificationMailResponse|\FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmail202506Response|\FGTCLB\HisClient\PersonAddressService\Struct\UpdateEmailResponse|\FGTCLB\HisClient\PersonAddressService\Struct\UpdateHyperlinkResponse|\FGTCLB\HisClient\PersonAddressService\Struct\UpdateMessengerResponse|\FGTCLB\HisClient\PersonAddressService\Struct\UpdatePhoneResponse|\FGTCLB\HisClient\PersonAddressService\Struct\UpdatePostaddressResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
