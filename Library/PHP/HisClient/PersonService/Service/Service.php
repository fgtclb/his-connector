<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonService\Service;

use SoapFault;
use FGTCLB\HisClientFacade\Soap\AbstractSoapService;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapService
{
    /**
     * Method to call the operation originally named createPerson
     * Meta information extracted from the WSDL
     * - documentation: Create or update a Person. For creating a Person, make sure to set the id to nil. Will return the id of the Person in either case. SECURED BY [(cs.psv.person.EDIT_PERSON_EMPLOYEEDATA_OWN or cs.psv.person.CREATE_PERSON_EMPLOYEEDATA or
     * cs.psv.person.CREATE_PERSON_MAINDATA or cs.psv.person.EDIT_PERSON_MAINDATA or cs.psv.person.EDIT_PERSON_MAINDATA_OWN or cs.psv.person.CREATE_NEW_PERSON or CONTEXT_CS_PSV_ORGUNIT_CONTACTPERSON)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\CreatePerson $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonResponse|bool
     */
    public function createPerson(\FGTCLB\HisClient\PersonService\Struct\CreatePerson $parameters)
    {
        try {
            $this->setResult($resultCreatePerson = $this->getSoapClient()->__soapCall('createPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreatePerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPerson201912
     * Meta information extracted from the WSDL
     * - documentation: Create or update a Person. For creating a Person, make sure to set the id to nil. Will return the id of the Person in either case. SECURED BY [(cs.psv.person.CREATE_NEW_PERSON or CONTEXT_CS_PSV_ORGUNIT_CONTACTPERSON)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\CreatePerson201912 $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePerson201912Response|bool
     */
    public function createPerson201912(\FGTCLB\HisClient\PersonService\Struct\CreatePerson201912 $parameters)
    {
        try {
            $this->setResult($resultCreatePerson201912 = $this->getSoapClient()->__soapCall('createPerson201912', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreatePerson201912;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPerson202412
     * Meta information extracted from the WSDL
     * - documentation: Create or update a Person. For creating a Person, make sure to set the id to nil. Will return the id of the Person in either case. SECURED BY [(cs.psv.person.CREATE_NEW_PERSON)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\CreatePerson202412 $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePerson202412Response|bool
     */
    public function createPerson202412(\FGTCLB\HisClient\PersonService\Struct\CreatePerson202412 $parameters)
    {
        try {
            $this->setResult($resultCreatePerson202412 = $this->getSoapClient()->__soapCall('createPerson202412', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreatePerson202412;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPersonAttribute202006
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.CREATE_PERSON_ATTRIBUTE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\CreatePersonAttribute202006 $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonAttribute202006Response|bool
     */
    public function createPersonAttribute202006(\FGTCLB\HisClient\PersonService\Struct\CreatePersonAttribute202006 $parameters)
    {
        try {
            $this->setResult($resultCreatePersonAttribute202006 = $this->getSoapClient()->__soapCall('createPersonAttribute202006', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreatePersonAttribute202006;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPersonAttributeForPerson
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.CREATE_PERSON_ATTRIBUTE or cs.psv.person.CREATE_PERSON_ATTRIBUTE_OWN) and (cs.psv.person.CREATE_PERSON_ATTRIBUTE or cs.psv.person.CREATE_PERSON_ATTRIBUTE_OWN)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\CreatePersonAttributeForPerson $parameters
     * @return void|bool
     */
    public function createPersonAttributeForPerson(\FGTCLB\HisClient\PersonService\Struct\CreatePersonAttributeForPerson $parameters)
    {
        try {
            $this->setResult($resultCreatePersonAttributeForPerson = $this->getSoapClient()->__soapCall('createPersonAttributeForPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreatePersonAttributeForPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPersonIdentifier
     * Meta information extracted from the WSDL
     * - documentation: Create and save a new identifier for the given person SECURED BY [(cs.psv.person.CREATE_PERSON_IDENTIFIER or SYSROLE_WALLET_SYNC)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\CreatePersonIdentifier $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\CreatePersonIdentifierResponse|bool
     */
    public function createPersonIdentifier(\FGTCLB\HisClient\PersonService\Struct\CreatePersonIdentifier $parameters)
    {
        try {
            $this->setResult($resultCreatePersonIdentifier = $this->getSoapClient()->__soapCall('createPersonIdentifier', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreatePersonIdentifier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePerson
     * Meta information extracted from the WSDL
     * - documentation: Attempt to delete this person and all associated data. SECURED BY [(cs.psv.person.DELETE_PERSON or CONTEXT_CS_PSV_ORGUNIT_CONTACTPERSON)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\DeletePerson $parameters
     * @return void|bool
     */
    public function deletePerson(\FGTCLB\HisClient\PersonService\Struct\DeletePerson $parameters)
    {
        try {
            $this->setResult($resultDeletePerson = $this->getSoapClient()->__soapCall('deletePerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePersonAttribute202006
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.DELETE_PERSON_ATTRIBUTE) and (cs.psv.person.DELETE_PERSON_ATTRIBUTE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\DeletePersonAttribute202006 $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\DeletePersonAttribute202006Response|bool
     */
    public function deletePersonAttribute202006(\FGTCLB\HisClient\PersonService\Struct\DeletePersonAttribute202006 $parameters)
    {
        try {
            $this->setResult($resultDeletePersonAttribute202006 = $this->getSoapClient()->__soapCall('deletePersonAttribute202006', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePersonAttribute202006;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePersonAttributeFromPerson
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.DELETE_PERSON_ATTRIBUTE) and (cs.psv.person.DELETE_PERSON_ATTRIBUTE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\DeletePersonAttributeFromPerson $parameters
     * @return void|bool
     */
    public function deletePersonAttributeFromPerson(\FGTCLB\HisClient\PersonService\Struct\DeletePersonAttributeFromPerson $parameters)
    {
        try {
            $this->setResult($resultDeletePersonAttributeFromPerson = $this->getSoapClient()->__soapCall('deletePersonAttributeFromPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePersonAttributeFromPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePersonIdentifier
     * Meta information extracted from the WSDL
     * - documentation: Delete a person identifier SECURED BY [(cs.psv.person.DELETE_PERSON_IDENTIFIER)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\DeletePersonIdentifier $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\DeletePersonIdentifierResponse|bool
     */
    public function deletePersonIdentifier(\FGTCLB\HisClient\PersonService\Struct\DeletePersonIdentifier $parameters)
    {
        try {
            $this->setResult($resultDeletePersonIdentifier = $this->getSoapClient()->__soapCall('deletePersonIdentifier', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePersonIdentifier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePersonMarkOnly
     * Meta information extracted from the WSDL
     * - documentation: Mark the person for deletion. SECURED BY [(cs.psv.person.DELETE_PERSON)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\DeletePersonMarkOnly $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\DeletePersonMarkOnlyResponse|bool
     */
    public function deletePersonMarkOnly(\FGTCLB\HisClient\PersonService\Struct\DeletePersonMarkOnly $parameters)
    {
        try {
            $this->setResult($resultDeletePersonMarkOnly = $this->getSoapClient()->__soapCall('deletePersonMarkOnly', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePersonMarkOnly;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findPerson
     * Meta information extracted from the WSDL
     * - documentation: Look-up for a Person. Will return a distinct list of IDs of all those Persons that match all given criteria. SECURED BY [(cs.psv.person.VIEW_PERSON_MAINDATA)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\FindPerson $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPersonResponse|bool
     */
    public function findPerson(\FGTCLB\HisClient\PersonService\Struct\FindPerson $parameters)
    {
        try {
            $this->setResult($resultFindPerson = $this->getSoapClient()->__soapCall('findPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findPerson201912
     * Meta information extracted from the WSDL
     * - documentation: Look-up for a Person. Will return a distinct list of IDs of all those Persons that match all given criteria. Also allows searching the roles of the person. SECURED BY [(cs.psv.person.VIEW_PERSON_MAINDATA)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\FindPerson201912 $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson201912Response|bool
     */
    public function findPerson201912(\FGTCLB\HisClient\PersonService\Struct\FindPerson201912 $parameters)
    {
        try {
            $this->setResult($resultFindPerson201912 = $this->getSoapClient()->__soapCall('findPerson201912', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPerson201912;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findPerson60
     * Meta information extracted from the WSDL
     * - documentation: Look-up for a Person. Will return a distinct list of IDs of all those Persons that match all given criteria. Also allows searching the roles of the person. SECURED BY [(cs.psv.person.VIEW_PERSON_MAINDATA)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\FindPerson60 $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPerson60Response|bool
     */
    public function findPerson60(\FGTCLB\HisClient\PersonService\Struct\FindPerson60 $parameters)
    {
        try {
            $this->setResult($resultFindPerson60 = $this->getSoapClient()->__soapCall('findPerson60', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPerson60;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findPersonIdentifiers
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.VIEW_PERSON_IDENTIFIER)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiers $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResponse|bool
     */
    public function findPersonIdentifiers(\FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiers $parameters)
    {
        try {
            $this->setResult($resultFindPersonIdentifiers = $this->getSoapClient()->__soapCall('findPersonIdentifiers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPersonIdentifiers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateNewUsername
     * Meta information extracted from the WSDL
     * - documentation: Uses the default AccountGenerator to compute a new username. This does NOT create or change accounts! SECURED BY [(cs.psv.account.GENERATE_ACCOUNTS)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\GenerateNewUsername $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\GenerateNewUsernameResponse|bool
     */
    public function generateNewUsername(\FGTCLB\HisClient\PersonService\Struct\GenerateNewUsername $parameters)
    {
        try {
            $this->setResult($resultGenerateNewUsername = $this->getSoapClient()->__soapCall('generateNewUsername', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateNewUsername;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named generatePersonIdentifier
     * Meta information extracted from the WSDL
     * - documentation: Generate and save a new identifier for the given person SECURED BY [(cs.psv.person.GENERATE_PERSON_IDENTIFIER or cs.psv.person.CREATE_PERSON_IDENTIFIER)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\GeneratePersonIdentifier $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\GeneratePersonIdentifierResponse|bool
     */
    public function generatePersonIdentifier(\FGTCLB\HisClient\PersonService\Struct\GeneratePersonIdentifier $parameters)
    {
        try {
            $this->setResult($resultGeneratePersonIdentifier = $this->getSoapClient()->__soapCall('generatePersonIdentifier', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGeneratePersonIdentifier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllPersonAttributeTypes
     * Meta information extracted from the WSDL
     * - documentation: Load the definitions of the available attribute types. SECURED BY [(cs.psv.person.EDIT_PERSON_ATTRIBUTE_OWN or cs.psv.person.VIEW_PERSON_ATTRIBUTE_OWN or cs.psv.person.VIEW_PERSON_ATTRIBUTE or cs.psv.person.EDIT_PERSON_ATTRIBUTE or
     * cs.psv.person.CREATE_PERSON_ATTRIBUTE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\GetAllPersonAttributeTypes $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\GetAllPersonAttributeTypesResponse|bool
     */
    public function getAllPersonAttributeTypes(\FGTCLB\HisClient\PersonService\Struct\GetAllPersonAttributeTypes $parameters)
    {
        try {
            $this->setResult($resultGetAllPersonAttributeTypes = $this->getSoapClient()->__soapCall('getAllPersonAttributeTypes', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllPersonAttributeTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllPersonPlaceholders
     * Meta information extracted from the WSDL
     * - documentation: Load all placeholders for lecturers (e.g. scientific assistant, not yet, to be defined) SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\GetAllPersonPlaceholders $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\GetAllPersonPlaceholdersResponse|bool
     */
    public function getAllPersonPlaceholders(\FGTCLB\HisClient\PersonService\Struct\GetAllPersonPlaceholders $parameters)
    {
        try {
            $this->setResult($resultGetAllPersonPlaceholders = $this->getSoapClient()->__soapCall('getAllPersonPlaceholders', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllPersonPlaceholders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named isUsernameAlreadyAssigned
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.VIEW_PERSON_ACCOUNT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\IsUsernameAlreadyAssigned $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\IsUsernameAlreadyAssignedResponse|bool
     */
    public function isUsernameAlreadyAssigned(\FGTCLB\HisClient\PersonService\Struct\IsUsernameAlreadyAssigned $parameters)
    {
        try {
            $this->setResult($resultIsUsernameAlreadyAssigned = $this->getSoapClient()->__soapCall('isUsernameAlreadyAssigned', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultIsUsernameAlreadyAssigned;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAllAcademicDegrees
     * Meta information extracted from the WSDL
     * - documentation: Read all available academic degrees. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadAllAcademicDegrees $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadAllAcademicDegreesResponse|bool
     */
    public function readAllAcademicDegrees(\FGTCLB\HisClient\PersonService\Struct\ReadAllAcademicDegrees $parameters)
    {
        try {
            $this->setResult($resultReadAllAcademicDegrees = $this->getSoapClient()->__soapCall('readAllAcademicDegrees', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAllAcademicDegrees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAllGenders
     * Meta information extracted from the WSDL
     * - documentation: Read all available genders. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadAllGenders $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadAllGendersResponse|bool
     */
    public function readAllGenders(\FGTCLB\HisClient\PersonService\Struct\ReadAllGenders $parameters)
    {
        try {
            $this->setResult($resultReadAllGenders = $this->getSoapClient()->__soapCall('readAllGenders', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAllGenders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAllPersonAttributesFromPerson
     * Meta information extracted from the WSDL
     * - documentation: Read all additional attributes from given Person. SECURED BY [(RIGHT_IS_LOGGED_IN or cs.psv.person.EDIT_PERSON_ATTRIBUTE_OWN or cs.psv.person.VIEW_PERSON_ATTRIBUTE_OWN or cs.psv.person.VIEW_PERSON_ATTRIBUTE or
     * cs.psv.person.EDIT_PERSON_ATTRIBUTE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadAllPersonAttributesFromPerson $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadAllPersonAttributesFromPersonResponse|bool
     */
    public function readAllPersonAttributesFromPerson(\FGTCLB\HisClient\PersonService\Struct\ReadAllPersonAttributesFromPerson $parameters)
    {
        try {
            $this->setResult($resultReadAllPersonAttributesFromPerson = $this->getSoapClient()->__soapCall('readAllPersonAttributesFromPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAllPersonAttributesFromPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAllTitles
     * Meta information extracted from the WSDL
     * - documentation: Read all available titles. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadAllTitles $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadAllTitlesResponse|bool
     */
    public function readAllTitles(\FGTCLB\HisClient\PersonService\Struct\ReadAllTitles $parameters)
    {
        try {
            $this->setResult($resultReadAllTitles = $this->getSoapClient()->__soapCall('readAllTitles', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAllTitles;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readPerson
     * Meta information extracted from the WSDL
     * - documentation: For a given PersonID, get the corresponding Person. Will return nil when no Person exists with given ID. SECURED BY [(cs.psv.person.VIEW_PERSON_MAINDATA or cs.psv.person.EDIT_PERSON_MAINDATA)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadPerson $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonResponse|bool
     */
    public function readPerson(\FGTCLB\HisClient\PersonService\Struct\ReadPerson $parameters)
    {
        try {
            $this->setResult($resultReadPerson = $this->getSoapClient()->__soapCall('readPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readPerson201806
     * Meta information extracted from the WSDL
     * - documentation: For a given PersonID, get the corresponding Person. Will return nil when no Person exists with given ID. SECURED BY [(cs.psv.person.VIEW_PERSON_MAINDATA or cs.psv.person.EDIT_PERSON_MAINDATA)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadPerson201806 $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPerson201806Response|bool
     */
    public function readPerson201806(\FGTCLB\HisClient\PersonService\Struct\ReadPerson201806 $parameters)
    {
        try {
            $this->setResult($resultReadPerson201806 = $this->getSoapClient()->__soapCall('readPerson201806', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadPerson201806;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readPerson201912
     * Meta information extracted from the WSDL
     * - documentation: For a given PersonID, get the corresponding Person. Will return nil when no Person exists with given ID. SECURED BY [(cs.psv.person.VIEW_PERSON_MAINDATA or cs.psv.person.EDIT_PERSON_MAINDATA)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadPerson201912 $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPerson201912Response|bool
     */
    public function readPerson201912(\FGTCLB\HisClient\PersonService\Struct\ReadPerson201912 $parameters)
    {
        try {
            $this->setResult($resultReadPerson201912 = $this->getSoapClient()->__soapCall('readPerson201912', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadPerson201912;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readPersonAttributes202006
     * Meta information extracted from the WSDL
     * - documentation: Read all additional attributes from given Person. SECURED BY [(RIGHT_IS_LOGGED_IN or cs.psv.person.EDIT_PERSON_ATTRIBUTE_OWN or cs.psv.person.VIEW_PERSON_ATTRIBUTE_OWN or cs.psv.person.VIEW_PERSON_ATTRIBUTE or
     * cs.psv.person.EDIT_PERSON_ATTRIBUTE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadPersonAttributes202006 $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonAttributes202006Response|bool
     */
    public function readPersonAttributes202006(\FGTCLB\HisClient\PersonService\Struct\ReadPersonAttributes202006 $parameters)
    {
        try {
            $this->setResult($resultReadPersonAttributes202006 = $this->getSoapClient()->__soapCall('readPersonAttributes202006', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadPersonAttributes202006;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readPersonByIdentifierTypeAndValue
     * Meta information extracted from the WSDL
     * - documentation: Search a person with a given identifier value and type. SECURED BY [(cs.psv.person.VIEW_PERSON_IDENTIFIER)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadPersonByIdentifierTypeAndValue $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonByIdentifierTypeAndValueResponse|bool
     */
    public function readPersonByIdentifierTypeAndValue(\FGTCLB\HisClient\PersonService\Struct\ReadPersonByIdentifierTypeAndValue $parameters)
    {
        try {
            $this->setResult($resultReadPersonByIdentifierTypeAndValue = $this->getSoapClient()->__soapCall('readPersonByIdentifierTypeAndValue', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadPersonByIdentifierTypeAndValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readPersonIdentifiers
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.VIEW_PERSON_IDENTIFIER)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiers $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResponse|bool
     */
    public function readPersonIdentifiers(\FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiers $parameters)
    {
        try {
            $this->setResult($resultReadPersonIdentifiers = $this->getSoapClient()->__soapCall('readPersonIdentifiers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadPersonIdentifiers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readPersonaldata
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.person.VIEW_PERSON_EMPLOYEEDATA) and (cs.psv.person.SEARCH_PERSON or cs.psv.person.VIEW_PERSON_MAINDATA or cs.psv.person.VIEW_PERSON_MAINDATA_OWN or cs.psv.person.EDIT_PERSON_MAINDATA or
     * cs.psv.person.EDIT_PERSON_MAINDATA_OWN or cs.psv.person.EDIT_PERSON_MAINDATA_BUSINESS or cs.psv.person.VIEW_PERSON_MAINDATA_BUSINESS or cs.psv.person.EDIT_PERSON_MAINDATA_BUSINESS or cs.psv.person.MANAGE_PERSON_WITHOUT_ROLES or
     * cs.psv.person.CREATE_NEW_PERSON or cs.psv.person.CREATE_PERSON_MAINDATA)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\ReadPersonaldata $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\ReadPersonaldataResponse|bool
     */
    public function readPersonaldata(\FGTCLB\HisClient\PersonService\Struct\ReadPersonaldata $parameters)
    {
        try {
            $this->setResult($resultReadPersonaldata = $this->getSoapClient()->__soapCall('readPersonaldata', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadPersonaldata;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named savePerson
     * Meta information extracted from the WSDL
     * - documentation: Create or update a Person. For creating a Person, make sure to set the id to nil. Will return the id of the Person in either case. SECURED BY [(cs.psv.person.EDIT_PERSON_EMPLOYEEDATA_OWN or cs.psv.person.CREATE_PERSON_EMPLOYEEDATA or
     * cs.psv.person.CREATE_PERSON_MAINDATA or cs.psv.person.EDIT_PERSON_MAINDATA or cs.psv.person.EDIT_PERSON_MAINDATA_OWN or cs.psv.person.CREATE_NEW_PERSON or CONTEXT_CS_PSV_ORGUNIT_CONTACTPERSON)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\SavePerson $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\SavePersonResponse|bool
     */
    public function savePerson(\FGTCLB\HisClient\PersonService\Struct\SavePerson $parameters)
    {
        try {
            $this->setResult($resultSavePerson = $this->getSoapClient()->__soapCall('savePerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePerson
     * Meta information extracted from the WSDL
     * - documentation: Update an existing Person. May not be used for creating a Person. The id returned will be the same as the id of the given Person. SECURED BY [(cs.psv.person.EDIT_PERSON_EMPLOYEEDATA_OWN or cs.psv.person.CREATE_PERSON_EMPLOYEEDATA or
     * cs.psv.person.CREATE_PERSON_MAINDATA or cs.psv.person.EDIT_PERSON_MAINDATA or cs.psv.person.EDIT_PERSON_MAINDATA_OWN or cs.psv.person.CREATE_NEW_PERSON or CONTEXT_CS_PSV_ORGUNIT_CONTACTPERSON)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\UpdatePerson $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\UpdatePersonResponse|bool
     */
    public function updatePerson(\FGTCLB\HisClient\PersonService\Struct\UpdatePerson $parameters)
    {
        try {
            $this->setResult($resultUpdatePerson = $this->getSoapClient()->__soapCall('updatePerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePerson201912
     * Meta information extracted from the WSDL
     * - documentation: Update an existing Person. May not be used for creating a Person. The id returned will be the same as the id of the given Person. SECURED BY [(cs.psv.person.EDIT_PERSON_EMPLOYEEDATA_OWN or cs.psv.person.CREATE_PERSON_EMPLOYEEDATA or
     * cs.psv.person.CREATE_PERSON_MAINDATA or cs.psv.person.EDIT_PERSON_MAINDATA or cs.psv.person.EDIT_PERSON_MAINDATA_OWN or cs.psv.person.CREATE_NEW_PERSON or CONTEXT_CS_PSV_ORGUNIT_CONTACTPERSON)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\UpdatePerson201912 $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\UpdatePerson201912Response|bool
     */
    public function updatePerson201912(\FGTCLB\HisClient\PersonService\Struct\UpdatePerson201912 $parameters)
    {
        try {
            $this->setResult($resultUpdatePerson201912 = $this->getSoapClient()->__soapCall('updatePerson201912', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePerson201912;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePersonAttribute202006
     * Meta information extracted from the WSDL
     * - documentation: Update an additional attribute from given person. ID must not be NULL! SECURED BY [(cs.psv.person.EDIT_PERSON_ATTRIBUTE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\UpdatePersonAttribute202006 $parameters
     * @return \FGTCLB\HisClient\PersonService\Struct\UpdatePersonAttribute202006Response|bool
     */
    public function updatePersonAttribute202006(\FGTCLB\HisClient\PersonService\Struct\UpdatePersonAttribute202006 $parameters)
    {
        try {
            $this->setResult($resultUpdatePersonAttribute202006 = $this->getSoapClient()->__soapCall('updatePersonAttribute202006', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePersonAttribute202006;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePersonAttributeForPerson
     * Meta information extracted from the WSDL
     * - documentation: Update an additional attribute from given person. ID must not be NULL! SECURED BY [(cs.psv.person.EDIT_PERSON_ATTRIBUTE) and (cs.psv.person.EDIT_PERSON_ATTRIBUTE or cs.psv.person.EDIT_PERSON_ATTRIBUTE_OWN)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\PersonService\Struct\UpdatePersonAttributeForPerson $parameters
     * @return void|bool
     */
    public function updatePersonAttributeForPerson(\FGTCLB\HisClient\PersonService\Struct\UpdatePersonAttributeForPerson $parameters)
    {
        try {
            $this->setResult($resultUpdatePersonAttributeForPerson = $this->getSoapClient()->__soapCall('updatePersonAttributeForPerson', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePersonAttributeForPerson;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapService::getResult()
     * @return void|\FGTCLB\HisClient\PersonService\Struct\CreatePerson201912Response|\FGTCLB\HisClient\PersonService\Struct\CreatePerson202412Response|\FGTCLB\HisClient\PersonService\Struct\CreatePersonAttribute202006Response|\FGTCLB\HisClient\PersonService\Struct\CreatePersonIdentifierResponse|\FGTCLB\HisClient\PersonService\Struct\CreatePersonResponse|\FGTCLB\HisClient\PersonService\Struct\DeletePersonAttribute202006Response|\FGTCLB\HisClient\PersonService\Struct\DeletePersonIdentifierResponse|\FGTCLB\HisClient\PersonService\Struct\DeletePersonMarkOnlyResponse|\FGTCLB\HisClient\PersonService\Struct\FindPerson60Response|\FGTCLB\HisClient\PersonService\Struct\FindPerson201912Response|\FGTCLB\HisClient\PersonService\Struct\FindPersonIdentifiersResponse|\FGTCLB\HisClient\PersonService\Struct\FindPersonResponse|\FGTCLB\HisClient\PersonService\Struct\GenerateNewUsernameResponse|\FGTCLB\HisClient\PersonService\Struct\GeneratePersonIdentifierResponse|\FGTCLB\HisClient\PersonService\Struct\GetAllPersonAttributeTypesResponse|\FGTCLB\HisClient\PersonService\Struct\GetAllPersonPlaceholdersResponse|\FGTCLB\HisClient\PersonService\Struct\IsUsernameAlreadyAssignedResponse|\FGTCLB\HisClient\PersonService\Struct\ReadAllAcademicDegreesResponse|\FGTCLB\HisClient\PersonService\Struct\ReadAllGendersResponse|\FGTCLB\HisClient\PersonService\Struct\ReadAllPersonAttributesFromPersonResponse|\FGTCLB\HisClient\PersonService\Struct\ReadAllTitlesResponse|\FGTCLB\HisClient\PersonService\Struct\ReadPerson201806Response|\FGTCLB\HisClient\PersonService\Struct\ReadPerson201912Response|\FGTCLB\HisClient\PersonService\Struct\ReadPersonaldataResponse|\FGTCLB\HisClient\PersonService\Struct\ReadPersonAttributes202006Response|\FGTCLB\HisClient\PersonService\Struct\ReadPersonByIdentifierTypeAndValueResponse|\FGTCLB\HisClient\PersonService\Struct\ReadPersonIdentifiersResponse|\FGTCLB\HisClient\PersonService\Struct\ReadPersonResponse|\FGTCLB\HisClient\PersonService\Struct\SavePersonResponse|\FGTCLB\HisClient\PersonService\Struct\UpdatePerson201912Response|\FGTCLB\HisClient\PersonService\Struct\UpdatePersonAttribute202006Response|\FGTCLB\HisClient\PersonService\Struct\UpdatePersonResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
