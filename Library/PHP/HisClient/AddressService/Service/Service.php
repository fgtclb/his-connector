<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService\Service;

use SoapFault;
use FGTCLB\HisClientFacade\Soap\AbstractSoapClient;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClient
{
    /**
     * Method to call the operation originally named compareEAddressRequired
     * Meta information extracted from the WSDL
     * - documentation: Compare two EAddresses required fields. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\CompareEAddressRequired $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\CompareEAddressRequiredResponse|bool
     */
    public function compareEAddressRequired(\FGTCLB\HisClient\AddressService\Struct\CompareEAddressRequired $parameters)
    {
        try {
            $this->setResult($resultCompareEAddressRequired = $this->getSoapClient()->__soapCall('compareEAddressRequired', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCompareEAddressRequired;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named compareEAddresses
     * Meta information extracted from the WSDL
     * - documentation: Compare two EAddresses. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\CompareEAddresses $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\CompareEAddressesResponse|bool
     */
    public function compareEAddresses(\FGTCLB\HisClient\AddressService\Struct\CompareEAddresses $parameters)
    {
        try {
            $this->setResult($resultCompareEAddresses = $this->getSoapClient()->__soapCall('compareEAddresses', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCompareEAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * comparePostAddressExcludeAddressTag
     * Meta information extracted from the WSDL
     * - documentation: Compare two Postaddresses excluding the address tag. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\ComparePostAddressExcludeAddressTag $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\ComparePostAddressExcludeAddressTagResponse|bool
     */
    public function comparePostAddressExcludeAddressTag(\FGTCLB\HisClient\AddressService\Struct\ComparePostAddressExcludeAddressTag $parameters)
    {
        try {
            $this->setResult($resultComparePostAddressExcludeAddressTag = $this->getSoapClient()->__soapCall('comparePostAddressExcludeAddressTag', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultComparePostAddressExcludeAddressTag;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteEaddress
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.DELETE_PERSON_CONTACTDATA)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\DeleteEaddress $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\DeleteEaddressResponse|bool
     */
    public function deleteEaddress(\FGTCLB\HisClient\AddressService\Struct\DeleteEaddress $parameters)
    {
        try {
            $this->setResult($resultDeleteEaddress = $this->getSoapClient()->__soapCall('deleteEaddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteEaddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePostaddress
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.DELETE_PERSON_CONTACTDATA)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\DeletePostaddress $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\DeletePostaddressResponse|bool
     */
    public function deletePostaddress(\FGTCLB\HisClient\AddressService\Struct\DeletePostaddress $parameters)
    {
        try {
            $this->setResult($resultDeletePostaddress = $this->getSoapClient()->__soapCall('deletePostaddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePostaddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAddressTagIdForPrivate
     * Meta information extracted from the WSDL
     * - documentation: Read address tag id for private address. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\ReadAddressTagIdForPrivate $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadAddressTagIdForPrivateResponse|bool
     */
    public function readAddressTagIdForPrivate(\FGTCLB\HisClient\AddressService\Struct\ReadAddressTagIdForPrivate $parameters)
    {
        try {
            $this->setResult($resultReadAddressTagIdForPrivate = $this->getSoapClient()->__soapCall('readAddressTagIdForPrivate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAddressTagIdForPrivate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * readAddressesOfPersonWithNotificationCategory
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.VIEW_PERSON_CONTACTDATA or cs.psv.person.EDIT_PERSON_CONTACTDATA)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\ReadAddressesOfPersonWithNotificationCategory $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadAddressesOfPersonWithNotificationCategoryResponse|bool
     */
    public function readAddressesOfPersonWithNotificationCategory(\FGTCLB\HisClient\AddressService\Struct\ReadAddressesOfPersonWithNotificationCategory $parameters)
    {
        try {
            $this->setResult($resultReadAddressesOfPersonWithNotificationCategory = $this->getSoapClient()->__soapCall('readAddressesOfPersonWithNotificationCategory', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAddressesOfPersonWithNotificationCategory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readEAddress
     * Meta information extracted from the WSDL
     * - documentation: For a given AddressID, get the corresponding EAddress. Will return nil when no EAddress exists with given ID. One of the following rights needed to use this method. SECURED BY [(cs.psv.person.VIEW_PERSON_CONTACTDATA or
     * cs.psv.person.EDIT_PERSON_CONTACTDATA)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\ReadEAddress $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadEAddressResponse|bool
     */
    public function readEAddress(\FGTCLB\HisClient\AddressService\Struct\ReadEAddress $parameters)
    {
        try {
            $this->setResult($resultReadEAddress = $this->getSoapClient()->__soapCall('readEAddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadEAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readEAddressTypeIdsForEmail
     * Meta information extracted from the WSDL
     * - documentation: Read address type id's for email. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\ReadEAddressTypeIdsForEmail $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadEAddressTypeIdsForEmailResponse|bool
     */
    public function readEAddressTypeIdsForEmail(\FGTCLB\HisClient\AddressService\Struct\ReadEAddressTypeIdsForEmail $parameters)
    {
        try {
            $this->setResult($resultReadEAddressTypeIdsForEmail = $this->getSoapClient()->__soapCall('readEAddressTypeIdsForEmail', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadEAddressTypeIdsForEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readEAddressTypeIdsForPhone
     * Meta information extracted from the WSDL
     * - documentation: Read address type id for phone. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\ReadEAddressTypeIdsForPhone $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadEAddressTypeIdsForPhoneResponse|bool
     */
    public function readEAddressTypeIdsForPhone(\FGTCLB\HisClient\AddressService\Struct\ReadEAddressTypeIdsForPhone $parameters)
    {
        try {
            $this->setResult($resultReadEAddressTypeIdsForPhone = $this->getSoapClient()->__soapCall('readEAddressTypeIdsForPhone', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadEAddressTypeIdsForPhone;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readEAddresses
     * Meta information extracted from the WSDL
     * - documentation: Read postal addresses for object of given type and id. SECURED BY [(cs.sys.ws.USE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\ReadEAddresses $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadEAddressesResponse|bool
     */
    public function readEAddresses(\FGTCLB\HisClient\AddressService\Struct\ReadEAddresses $parameters)
    {
        try {
            $this->setResult($resultReadEAddresses = $this->getSoapClient()->__soapCall('readEAddresses', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadEAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * readEAddressesWithAddressTagAndEAddressType
     * Meta information extracted from the WSDL
     * - documentation: Read eAddresses with addresstag and of eAddressTypes for object of given type and id. SECURED BY [(cs.psv.person.VIEW_PERSON_CONTACTDATA or cs.psv.person.EDIT_PERSON_CONTACTDATA)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\ReadEAddressesWithAddressTagAndEAddressType $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadEAddressesWithAddressTagAndEAddressTypeResponse|bool
     */
    public function readEAddressesWithAddressTagAndEAddressType(\FGTCLB\HisClient\AddressService\Struct\ReadEAddressesWithAddressTagAndEAddressType $parameters)
    {
        try {
            $this->setResult($resultReadEAddressesWithAddressTagAndEAddressType = $this->getSoapClient()->__soapCall('readEAddressesWithAddressTagAndEAddressType', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadEAddressesWithAddressTagAndEAddressType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readPostAddresses
     * Meta information extracted from the WSDL
     * - documentation: Read postal addresses for object of given type and id. SECURED BY [(cs.sys.ws.USE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\ReadPostAddresses $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadPostAddressesResponse|bool
     */
    public function readPostAddresses(\FGTCLB\HisClient\AddressService\Struct\ReadPostAddresses $parameters)
    {
        try {
            $this->setResult($resultReadPostAddresses = $this->getSoapClient()->__soapCall('readPostAddresses', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadPostAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readPostAddressesWithNotification
     * Meta information extracted from the WSDL
     * - documentation: Read postal addresses for object of given type and id. SECURED BY [(cs.sys.ws.USE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\ReadPostAddressesWithNotification $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadPostAddressesWithNotificationResponse|bool
     */
    public function readPostAddressesWithNotification(\FGTCLB\HisClient\AddressService\Struct\ReadPostAddressesWithNotification $parameters)
    {
        try {
            $this->setResult($resultReadPostAddressesWithNotification = $this->getSoapClient()->__soapCall('readPostAddressesWithNotification', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadPostAddressesWithNotification;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readPostaddress
     * Meta information extracted from the WSDL
     * - documentation: For a given AddressID, get the corresponding Postaddress. Will return nil when no Postaddress exists with given ID. One of the following rights needed to use this method: cs.psv.person.EDIT_PERSON_CONTACTDATA,
     * cs.psv.orgunit.EDIT_ORGUNIT_CONTACTDATA, cs.psv.facility.EDIT_FACILITY }) SECURED BY [(cs.sys.ws.USE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\ReadPostaddress $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\ReadPostaddressResponse|bool
     */
    public function readPostaddress(\FGTCLB\HisClient\AddressService\Struct\ReadPostaddress $parameters)
    {
        try {
            $this->setResult($resultReadPostaddress = $this->getSoapClient()->__soapCall('readPostaddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadPostaddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * removeNotificationCategoryFromAddress
     * Meta information extracted from the WSDL
     * - documentation: Removes given notification cateory from the address. Will return fault if the category didn't actually exist on the address. SECURED BY [(cs.sys.ws.USE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\RemoveNotificationCategoryFromAddress $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\RemoveNotificationCategoryFromAddressResponse|bool
     */
    public function removeNotificationCategoryFromAddress(\FGTCLB\HisClient\AddressService\Struct\RemoveNotificationCategoryFromAddress $parameters)
    {
        try {
            $this->setResult($resultRemoveNotificationCategoryFromAddress = $this->getSoapClient()->__soapCall('removeNotificationCategoryFromAddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveNotificationCategoryFromAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveEAddresses
     * Meta information extracted from the WSDL
     * - documentation: Save eAddresses for object of given type and id. SECURED BY [(cs.sys.ws.USE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\SaveEAddresses $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\SaveEAddressesResponse|bool
     */
    public function saveEAddresses(\FGTCLB\HisClient\AddressService\Struct\SaveEAddresses $parameters)
    {
        try {
            $this->setResult($resultSaveEAddresses = $this->getSoapClient()->__soapCall('saveEAddresses', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveEAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveEAddresses201906
     * Meta information extracted from the WSDL
     * - documentation: Save eAddresses for object of given type and id. SECURED BY [(cs.sys.ws.USE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\SaveEAddresses201906 $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\SaveEAddresses201906Response|bool
     */
    public function saveEAddresses201906(\FGTCLB\HisClient\AddressService\Struct\SaveEAddresses201906 $parameters)
    {
        try {
            $this->setResult($resultSaveEAddresses201906 = $this->getSoapClient()->__soapCall('saveEAddresses201906', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveEAddresses201906;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named savePostAddresses
     * Meta information extracted from the WSDL
     * - documentation: Save postal addresses for object of given type and id. SECURED BY [(cs.sys.ws.USE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\SavePostAddresses $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\SavePostAddressesResponse|bool
     */
    public function savePostAddresses(\FGTCLB\HisClient\AddressService\Struct\SavePostAddresses $parameters)
    {
        try {
            $this->setResult($resultSavePostAddresses = $this->getSoapClient()->__soapCall('savePostAddresses', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePostAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named savePostAddresses201906
     * Meta information extracted from the WSDL
     * - documentation: Save postal addresses for object of given type and id. SECURED BY [(cs.sys.ws.USE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\SavePostAddresses201906 $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\SavePostAddresses201906Response|bool
     */
    public function savePostAddresses201906(\FGTCLB\HisClient\AddressService\Struct\SavePostAddresses201906 $parameters)
    {
        try {
            $this->setResult($resultSavePostAddresses201906 = $this->getSoapClient()->__soapCall('savePostAddresses201906', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePostAddresses201906;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setNotificationCategoryForAddress
     * Meta information extracted from the WSDL
     * - documentation: Assigns given notification cateory to the address. This will usually remove that category on other addresses of the same person. SECURED BY [(cs.sys.ws.USE)]
     * @uses AbstractSoapClient::getSoapClient()
     * @uses AbstractSoapClient::setResult()
     * @uses AbstractSoapClient::saveLastError()
     * @param \FGTCLB\HisClient\AddressService\Struct\SetNotificationCategoryForAddress $parameters
     * @return \FGTCLB\HisClient\AddressService\Struct\SetNotificationCategoryForAddressResponse|bool
     */
    public function setNotificationCategoryForAddress(\FGTCLB\HisClient\AddressService\Struct\SetNotificationCategoryForAddress $parameters)
    {
        try {
            $this->setResult($resultSetNotificationCategoryForAddress = $this->getSoapClient()->__soapCall('setNotificationCategoryForAddress', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetNotificationCategoryForAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClient::getResult()
     * @return \FGTCLB\HisClient\AddressService\Struct\CompareEAddressesResponse|\FGTCLB\HisClient\AddressService\Struct\CompareEAddressRequiredResponse|\FGTCLB\HisClient\AddressService\Struct\ComparePostAddressExcludeAddressTagResponse|\FGTCLB\HisClient\AddressService\Struct\DeleteEaddressResponse|\FGTCLB\HisClient\AddressService\Struct\DeletePostaddressResponse|\FGTCLB\HisClient\AddressService\Struct\ReadAddressesOfPersonWithNotificationCategoryResponse|\FGTCLB\HisClient\AddressService\Struct\ReadAddressTagIdForPrivateResponse|\FGTCLB\HisClient\AddressService\Struct\ReadEAddressesResponse|\FGTCLB\HisClient\AddressService\Struct\ReadEAddressesWithAddressTagAndEAddressTypeResponse|\FGTCLB\HisClient\AddressService\Struct\ReadEAddressResponse|\FGTCLB\HisClient\AddressService\Struct\ReadEAddressTypeIdsForEmailResponse|\FGTCLB\HisClient\AddressService\Struct\ReadEAddressTypeIdsForPhoneResponse|\FGTCLB\HisClient\AddressService\Struct\ReadPostAddressesResponse|\FGTCLB\HisClient\AddressService\Struct\ReadPostAddressesWithNotificationResponse|\FGTCLB\HisClient\AddressService\Struct\ReadPostaddressResponse|\FGTCLB\HisClient\AddressService\Struct\RemoveNotificationCategoryFromAddressResponse|\FGTCLB\HisClient\AddressService\Struct\SaveEAddresses201906Response|\FGTCLB\HisClient\AddressService\Struct\SaveEAddressesResponse|\FGTCLB\HisClient\AddressService\Struct\SavePostAddresses201906Response|\FGTCLB\HisClient\AddressService\Struct\SavePostAddressesResponse|\FGTCLB\HisClient\AddressService\Struct\SetNotificationCategoryForAddressResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
