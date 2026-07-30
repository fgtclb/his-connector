<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService\Service;

use SoapFault;
use FGTCLB\HisClientFacade\Soap\AbstractSoapService;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapService
{
    /**
     * Method to call the operation originally named childrenSizeOfOrgunit
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.orgtree.VIEW_ORGUNIT_TREE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenSizeOfOrgunit $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ChildrenSizeOfOrgunitResponse|bool
     */
    public function childrenSizeOfOrgunit(\FGTCLB\HisClient\OrgUnitService\Struct\ChildrenSizeOfOrgunit $parameters)
    {
        try {
            $this->setResult($resultChildrenSizeOfOrgunit = $this->getSoapClient()->__soapCall('childrenSizeOfOrgunit', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultChildrenSizeOfOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findAllVersionsByLid
     * Meta information extracted from the WSDL
     * - documentation: Look-up for all versions of an organizational unit. Will return a list of IDs and values of all available versions matching the given lid. SECURED BY [(cs.psv.orgtree.SEARCH_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\FindAllVersionsByLid $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindAllVersionsByLidResponse|bool
     */
    public function findAllVersionsByLid(\FGTCLB\HisClient\OrgUnitService\Struct\FindAllVersionsByLid $parameters)
    {
        try {
            $this->setResult($resultFindAllVersionsByLid = $this->getSoapClient()->__soapCall('findAllVersionsByLid', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindAllVersionsByLid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findOrgUnit
     * Meta information extracted from the WSDL
     * - documentation: Look-up for an organizational unit. Will return a distinct list of IDs of all those units that match all given criteria. SECURED BY [(cs.psv.orgtree.SEARCH_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnitResponse|bool
     */
    public function findOrgUnit(\FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit $parameters)
    {
        try {
            $this->setResult($resultFindOrgUnit = $this->getSoapClient()->__soapCall('findOrgUnit', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findOrgUnit60
     * Meta information extracted from the WSDL
     * - documentation: Look-up for an organizational unit. Will return a list of IDs and values of all those units that match all given criteria. SECURED BY [(cs.psv.orgtree.SEARCH_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit60 $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit60Response|bool
     */
    public function findOrgUnit60(\FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit60 $parameters)
    {
        try {
            $this->setResult($resultFindOrgUnit60 = $this->getSoapClient()->__soapCall('findOrgUnit60', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindOrgUnit60;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findOrgUnit61
     * Meta information extracted from the WSDL
     * - documentation: Look-up for an organizational unit. Will return a list of IDs and values of all those units that match all given criteria. SECURED BY [(cs.psv.orgtree.SEARCH_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61 $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61Response|bool
     */
    public function findOrgUnit61(\FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61 $parameters)
    {
        try {
            $this->setResult($resultFindOrgUnit61 = $this->getSoapClient()->__soapCall('findOrgUnit61', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindOrgUnit61;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgunitLid
     * Meta information extracted from the WSDL
     * - documentation: Load the lid of an organizational unit specified by a given id SECURED BY [(cs.psv.orgunit.VIEW_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\GetOrgunitLid $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\GetOrgunitLidResponse|bool
     */
    public function getOrgunitLid(\FGTCLB\HisClient\OrgUnitService\Struct\GetOrgunitLid $parameters)
    {
        try {
            $this->setResult($resultGetOrgunitLid = $this->getSoapClient()->__soapCall('getOrgunitLid', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgunitLid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgunitWithChildren
     * Meta information extracted from the WSDL
     * - documentation: Load all children units of an organizational unit specified by a given lid SECURED BY [(cs.psv.orgtree.VIEW_ORGUNIT_TREE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\GetOrgunitWithChildren $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\GetOrgunitWithChildrenResponse|bool
     */
    public function getOrgunitWithChildren(\FGTCLB\HisClient\OrgUnitService\Struct\GetOrgunitWithChildren $parameters)
    {
        try {
            $this->setResult($resultGetOrgunitWithChildren = $this->getSoapClient()->__soapCall('getOrgunitWithChildren', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgunitWithChildren;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUniversityLid
     * Meta information extracted from the WSDL
     * - documentation: Load long-living id of university SECURED BY [(cs.psv.orgtree.SEARCH_ORGUNIT or cs.psv.orgunit.VIEW_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\GetUniversityLid $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\GetUniversityLidResponse|bool
     */
    public function getUniversityLid(\FGTCLB\HisClient\OrgUnitService\Struct\GetUniversityLid $parameters)
    {
        try {
            $this->setResult($resultGetUniversityLid = $this->getSoapClient()->__soapCall('getUniversityLid', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUniversityLid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readOrgUnit
     * Meta information extracted from the WSDL
     * - documentation: Read all values of an existing organizational unit. Will return a list of IDs and values matching all given criteria. SECURED BY [(cs.psv.orgunit.VIEW_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnit $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitResponse|bool
     */
    public function readOrgUnit(\FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnit $parameters)
    {
        try {
            $this->setResult($resultReadOrgUnit = $this->getSoapClient()->__soapCall('readOrgUnit', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readOrgUnit61
     * Meta information extracted from the WSDL
     * - documentation: Read all values of an existing organizational unit. Will return a list of IDs and values matching all given criteria. SECURED BY [(cs.psv.orgunit.VIEW_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnit61 $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnit61Response|bool
     */
    public function readOrgUnit61(\FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnit61 $parameters)
    {
        try {
            $this->setResult($resultReadOrgUnit61 = $this->getSoapClient()->__soapCall('readOrgUnit61', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadOrgUnit61;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readOrgUnitsChildren
     * Meta information extracted from the WSDL
     * - documentation: Read all values of child elements belonging to an existing organizational unit (Must be specified by a given lid and date). Will return a list of IDs and values of all available child elements matching all given criteria. SECURED BY
     * [(cs.psv.orgtree.VIEW_ORGUNIT_TREE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitsChildren $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitsChildrenResponse|bool
     */
    public function readOrgUnitsChildren(\FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitsChildren $parameters)
    {
        try {
            $this->setResult($resultReadOrgUnitsChildren = $this->getSoapClient()->__soapCall('readOrgUnitsChildren', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadOrgUnitsChildren;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readOrgUnitsChildren61
     * Meta information extracted from the WSDL
     * - documentation: Read all values of child elements belonging to an existing organizational unit (Must be specified by a given lid and date). Will return a list of IDs and values of all available child elements matching all given criteria. SECURED BY
     * [(cs.psv.orgtree.VIEW_ORGUNIT_TREE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitsChildren61 $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitsChildren61Response|bool
     */
    public function readOrgUnitsChildren61(\FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitsChildren61 $parameters)
    {
        try {
            $this->setResult($resultReadOrgUnitsChildren61 = $this->getSoapClient()->__soapCall('readOrgUnitsChildren61', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadOrgUnitsChildren61;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readOrgunitById
     * Meta information extracted from the WSDL
     * - documentation: Read all values of an existing organizational unit specified by a given id. SECURED BY [(cs.psv.orgunit.VIEW_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgunitById $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgunitByIdResponse|bool
     */
    public function readOrgunitById(\FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgunitById $parameters)
    {
        try {
            $this->setResult($resultReadOrgunitById = $this->getSoapClient()->__soapCall('readOrgunitById', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadOrgunitById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named removeOrgunits
     * Meta information extracted from the WSDL
     * - documentation: Remove all versions of the orgunit. The right 'cs.psv.DELETE_ORGUNIT' is needed to use this method. SECURED BY [(cs.psv.orgunit.DELETE_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\RemoveOrgunits $parameters
     * @return void|bool
     */
    public function removeOrgunits(\FGTCLB\HisClient\OrgUnitService\Struct\RemoveOrgunits $parameters)
    {
        try {
            $this->setResult($resultRemoveOrgunits = $this->getSoapClient()->__soapCall('removeOrgunits', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveOrgunits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveNewOrgunit
     * Meta information extracted from the WSDL
     * - documentation: Save an initial build organizational unit. If validity parameters are not set, validity period defaults to 01.01.1900-31.12.2100. One of the following rights is needed to use this method: 'cs.psv.orgunit.EDIT_ORGUNIT',
     * 'cs.psv.orgunit.CREATE_ORGUNIT' SECURED BY [(cs.psv.orgunit.EDIT_ORGUNIT or cs.psv.orgunit.CREATE_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\SaveNewOrgunit $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SaveNewOrgunitResponse|bool
     */
    public function saveNewOrgunit(\FGTCLB\HisClient\OrgUnitService\Struct\SaveNewOrgunit $parameters)
    {
        try {
            $this->setResult($resultSaveNewOrgunit = $this->getSoapClient()->__soapCall('saveNewOrgunit', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveNewOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveNewVersionOfExistingOrgunit
     * Meta information extracted from the WSDL
     * - documentation: Save an new version of an existing organizational unit. The attribute id must contain the id of the old version of the orgunit. Same for attributes lid and versionedObjId (the latter equals lid). At least one of the two validity
     * attributes must be set to date which doesn't overlap with other versions of existing OrgUnit. One of the following rights is needed to use this method: 'cs.psv.orgunit.EDIT_ORGUNIT', 'cs.psv.orgunit.CREATE_ORGUNIT' SECURED BY
     * [(cs.psv.orgunit.EDIT_ORGUNIT or cs.psv.orgunit.CREATE_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\SaveNewVersionOfExistingOrgunit $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\SaveNewVersionOfExistingOrgunitResponse|bool
     */
    public function saveNewVersionOfExistingOrgunit(\FGTCLB\HisClient\OrgUnitService\Struct\SaveNewVersionOfExistingOrgunit $parameters)
    {
        try {
            $this->setResult($resultSaveNewVersionOfExistingOrgunit = $this->getSoapClient()->__soapCall('saveNewVersionOfExistingOrgunit', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveNewVersionOfExistingOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateOrgunit
     * Meta information extracted from the WSDL
     * - documentation: Update and save an existing organizational unit. SECURED BY [(cs.psv.orgunit.EDIT_ORGUNIT or cs.psv.orgunit.CREATE_ORGUNIT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\OrgUnitService\Struct\UpdateOrgunit $parameters
     * @return \FGTCLB\HisClient\OrgUnitService\Struct\UpdateOrgunitResponse|bool
     */
    public function updateOrgunit(\FGTCLB\HisClient\OrgUnitService\Struct\UpdateOrgunit $parameters)
    {
        try {
            $this->setResult($resultUpdateOrgunit = $this->getSoapClient()->__soapCall('updateOrgunit', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapService::getResult()
     * @return void|\FGTCLB\HisClient\OrgUnitService\Struct\ChildrenSizeOfOrgunitResponse|\FGTCLB\HisClient\OrgUnitService\Struct\FindAllVersionsByLidResponse|\FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit60Response|\FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnit61Response|\FGTCLB\HisClient\OrgUnitService\Struct\FindOrgUnitResponse|\FGTCLB\HisClient\OrgUnitService\Struct\GetOrgunitLidResponse|\FGTCLB\HisClient\OrgUnitService\Struct\GetOrgunitWithChildrenResponse|\FGTCLB\HisClient\OrgUnitService\Struct\GetUniversityLidResponse|\FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnit61Response|\FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgunitByIdResponse|\FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitResponse|\FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitsChildren61Response|\FGTCLB\HisClient\OrgUnitService\Struct\ReadOrgUnitsChildrenResponse|\FGTCLB\HisClient\OrgUnitService\Struct\SaveNewOrgunitResponse|\FGTCLB\HisClient\OrgUnitService\Struct\SaveNewVersionOfExistingOrgunitResponse|\FGTCLB\HisClient\OrgUnitService\Struct\UpdateOrgunitResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
