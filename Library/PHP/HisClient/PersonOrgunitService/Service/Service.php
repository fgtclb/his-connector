<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService\Service;

use SoapFault;
use FGTCLB\HisClientFacade\Soap\AbstractSoapService;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapService
{
    /**
     * Method to call the operation originally named addAffiliationToPerson
     * Meta information extracted from the WSDL
     * - documentation: Add an affiliation for a person in an organizational unit. SECURED BY [(cs.psv.person.CREATE_PERSON_FUNCTIONS) and (cs.psv.person.CREATE_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\AddAffiliationToPerson $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AddAffiliationToPersonResponse|bool
     */
    public function addAffiliationToPerson(\FGTCLB\HisClient\PersonOrgunitService\Struct\AddAffiliationToPerson $parameters)
    {
        try {
            $this->setResult($resultAddAffiliationToPerson = $this->getSoapClient()->__soapCall('addAffiliationToPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddAffiliationToPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addEAddressToAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Adding a previously stored E-Address of the corresponding person (Email, Phone, Fax, ...) to a person's function (possibility of multiple adding). SECURED BY [(cs.psv.person.EDIT_PERSON_FUNCTIONS) and
     * (cs.psv.person.EDIT_PERSON_FUNCTIONS or CONTEXT_CS_PSV_VERIFY_AFFILIATION_EMAIL)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\AddEAddressToAffiliation $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AddEAddressToAffiliationResponse|bool
     */
    public function addEAddressToAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\AddEAddressToAffiliation $parameters)
    {
        try {
            $this->setResult($resultAddEAddressToAffiliation = $this->getSoapClient()->__soapCall('addEAddressToAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddEAddressToAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addPostAddressToAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Adding a previously stored postal address of the corresponding person if a room does not exist. SECURED BY [(cs.psv.person.EDIT_PERSON_FUNCTIONS) and (cs.psv.person.EDIT_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\AddPostAddressToAffiliation $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AddPostAddressToAffiliationResponse|bool
     */
    public function addPostAddressToAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\AddPostAddressToAffiliation $parameters)
    {
        try {
            $this->setResult($resultAddPostAddressToAffiliation = $this->getSoapClient()->__soapCall('addPostAddressToAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddPostAddressToAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addRoomToAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Adding of a stored room if a postal address does not exist. SECURED BY [(cs.psv.person.EDIT_PERSON_FUNCTIONS) and (cs.psv.person.EDIT_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\AddRoomToAffiliation $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\AddRoomToAffiliationResponse|bool
     */
    public function addRoomToAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\AddRoomToAffiliation $parameters)
    {
        try {
            $this->setResult($resultAddRoomToAffiliation = $this->getSoapClient()->__soapCall('addRoomToAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddRoomToAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findAffiliationById
     * Meta information extracted from the WSDL
     * - documentation: Get affiliation with id. SECURED BY [(cs.psv.person.VIEW_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\FindAffiliationById $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\FindAffiliationByIdResponse|bool
     */
    public function findAffiliationById(\FGTCLB\HisClient\PersonOrgunitService\Struct\FindAffiliationById $parameters)
    {
        try {
            $this->setResult($resultFindAffiliationById = $this->getSoapClient()->__soapCall('findAffiliationById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindAffiliationById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEAddressesFromAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Read-out of E-Addresses of a person's function SECURED BY [(cs.psv.person.VIEW_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\GetEAddressesFromAffiliation $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\GetEAddressesFromAffiliationResponse|bool
     */
    public function getEAddressesFromAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\GetEAddressesFromAffiliation $parameters)
    {
        try {
            $this->setResult($resultGetEAddressesFromAffiliation = $this->getSoapClient()->__soapCall('getEAddressesFromAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEAddressesFromAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLocationFromAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Read-out a location (room or address) of a person's function (Location represents an abstract class of room location or address location). SECURED BY [(cs.psv.person.VIEW_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\GetLocationFromAffiliation $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\GetLocationFromAffiliationResponse|bool
     */
    public function getLocationFromAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\GetLocationFromAffiliation $parameters)
    {
        try {
            $this->setResult($resultGetLocationFromAffiliation = $this->getSoapClient()->__soapCall('getLocationFromAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetLocationFromAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Load affiliation includign the location and eaddresses. SECURED BY [(cs.psv.person.VIEW_PERSON_FUNCTIONS) and (CONTEXT_CM_STU_HAS_DOCTORAL_PROJECT or cs.psv.person.CREATE_PERSON_FUNCTIONS or cs.psv.person.EDIT_PERSON_FUNCTIONS or
     * cs.psv.person.VIEW_PERSON_FUNCTIONS or cs.psv.person.EDIT_PERSON_FUNCTIONS_OWN)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliation $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliationResponse|bool
     */
    public function readAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliation $parameters)
    {
        try {
            $this->setResult($resultReadAffiliation = $this->getSoapClient()->__soapCall('readAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAffiliation202412
     * Meta information extracted from the WSDL
     * - documentation: Load affiliation including visibility. SECURED BY [(cs.psv.person.VIEW_PERSON_FUNCTIONS) and (CONTEXT_CM_STU_HAS_DOCTORAL_PROJECT or cs.psv.person.CREATE_PERSON_FUNCTIONS or cs.psv.person.EDIT_PERSON_FUNCTIONS or
     * cs.psv.person.VIEW_PERSON_FUNCTIONS or cs.psv.person.EDIT_PERSON_FUNCTIONS_OWN)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliation202412 $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliation202412Response|bool
     */
    public function readAffiliation202412(\FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliation202412 $parameters)
    {
        try {
            $this->setResult($resultReadAffiliation202412 = $this->getSoapClient()->__soapCall('readAffiliation202412', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAffiliation202412;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named removeAffiliationFromPerson
     * Meta information extracted from the WSDL
     * - documentation: Remove an affiliation from person. SECURED BY [(cs.psv.person.DELETE_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveAffiliationFromPerson $parameters
     * @return void|bool
     */
    public function removeAffiliationFromPerson(\FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveAffiliationFromPerson $parameters)
    {
        try {
            $this->setResult($resultRemoveAffiliationFromPerson = $this->getSoapClient()->__soapCall('removeAffiliationFromPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveAffiliationFromPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named removeEAddressFromAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Removal of an E-Address of a person's function. SECURED BY [(cs.psv.person.EDIT_PERSON_FUNCTIONS) and (cs.psv.person.EDIT_PERSON_FUNCTIONS or CONTEXT_CS_PSV_VERIFY_AFFILIATION_EMAIL)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveEAddressFromAffiliation $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveEAddressFromAffiliationResponse|bool
     */
    public function removeEAddressFromAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveEAddressFromAffiliation $parameters)
    {
        try {
            $this->setResult($resultRemoveEAddressFromAffiliation = $this->getSoapClient()->__soapCall('removeEAddressFromAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEAddressFromAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named removeLocationFromAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Removal of a stored location (room or address) of a person's function. SECURED BY [(cs.psv.person.EDIT_PERSON_FUNCTIONS) and (cs.psv.person.EDIT_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveLocationFromAffiliation $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveLocationFromAffiliationResponse|bool
     */
    public function removeLocationFromAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveLocationFromAffiliation $parameters)
    {
        try {
            $this->setResult($resultRemoveLocationFromAffiliation = $this->getSoapClient()->__soapCall('removeLocationFromAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveLocationFromAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Search of all affiliation for a personId. SECURED BY [(cs.psv.person.VIEW_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationResponse|bool
     */
    public function searchAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation $parameters)
    {
        try {
            $this->setResult($resultSearchAffiliation = $this->getSoapClient()->__soapCall('searchAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAffiliation202412
     * Meta information extracted from the WSDL
     * - documentation: Extended search of all affiliations including visibility and supplement. SECURED BY [(cs.psv.person.VIEW_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation202412 $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation202412Response|bool
     */
    public function searchAffiliation202412(\FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation202412 $parameters)
    {
        try {
            $this->setResult($resultSearchAffiliation202412 = $this->getSoapClient()->__soapCall('searchAffiliation202412', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAffiliation202412;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAffiliationById
     * Meta information extracted from the WSDL
     * - documentation: Search of all affiliation for a personId. The response contains the additional field supplement. SECURED BY [(cs.psv.person.VIEW_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationById $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationByIdResponse|bool
     */
    public function searchAffiliationById(\FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationById $parameters)
    {
        try {
            $this->setResult($resultSearchAffiliationById = $this->getSoapClient()->__soapCall('searchAffiliationById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAffiliationById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAffiliationsForPerson
     * Meta information extracted from the WSDL
     * - documentation: Quest of all functions dedicated ta a person for a given personId. SECURED BY [(cs.psv.person.VIEW_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationsForPerson $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationsForPersonResponse|bool
     */
    public function searchAffiliationsForPerson(\FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationsForPerson $parameters)
    {
        try {
            $this->setResult($resultSearchAffiliationsForPerson = $this->getSoapClient()->__soapCall('searchAffiliationsForPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAffiliationsForPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setPostaddressForAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Sets the location of the affiliation to given postaddress. Any previous assignment is removed. In case a postaddress was assigned before, the old address will be deleted if it has no other references. SECURED BY
     * [(cs.psv.person.EDIT_PERSON_FUNCTIONS) and (cs.psv.person.EDIT_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\SetPostaddressForAffiliation $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SetPostaddressForAffiliationResponse|bool
     */
    public function setPostaddressForAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\SetPostaddressForAffiliation $parameters)
    {
        try {
            $this->setResult($resultSetPostaddressForAffiliation = $this->getSoapClient()->__soapCall('setPostaddressForAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetPostaddressForAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setRoomForAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Sets the location of the affiliation to given room. Any previous assignment is removed. In case a postaddress was assigned before, this address will be deleted if it has no other references. SECURED BY
     * [(cs.psv.person.EDIT_PERSON_FUNCTIONS) and (cs.psv.person.EDIT_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\SetRoomForAffiliation $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\SetRoomForAffiliationResponse|bool
     */
    public function setRoomForAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\SetRoomForAffiliation $parameters)
    {
        try {
            $this->setResult($resultSetRoomForAffiliation = $this->getSoapClient()->__soapCall('setRoomForAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetRoomForAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Save an existing affiliation. SECURED BY [(cs.psv.person.EDIT_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliation $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliationResponse|bool
     */
    public function updateAffiliation(\FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliation $parameters)
    {
        try {
            $this->setResult($resultUpdateAffiliation = $this->getSoapClient()->__soapCall('updateAffiliation', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAffiliation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAffiliation202412
     * Meta information extracted from the WSDL
     * - documentation: Update an affiliation. Set id to nil to create a new affiliation instead. updateAffiliation60 expanded to include visibility. SECURED BY [(cs.psv.person.EDIT_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliation202412 $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliation202412Response|bool
     */
    public function updateAffiliation202412(\FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliation202412 $parameters)
    {
        try {
            $this->setResult($resultUpdateAffiliation202412 = $this->getSoapClient()->__soapCall('updateAffiliation202412', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAffiliation202412;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAffiliation60
     * Meta information extracted from the WSDL
     * - documentation: Update an affiliation. Set id to nil to create a new affiliation instead. SECURED BY [(cs.psv.person.EDIT_PERSON_FUNCTIONS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliation60 $parameters
     * @return \FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliation60Response|bool
     */
    public function updateAffiliation60(\FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliation60 $parameters)
    {
        try {
            $this->setResult($resultUpdateAffiliation60 = $this->getSoapClient()->__soapCall('updateAffiliation60', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAffiliation60;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapService::getResult()
     * @return void|\FGTCLB\HisClient\PersonOrgunitService\Struct\AddAffiliationToPersonResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\AddEAddressToAffiliationResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\AddPostAddressToAffiliationResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\AddRoomToAffiliationResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\FindAffiliationByIdResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\GetEAddressesFromAffiliationResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\GetLocationFromAffiliationResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliation202412Response|\FGTCLB\HisClient\PersonOrgunitService\Struct\ReadAffiliationResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveEAddressFromAffiliationResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\RemoveLocationFromAffiliationResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliation202412Response|\FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationByIdResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\SearchAffiliationsForPersonResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\SetPostaddressForAffiliationResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\SetRoomForAffiliationResponse|\FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliation60Response|\FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliation202412Response|\FGTCLB\HisClient\PersonOrgunitService\Struct\UpdateAffiliationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
