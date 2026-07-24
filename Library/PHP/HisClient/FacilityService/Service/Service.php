<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\FacilityService\Service;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named addSecondaryOrgunitToRoom
     * Meta information extracted from the WSDL
     * - documentation: Set/Add a secondary assignment from a room to a orgunit. A primary orgunit must be assigned first. SECURED BY [(cs.psv.orgunit.ASSIGN_ORGUNIT_ROOMS)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\AddSecondaryOrgunitToRoom $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\AddSecondaryOrgunitToRoomResponse|bool
     */
    public function addSecondaryOrgunitToRoom(\FGTCLB\HisClient\FacilityService\Struct\AddSecondaryOrgunitToRoom $parameters)
    {
        try {
            $this->setResult($resultAddSecondaryOrgunitToRoom = $this->getSoapClient()->__soapCall('addSecondaryOrgunitToRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddSecondaryOrgunitToRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createBuildingOpeninghoursEntry
     * Meta information extracted from the WSDL
     * - documentation: Creates the specified openinghours entry. SECURED BY [(cs.psv.facility.EDIT_BUILDING_OPENHOURS)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\CreateBuildingOpeninghoursEntry $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\CreateBuildingOpeninghoursEntryResponse|bool
     */
    public function createBuildingOpeninghoursEntry(\FGTCLB\HisClient\FacilityService\Struct\CreateBuildingOpeninghoursEntry $parameters)
    {
        try {
            $this->setResult($resultCreateBuildingOpeninghoursEntry = $this->getSoapClient()->__soapCall('createBuildingOpeninghoursEntry', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateBuildingOpeninghoursEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBuilding60
     * Meta information extracted from the WSDL
     * - documentation: Delete building with given id. SECURED BY [(cs.psv.facility.REMOVE_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\DeleteBuilding60 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\DeleteBuilding60Response|bool
     */
    public function deleteBuilding60(\FGTCLB\HisClient\FacilityService\Struct\DeleteBuilding60 $parameters)
    {
        try {
            $this->setResult($resultDeleteBuilding60 = $this->getSoapClient()->__soapCall('deleteBuilding60', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBuilding60;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBuildingOpeninghoursEntry
     * Meta information extracted from the WSDL
     * - documentation: Delete the specified openinghours entry SECURED BY [(cs.psv.facility.EDIT_BUILDING_OPENHOURS)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\DeleteBuildingOpeninghoursEntry $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\DeleteBuildingOpeninghoursEntryResponse|bool
     */
    public function deleteBuildingOpeninghoursEntry(\FGTCLB\HisClient\FacilityService\Struct\DeleteBuildingOpeninghoursEntry $parameters)
    {
        try {
            $this->setResult($resultDeleteBuildingOpeninghoursEntry = $this->getSoapClient()->__soapCall('deleteBuildingOpeninghoursEntry', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBuildingOpeninghoursEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCampus60
     * Meta information extracted from the WSDL
     * - documentation: Delete campus with given id. SECURED BY [(cs.psv.facility.REMOVE_FACILITY or cs.psv.facility.CREATE_CAMPUS)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\DeleteCampus60 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\DeleteCampus60Response|bool
     */
    public function deleteCampus60(\FGTCLB\HisClient\FacilityService\Struct\DeleteCampus60 $parameters)
    {
        try {
            $this->setResult($resultDeleteCampus60 = $this->getSoapClient()->__soapCall('deleteCampus60', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCampus60;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteFloor60
     * Meta information extracted from the WSDL
     * - documentation: Delete floor with given id. SECURED BY [(cs.psv.facility.REMOVE_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\DeleteFloor60 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\DeleteFloor60Response|bool
     */
    public function deleteFloor60(\FGTCLB\HisClient\FacilityService\Struct\DeleteFloor60 $parameters)
    {
        try {
            $this->setResult($resultDeleteFloor60 = $this->getSoapClient()->__soapCall('deleteFloor60', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteFloor60;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRoom60
     * Meta information extracted from the WSDL
     * - documentation: Delete room with given id. SECURED BY [(cs.psv.facility.room.EDIT_ROOM) and (cs.psv.facility.REMOVE_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\DeleteRoom60 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\DeleteRoom60Response|bool
     */
    public function deleteRoom60(\FGTCLB\HisClient\FacilityService\Struct\DeleteRoom60 $parameters)
    {
        try {
            $this->setResult($resultDeleteRoom60 = $this->getSoapClient()->__soapCall('deleteRoom60', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRoom60;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRoomComposition60
     * Meta information extracted from the WSDL
     * - documentation: Delete room composition with given id. SECURED BY [(cs.psv.facility.room.EDIT_ROOM) and (cs.psv.facility.REMOVE_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\DeleteRoomComposition60 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\DeleteRoomComposition60Response|bool
     */
    public function deleteRoomComposition60(\FGTCLB\HisClient\FacilityService\Struct\DeleteRoomComposition60 $parameters)
    {
        try {
            $this->setResult($resultDeleteRoomComposition60 = $this->getSoapClient()->__soapCall('deleteRoomComposition60', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRoomComposition60;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRoomSegment60
     * Meta information extracted from the WSDL
     * - documentation: Delete room segment with given id. SECURED BY [(cs.psv.facility.room.EDIT_ROOM) and (cs.psv.facility.REMOVE_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\DeleteRoomSegment60 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\DeleteRoomSegment60Response|bool
     */
    public function deleteRoomSegment60(\FGTCLB\HisClient\FacilityService\Struct\DeleteRoomSegment60 $parameters)
    {
        try {
            $this->setResult($resultDeleteRoomSegment60 = $this->getSoapClient()->__soapCall('deleteRoomSegment60', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRoomSegment60;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAllBuildings
     * Meta information extracted from the WSDL
     * - documentation: Retrieve all buildings. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadAllBuildings $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadAllBuildingsResponse|bool
     */
    public function readAllBuildings(\FGTCLB\HisClient\FacilityService\Struct\ReadAllBuildings $parameters)
    {
        try {
            $this->setResult($resultReadAllBuildings = $this->getSoapClient()->__soapCall('readAllBuildings', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAllBuildings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAllBuildingsOfCampus
     * Meta information extracted from the WSDL
     * - documentation: Retrieve all buildings of campus with given id. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadAllBuildingsOfCampus $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadAllBuildingsOfCampusResponse|bool
     */
    public function readAllBuildingsOfCampus(\FGTCLB\HisClient\FacilityService\Struct\ReadAllBuildingsOfCampus $parameters)
    {
        try {
            $this->setResult($resultReadAllBuildingsOfCampus = $this->getSoapClient()->__soapCall('readAllBuildingsOfCampus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAllBuildingsOfCampus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAllCampus
     * Meta information extracted from the WSDL
     * - documentation: Retrieve all campus. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadAllCampus $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadAllCampusResponse|bool
     */
    public function readAllCampus(\FGTCLB\HisClient\FacilityService\Struct\ReadAllCampus $parameters)
    {
        try {
            $this->setResult($resultReadAllCampus = $this->getSoapClient()->__soapCall('readAllCampus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAllCampus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAllFloorsOfBuilding
     * Meta information extracted from the WSDL
     * - documentation: Retrieve all floors of building with given id. SECURED BY [(cs.psv.facility.DIALOG_FACILITY_STRUCTURE or cs.psv.facility.EDIT_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadAllFloorsOfBuilding $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadAllFloorsOfBuildingResponse|bool
     */
    public function readAllFloorsOfBuilding(\FGTCLB\HisClient\FacilityService\Struct\ReadAllFloorsOfBuilding $parameters)
    {
        try {
            $this->setResult($resultReadAllFloorsOfBuilding = $this->getSoapClient()->__soapCall('readAllFloorsOfBuilding', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAllFloorsOfBuilding;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readBuilding
     * Meta information extracted from the WSDL
     * - documentation: Retrieve building with given ID. Returns null if no building exists with that ID. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadBuilding $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuildingResponse|bool
     */
    public function readBuilding(\FGTCLB\HisClient\FacilityService\Struct\ReadBuilding $parameters)
    {
        try {
            $this->setResult($resultReadBuilding = $this->getSoapClient()->__soapCall('readBuilding', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadBuilding;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readBuilding202006
     * Meta information extracted from the WSDL
     * - documentation: Retrieve building with given ID. Returns null if no building exists with that ID. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202006 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202006Response|bool
     */
    public function readBuilding202006(\FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202006 $parameters)
    {
        try {
            $this->setResult($resultReadBuilding202006 = $this->getSoapClient()->__soapCall('readBuilding202006', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadBuilding202006;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readBuilding202106
     * Meta information extracted from the WSDL
     * - documentation: Retrieve building with given ID. Returns null if no building exists with that ID. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202106 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202106Response|bool
     */
    public function readBuilding202106(\FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202106 $parameters)
    {
        try {
            $this->setResult($resultReadBuilding202106 = $this->getSoapClient()->__soapCall('readBuilding202106', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadBuilding202106;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readBuilding202112
     * Meta information extracted from the WSDL
     * - documentation: Retrieve building with given ID. Returns null if no building exists with that ID. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202112 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202112Response|bool
     */
    public function readBuilding202112(\FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202112 $parameters)
    {
        try {
            $this->setResult($resultReadBuilding202112 = $this->getSoapClient()->__soapCall('readBuilding202112', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadBuilding202112;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readBuildingOpeninghours
     * Meta information extracted from the WSDL
     * - documentation: Retrieve opening hours of the specified building SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghours $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghoursResponse|bool
     */
    public function readBuildingOpeninghours(\FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghours $parameters)
    {
        try {
            $this->setResult($resultReadBuildingOpeninghours = $this->getSoapClient()->__soapCall('readBuildingOpeninghours', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadBuildingOpeninghours;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readBuildingOpeninghoursForDate
     * Meta information extracted from the WSDL
     * - documentation: Retrieve the timeslots indicating when the requested building is open at the given date. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghoursForDate $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghoursForDateResponse|bool
     */
    public function readBuildingOpeninghoursForDate(\FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghoursForDate $parameters)
    {
        try {
            $this->setResult($resultReadBuildingOpeninghoursForDate = $this->getSoapClient()->__soapCall('readBuildingOpeninghoursForDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadBuildingOpeninghoursForDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readCampus
     * Meta information extracted from the WSDL
     * - documentation: Retrieve campus with given id. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadCampus $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadCampusResponse|bool
     */
    public function readCampus(\FGTCLB\HisClient\FacilityService\Struct\ReadCampus $parameters)
    {
        try {
            $this->setResult($resultReadCampus = $this->getSoapClient()->__soapCall('readCampus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadCampus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readCampus202106
     * Meta information extracted from the WSDL
     * - documentation: Retrieve campus with given id. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadCampus202106 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadCampus202106Response|bool
     */
    public function readCampus202106(\FGTCLB\HisClient\FacilityService\Struct\ReadCampus202106 $parameters)
    {
        try {
            $this->setResult($resultReadCampus202106 = $this->getSoapClient()->__soapCall('readCampus202106', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadCampus202106;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readCampus202112
     * Meta information extracted from the WSDL
     * - documentation: Retrieve campus with given id. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadCampus202112 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadCampus202112Response|bool
     */
    public function readCampus202112(\FGTCLB\HisClient\FacilityService\Struct\ReadCampus202112 $parameters)
    {
        try {
            $this->setResult($resultReadCampus202112 = $this->getSoapClient()->__soapCall('readCampus202112', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadCampus202112;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readFloor
     * Meta information extracted from the WSDL
     * - documentation: Retrieve floor with given id. SECURED BY [(cs.psv.facility.DIALOG_FACILITY_STRUCTURE or cs.psv.facility.EDIT_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadFloor $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadFloorResponse|bool
     */
    public function readFloor(\FGTCLB\HisClient\FacilityService\Struct\ReadFloor $parameters)
    {
        try {
            $this->setResult($resultReadFloor = $this->getSoapClient()->__soapCall('readFloor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadFloor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readFloor202106
     * Meta information extracted from the WSDL
     * - documentation: Retrieve floor with given id. SECURED BY [(cs.psv.facility.DIALOG_FACILITY_STRUCTURE or cs.psv.facility.EDIT_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadFloor202106 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadFloor202106Response|bool
     */
    public function readFloor202106(\FGTCLB\HisClient\FacilityService\Struct\ReadFloor202106 $parameters)
    {
        try {
            $this->setResult($resultReadFloor202106 = $this->getSoapClient()->__soapCall('readFloor202106', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadFloor202106;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readFloor202112
     * Meta information extracted from the WSDL
     * - documentation: Retrieve floor with given id. SECURED BY [(cs.psv.facility.DIALOG_FACILITY_STRUCTURE or cs.psv.facility.EDIT_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadFloor202112 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadFloor202112Response|bool
     */
    public function readFloor202112(\FGTCLB\HisClient\FacilityService\Struct\ReadFloor202112 $parameters)
    {
        try {
            $this->setResult($resultReadFloor202112 = $this->getSoapClient()->__soapCall('readFloor202112', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadFloor202112;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readRoom
     * Meta information extracted from the WSDL
     * - documentation: For a given roomID, get the corresponding room (e.g. lecture hall, examination room 1). SECURED BY [(cs.psv.facility.room.VIEW_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadRoom $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomResponse|bool
     */
    public function readRoom(\FGTCLB\HisClient\FacilityService\Struct\ReadRoom $parameters)
    {
        try {
            $this->setResult($resultReadRoom = $this->getSoapClient()->__soapCall('readRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readRoom202106
     * Meta information extracted from the WSDL
     * - documentation: For a given roomID, get the corresponding room (e.g. lecture hall, examination room 1). SECURED BY [(cs.psv.facility.room.VIEW_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadRoom202106 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoom202106Response|bool
     */
    public function readRoom202106(\FGTCLB\HisClient\FacilityService\Struct\ReadRoom202106 $parameters)
    {
        try {
            $this->setResult($resultReadRoom202106 = $this->getSoapClient()->__soapCall('readRoom202106', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadRoom202106;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readRoom202112
     * Meta information extracted from the WSDL
     * - documentation: For a given roomID, get the corresponding room (e.g. lecture hall, examination room 1). SECURED BY [(cs.psv.facility.room.VIEW_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadRoom202112 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoom202112Response|bool
     */
    public function readRoom202112(\FGTCLB\HisClient\FacilityService\Struct\ReadRoom202112 $parameters)
    {
        try {
            $this->setResult($resultReadRoom202112 = $this->getSoapClient()->__soapCall('readRoom202112', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadRoom202112;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readRoom61
     * Meta information extracted from the WSDL
     * - documentation: For a given roomID, get the corresponding room (e.g. lecture hall, examination room 1). Works as well for RoomSegments and Compositions. SECURED BY [(cs.psv.facility.room.VIEW_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadRoom61 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoom61Response|bool
     */
    public function readRoom61(\FGTCLB\HisClient\FacilityService\Struct\ReadRoom61 $parameters)
    {
        try {
            $this->setResult($resultReadRoom61 = $this->getSoapClient()->__soapCall('readRoom61', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadRoom61;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readRoomComposition
     * Meta information extracted from the WSDL
     * - documentation: Retrieve room composition with given id. SECURED BY [(cs.psv.facility.room.VIEW_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadRoomComposition $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomCompositionResponse|bool
     */
    public function readRoomComposition(\FGTCLB\HisClient\FacilityService\Struct\ReadRoomComposition $parameters)
    {
        try {
            $this->setResult($resultReadRoomComposition = $this->getSoapClient()->__soapCall('readRoomComposition', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadRoomComposition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readRoomComposition202106
     * Meta information extracted from the WSDL
     * - documentation: Retrieve room composition with given id. SECURED BY [(cs.psv.facility.room.VIEW_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadRoomComposition202106 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomComposition202106Response|bool
     */
    public function readRoomComposition202106(\FGTCLB\HisClient\FacilityService\Struct\ReadRoomComposition202106 $parameters)
    {
        try {
            $this->setResult($resultReadRoomComposition202106 = $this->getSoapClient()->__soapCall('readRoomComposition202106', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadRoomComposition202106;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readRoomLarge
     * Meta information extracted from the WSDL
     * - documentation: For a given roomID, get the corresponding room (Search of an abstract room). SECURED BY [(cs.psv.facility.room.VIEW_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadRoomLarge $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomLargeResponse|bool
     */
    public function readRoomLarge(\FGTCLB\HisClient\FacilityService\Struct\ReadRoomLarge $parameters)
    {
        try {
            $this->setResult($resultReadRoomLarge = $this->getSoapClient()->__soapCall('readRoomLarge', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadRoomLarge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readRoomLarge201706
     * Meta information extracted from the WSDL
     * - documentation: For a given roomID, get the corresponding room (Search of an abstract room). SECURED BY [(cs.psv.facility.room.VIEW_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadRoomLarge201706 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomLarge201706Response|bool
     */
    public function readRoomLarge201706(\FGTCLB\HisClient\FacilityService\Struct\ReadRoomLarge201706 $parameters)
    {
        try {
            $this->setResult($resultReadRoomLarge201706 = $this->getSoapClient()->__soapCall('readRoomLarge201706', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadRoomLarge201706;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readRoomSegment
     * Meta information extracted from the WSDL
     * - documentation: Retrieve room segment with given id. SECURED BY [(cs.psv.facility.room.VIEW_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegment $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegmentResponse|bool
     */
    public function readRoomSegment(\FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegment $parameters)
    {
        try {
            $this->setResult($resultReadRoomSegment = $this->getSoapClient()->__soapCall('readRoomSegment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadRoomSegment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readRoomSegment202106
     * Meta information extracted from the WSDL
     * - documentation: Retrieve room segment with given id. SECURED BY [(cs.psv.facility.room.VIEW_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegment202106 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegment202106Response|bool
     */
    public function readRoomSegment202106(\FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegment202106 $parameters)
    {
        try {
            $this->setResult($resultReadRoomSegment202106 = $this->getSoapClient()->__soapCall('readRoomSegment202106', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadRoomSegment202106;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readRoomSegment202112
     * Meta information extracted from the WSDL
     * - documentation: Retrieve room segment with given id. SECURED BY [(cs.psv.facility.room.VIEW_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegment202112 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegment202112Response|bool
     */
    public function readRoomSegment202112(\FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegment202112 $parameters)
    {
        try {
            $this->setResult($resultReadRoomSegment202112 = $this->getSoapClient()->__soapCall('readRoomSegment202112', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadRoomSegment202112;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named removeEquipmentFromRoom
     * Meta information extracted from the WSDL
     * - documentation: Removes equipment from room. SECURED BY [(cs.psv.facility.MANAGE_ROOM_EQUIPMENT)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RemoveEquipmentFromRoom $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\RemoveEquipmentFromRoomResponse|bool
     */
    public function removeEquipmentFromRoom(\FGTCLB\HisClient\FacilityService\Struct\RemoveEquipmentFromRoom $parameters)
    {
        try {
            $this->setResult($resultRemoveEquipmentFromRoom = $this->getSoapClient()->__soapCall('removeEquipmentFromRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveEquipmentFromRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named removeSecondaryOrgunitFromRoom
     * Meta information extracted from the WSDL
     * - documentation: Remove a secondary orgunit assignment from a room. SECURED BY [(cs.psv.orgunit.ASSIGN_ORGUNIT_ROOMS)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\RemoveSecondaryOrgunitFromRoom $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\RemoveSecondaryOrgunitFromRoomResponse|bool
     */
    public function removeSecondaryOrgunitFromRoom(\FGTCLB\HisClient\FacilityService\Struct\RemoveSecondaryOrgunitFromRoom $parameters)
    {
        try {
            $this->setResult($resultRemoveSecondaryOrgunitFromRoom = $this->getSoapClient()->__soapCall('removeSecondaryOrgunitFromRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveSecondaryOrgunitFromRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBuilding
     * Meta information extracted from the WSDL
     * - documentation: Store building and return id. SECURED BY [(cs.psv.facility.EDIT_FACILITY or cs.bia.costaccounting.CREATE_DATA)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveBuilding $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveBuildingResponse|bool
     */
    public function saveBuilding(\FGTCLB\HisClient\FacilityService\Struct\SaveBuilding $parameters)
    {
        try {
            $this->setResult($resultSaveBuilding = $this->getSoapClient()->__soapCall('saveBuilding', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBuilding;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBuilding202106
     * Meta information extracted from the WSDL
     * - documentation: Save or update building and return id. SECURED BY [(cs.psv.facility.EDIT_FACILITY or cs.bia.costaccounting.CREATE_DATA) and (cs.psv.facility.EDIT_FACILITY or cs.bia.costaccounting.CREATE_DATA)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveBuilding202106 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveBuilding202106Response|bool
     */
    public function saveBuilding202106(\FGTCLB\HisClient\FacilityService\Struct\SaveBuilding202106 $parameters)
    {
        try {
            $this->setResult($resultSaveBuilding202106 = $this->getSoapClient()->__soapCall('saveBuilding202106', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBuilding202106;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBuilding202112
     * Meta information extracted from the WSDL
     * - documentation: Save or update building and return id. SECURED BY [(cs.psv.facility.EDIT_FACILITY or cs.bia.costaccounting.CREATE_DATA) and (cs.psv.facility.EDIT_FACILITY or cs.bia.costaccounting.CREATE_DATA)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveBuilding202112 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveBuilding202112Response|bool
     */
    public function saveBuilding202112(\FGTCLB\HisClient\FacilityService\Struct\SaveBuilding202112 $parameters)
    {
        try {
            $this->setResult($resultSaveBuilding202112 = $this->getSoapClient()->__soapCall('saveBuilding202112', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBuilding202112;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCampus
     * Meta information extracted from the WSDL
     * - documentation: Store campus and return id. SECURED BY [(cs.psv.facility.EDIT_FACILITY or cs.psv.facility.CREATE_CAMPUS or cs.bia.costaccounting.CREATE_DATA)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveCampus $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveCampusResponse|bool
     */
    public function saveCampus(\FGTCLB\HisClient\FacilityService\Struct\SaveCampus $parameters)
    {
        try {
            $this->setResult($resultSaveCampus = $this->getSoapClient()->__soapCall('saveCampus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCampus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCampus202106
     * Meta information extracted from the WSDL
     * - documentation: Store or update campus and return id. SECURED BY [(cs.psv.facility.EDIT_FACILITY or cs.psv.facility.CREATE_CAMPUS or cs.bia.costaccounting.CREATE_DATA)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveCampus202106 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveCampus202106Response|bool
     */
    public function saveCampus202106(\FGTCLB\HisClient\FacilityService\Struct\SaveCampus202106 $parameters)
    {
        try {
            $this->setResult($resultSaveCampus202106 = $this->getSoapClient()->__soapCall('saveCampus202106', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCampus202106;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCampus202112
     * Meta information extracted from the WSDL
     * - documentation: Store or update campus and return id. SECURED BY [(cs.psv.facility.EDIT_FACILITY or cs.psv.facility.CREATE_CAMPUS or cs.bia.costaccounting.CREATE_DATA)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveCampus202112 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveCampus202112Response|bool
     */
    public function saveCampus202112(\FGTCLB\HisClient\FacilityService\Struct\SaveCampus202112 $parameters)
    {
        try {
            $this->setResult($resultSaveCampus202112 = $this->getSoapClient()->__soapCall('saveCampus202112', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCampus202112;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveFloor
     * Meta information extracted from the WSDL
     * - documentation: Store floor and return id. SECURED BY [(cs.psv.facility.EDIT_FACILITY or cs.bia.costaccounting.CREATE_DATA or cs.bia.costaccounting.VIEW_DATA)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveFloor $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveFloorResponse|bool
     */
    public function saveFloor(\FGTCLB\HisClient\FacilityService\Struct\SaveFloor $parameters)
    {
        try {
            $this->setResult($resultSaveFloor = $this->getSoapClient()->__soapCall('saveFloor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveFloor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveFloor202106
     * Meta information extracted from the WSDL
     * - documentation: Store or update floor and return id. SECURED BY [(cs.psv.facility.EDIT_FACILITY or cs.bia.costaccounting.CREATE_DATA or cs.bia.costaccounting.VIEW_DATA)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveFloor202106 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveFloor202106Response|bool
     */
    public function saveFloor202106(\FGTCLB\HisClient\FacilityService\Struct\SaveFloor202106 $parameters)
    {
        try {
            $this->setResult($resultSaveFloor202106 = $this->getSoapClient()->__soapCall('saveFloor202106', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveFloor202106;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveFloor202112
     * Meta information extracted from the WSDL
     * - documentation: Store or update floor and return id. SECURED BY [(cs.psv.facility.EDIT_FACILITY or cs.bia.costaccounting.CREATE_DATA or cs.bia.costaccounting.VIEW_DATA)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveFloor202112 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveFloor202112Response|bool
     */
    public function saveFloor202112(\FGTCLB\HisClient\FacilityService\Struct\SaveFloor202112 $parameters)
    {
        try {
            $this->setResult($resultSaveFloor202112 = $this->getSoapClient()->__soapCall('saveFloor202112', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveFloor202112;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRoom
     * Meta information extracted from the WSDL
     * - documentation: Store room and return id. SECURED BY [(cs.psv.facility.room.EDIT_ROOM) and (cs.psv.facility.room.EDIT_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveRoom $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoomResponse|bool
     */
    public function saveRoom(\FGTCLB\HisClient\FacilityService\Struct\SaveRoom $parameters)
    {
        try {
            $this->setResult($resultSaveRoom = $this->getSoapClient()->__soapCall('saveRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRoom202006
     * Meta information extracted from the WSDL
     * - documentation: Store room and return id. SECURED BY [(cs.psv.facility.room.EDIT_ROOM) and (cs.psv.facility.room.EDIT_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveRoom202006 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoom202006Response|bool
     */
    public function saveRoom202006(\FGTCLB\HisClient\FacilityService\Struct\SaveRoom202006 $parameters)
    {
        try {
            $this->setResult($resultSaveRoom202006 = $this->getSoapClient()->__soapCall('saveRoom202006', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRoom202006;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRoom202106
     * Meta information extracted from the WSDL
     * - documentation: Store room and return id. SECURED BY [(cs.psv.facility.room.EDIT_ROOM) and (cs.psv.facility.room.EDIT_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveRoom202106 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoom202106Response|bool
     */
    public function saveRoom202106(\FGTCLB\HisClient\FacilityService\Struct\SaveRoom202106 $parameters)
    {
        try {
            $this->setResult($resultSaveRoom202106 = $this->getSoapClient()->__soapCall('saveRoom202106', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRoom202106;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRoom202112
     * Meta information extracted from the WSDL
     * - documentation: Store room and return id. SECURED BY [(cs.psv.facility.room.EDIT_ROOM) and (cs.psv.facility.room.EDIT_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveRoom202112 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoom202112Response|bool
     */
    public function saveRoom202112(\FGTCLB\HisClient\FacilityService\Struct\SaveRoom202112 $parameters)
    {
        try {
            $this->setResult($resultSaveRoom202112 = $this->getSoapClient()->__soapCall('saveRoom202112', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRoom202112;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRoomComposition
     * Meta information extracted from the WSDL
     * - documentation: Store room composition and return id. SECURED BY [(cs.psv.facility.room.EDIT_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveRoomComposition $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoomCompositionResponse|bool
     */
    public function saveRoomComposition(\FGTCLB\HisClient\FacilityService\Struct\SaveRoomComposition $parameters)
    {
        try {
            $this->setResult($resultSaveRoomComposition = $this->getSoapClient()->__soapCall('saveRoomComposition', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRoomComposition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRoomComposition202106
     * Meta information extracted from the WSDL
     * - documentation: Store room composition and return id. SECURED BY [(cs.psv.facility.room.EDIT_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveRoomComposition202106 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoomComposition202106Response|bool
     */
    public function saveRoomComposition202106(\FGTCLB\HisClient\FacilityService\Struct\SaveRoomComposition202106 $parameters)
    {
        try {
            $this->setResult($resultSaveRoomComposition202106 = $this->getSoapClient()->__soapCall('saveRoomComposition202106', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRoomComposition202106;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRoomSegment
     * Meta information extracted from the WSDL
     * - documentation: Store room segment and return id. SECURED BY [(cs.psv.facility.room.EDIT_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegment $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegmentResponse|bool
     */
    public function saveRoomSegment(\FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegment $parameters)
    {
        try {
            $this->setResult($resultSaveRoomSegment = $this->getSoapClient()->__soapCall('saveRoomSegment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRoomSegment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRoomSegment202106
     * Meta information extracted from the WSDL
     * - documentation: Store room segment and return id. SECURED BY [(cs.psv.facility.room.EDIT_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegment202106 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegment202106Response|bool
     */
    public function saveRoomSegment202106(\FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegment202106 $parameters)
    {
        try {
            $this->setResult($resultSaveRoomSegment202106 = $this->getSoapClient()->__soapCall('saveRoomSegment202106', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRoomSegment202106;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRoomSegment202112
     * Meta information extracted from the WSDL
     * - documentation: Store room segment and return id. SECURED BY [(cs.psv.facility.room.EDIT_ROOM)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegment202112 $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegment202112Response|bool
     */
    public function saveRoomSegment202112(\FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegment202112 $parameters)
    {
        try {
            $this->setResult($resultSaveRoomSegment202112 = $this->getSoapClient()->__soapCall('saveRoomSegment202112', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRoomSegment202112;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named search
     * Meta information extracted from the WSDL
     * - documentation: Detailed look-up for a room. Will return a distinct list of IDs of all those rooms matching all given criteria. SECURED BY [(cs.psv.facility.SEARCH_ROOM or cs.psv.facility.VIEW_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\Search $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchResponse|bool
     */
    public function search(\FGTCLB\HisClient\FacilityService\Struct\Search $parameters)
    {
        try {
            $this->setResult($resultSearch = $this->getSoapClient()->__soapCall('search', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearch;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchBuilding
     * Meta information extracted from the WSDL
     * - documentation: Retrieve all ID's of buildings SECURED BY [(cs.psv.facility.VIEW_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SearchBuilding $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchBuildingResponse|bool
     */
    public function searchBuilding(\FGTCLB\HisClient\FacilityService\Struct\SearchBuilding $parameters)
    {
        try {
            $this->setResult($resultSearchBuilding = $this->getSoapClient()->__soapCall('searchBuilding', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchBuilding;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchFloor
     * Meta information extracted from the WSDL
     * - documentation: Retrieve all ID's of floors SECURED BY [(cs.psv.facility.VIEW_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SearchFloor $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchFloorResponse|bool
     */
    public function searchFloor(\FGTCLB\HisClient\FacilityService\Struct\SearchFloor $parameters)
    {
        try {
            $this->setResult($resultSearchFloor = $this->getSoapClient()->__soapCall('searchFloor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchFloor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchRoom
     * Meta information extracted from the WSDL
     * - documentation: Detailed look-up for a room. Will return a distinct list of IDs of all those rooms matching all given criteria. SECURED BY [(cs.psv.facility.SEARCH_ROOM or cs.psv.facility.VIEW_FACILITY)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SearchRoom $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SearchRoomResponse|bool
     */
    public function searchRoom(\FGTCLB\HisClient\FacilityService\Struct\SearchRoom $parameters)
    {
        try {
            $this->setResult($resultSearchRoom = $this->getSoapClient()->__soapCall('searchRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setEquipmentToRoom
     * Meta information extracted from the WSDL
     * - documentation: Adds equipment to room. SECURED BY [(cs.psv.facility.MANAGE_ROOM_EQUIPMENT)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SetEquipmentToRoom $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SetEquipmentToRoomResponse|bool
     */
    public function setEquipmentToRoom(\FGTCLB\HisClient\FacilityService\Struct\SetEquipmentToRoom $parameters)
    {
        try {
            $this->setResult($resultSetEquipmentToRoom = $this->getSoapClient()->__soapCall('setEquipmentToRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetEquipmentToRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setOrgunitToRoom
     * Meta information extracted from the WSDL
     * - documentation: Setting an assignment from a room to a facility. SECURED BY [(cs.psv.orgunit.ASSIGN_ORGUNIT_ROOMS)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SetOrgunitToRoom $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SetOrgunitToRoomResponse|bool
     */
    public function setOrgunitToRoom(\FGTCLB\HisClient\FacilityService\Struct\SetOrgunitToRoom $parameters)
    {
        try {
            $this->setResult($resultSetOrgunitToRoom = $this->getSoapClient()->__soapCall('setOrgunitToRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetOrgunitToRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setPrimaryOrgunitToRoom
     * Meta information extracted from the WSDL
     * - documentation: Setting an primary assignment from a room to a orgunit. SECURED BY [(cs.psv.orgunit.ASSIGN_ORGUNIT_ROOMS)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\SetPrimaryOrgunitToRoom $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\SetPrimaryOrgunitToRoomResponse|bool
     */
    public function setPrimaryOrgunitToRoom(\FGTCLB\HisClient\FacilityService\Struct\SetPrimaryOrgunitToRoom $parameters)
    {
        try {
            $this->setResult($resultSetPrimaryOrgunitToRoom = $this->getSoapClient()->__soapCall('setPrimaryOrgunitToRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetPrimaryOrgunitToRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateBuildingOpeninghoursEntry
     * Meta information extracted from the WSDL
     * - documentation: Updates the specified openinghours entry. SECURED BY [(cs.psv.facility.EDIT_BUILDING_OPENHOURS)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\UpdateBuildingOpeninghoursEntry $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\UpdateBuildingOpeninghoursEntryResponse|bool
     */
    public function updateBuildingOpeninghoursEntry(\FGTCLB\HisClient\FacilityService\Struct\UpdateBuildingOpeninghoursEntry $parameters)
    {
        try {
            $this->setResult($resultUpdateBuildingOpeninghoursEntry = $this->getSoapClient()->__soapCall('updateBuildingOpeninghoursEntry', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateBuildingOpeninghoursEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePlanningProperty
     * Meta information extracted from the WSDL
     * - documentation: Updates the planning properties, e.g. centralised, of the room. SECURED BY [(cs.psv.facility.room.EDIT_PLANNING_ATTRIBUTE) and (cs.psv.facility.room.EDIT_PLANNING_ATTRIBUTE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\FacilityService\Struct\UpdatePlanningProperty $parameters
     * @return \FGTCLB\HisClient\FacilityService\Struct\UpdatePlanningPropertyResponse|bool
     */
    public function updatePlanningProperty(\FGTCLB\HisClient\FacilityService\Struct\UpdatePlanningProperty $parameters)
    {
        try {
            $this->setResult($resultUpdatePlanningProperty = $this->getSoapClient()->__soapCall('updatePlanningProperty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePlanningProperty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \FGTCLB\HisClient\FacilityService\Struct\AddSecondaryOrgunitToRoomResponse|\FGTCLB\HisClient\FacilityService\Struct\CreateBuildingOpeninghoursEntryResponse|\FGTCLB\HisClient\FacilityService\Struct\DeleteBuilding60Response|\FGTCLB\HisClient\FacilityService\Struct\DeleteBuildingOpeninghoursEntryResponse|\FGTCLB\HisClient\FacilityService\Struct\DeleteCampus60Response|\FGTCLB\HisClient\FacilityService\Struct\DeleteFloor60Response|\FGTCLB\HisClient\FacilityService\Struct\DeleteRoom60Response|\FGTCLB\HisClient\FacilityService\Struct\DeleteRoomComposition60Response|\FGTCLB\HisClient\FacilityService\Struct\DeleteRoomSegment60Response|\FGTCLB\HisClient\FacilityService\Struct\ReadAllBuildingsOfCampusResponse|\FGTCLB\HisClient\FacilityService\Struct\ReadAllBuildingsResponse|\FGTCLB\HisClient\FacilityService\Struct\ReadAllCampusResponse|\FGTCLB\HisClient\FacilityService\Struct\ReadAllFloorsOfBuildingResponse|\FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202006Response|\FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202106Response|\FGTCLB\HisClient\FacilityService\Struct\ReadBuilding202112Response|\FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghoursForDateResponse|\FGTCLB\HisClient\FacilityService\Struct\ReadBuildingOpeninghoursResponse|\FGTCLB\HisClient\FacilityService\Struct\ReadBuildingResponse|\FGTCLB\HisClient\FacilityService\Struct\ReadCampus202106Response|\FGTCLB\HisClient\FacilityService\Struct\ReadCampus202112Response|\FGTCLB\HisClient\FacilityService\Struct\ReadCampusResponse|\FGTCLB\HisClient\FacilityService\Struct\ReadFloor202106Response|\FGTCLB\HisClient\FacilityService\Struct\ReadFloor202112Response|\FGTCLB\HisClient\FacilityService\Struct\ReadFloorResponse|\FGTCLB\HisClient\FacilityService\Struct\ReadRoom61Response|\FGTCLB\HisClient\FacilityService\Struct\ReadRoom202106Response|\FGTCLB\HisClient\FacilityService\Struct\ReadRoom202112Response|\FGTCLB\HisClient\FacilityService\Struct\ReadRoomComposition202106Response|\FGTCLB\HisClient\FacilityService\Struct\ReadRoomCompositionResponse|\FGTCLB\HisClient\FacilityService\Struct\ReadRoomLarge201706Response|\FGTCLB\HisClient\FacilityService\Struct\ReadRoomLargeResponse|\FGTCLB\HisClient\FacilityService\Struct\ReadRoomResponse|\FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegment202106Response|\FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegment202112Response|\FGTCLB\HisClient\FacilityService\Struct\ReadRoomSegmentResponse|\FGTCLB\HisClient\FacilityService\Struct\RemoveEquipmentFromRoomResponse|\FGTCLB\HisClient\FacilityService\Struct\RemoveSecondaryOrgunitFromRoomResponse|\FGTCLB\HisClient\FacilityService\Struct\SaveBuilding202106Response|\FGTCLB\HisClient\FacilityService\Struct\SaveBuilding202112Response|\FGTCLB\HisClient\FacilityService\Struct\SaveBuildingResponse|\FGTCLB\HisClient\FacilityService\Struct\SaveCampus202106Response|\FGTCLB\HisClient\FacilityService\Struct\SaveCampus202112Response|\FGTCLB\HisClient\FacilityService\Struct\SaveCampusResponse|\FGTCLB\HisClient\FacilityService\Struct\SaveFloor202106Response|\FGTCLB\HisClient\FacilityService\Struct\SaveFloor202112Response|\FGTCLB\HisClient\FacilityService\Struct\SaveFloorResponse|\FGTCLB\HisClient\FacilityService\Struct\SaveRoom202006Response|\FGTCLB\HisClient\FacilityService\Struct\SaveRoom202106Response|\FGTCLB\HisClient\FacilityService\Struct\SaveRoom202112Response|\FGTCLB\HisClient\FacilityService\Struct\SaveRoomComposition202106Response|\FGTCLB\HisClient\FacilityService\Struct\SaveRoomCompositionResponse|\FGTCLB\HisClient\FacilityService\Struct\SaveRoomResponse|\FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegment202106Response|\FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegment202112Response|\FGTCLB\HisClient\FacilityService\Struct\SaveRoomSegmentResponse|\FGTCLB\HisClient\FacilityService\Struct\SearchBuildingResponse|\FGTCLB\HisClient\FacilityService\Struct\SearchFloorResponse|\FGTCLB\HisClient\FacilityService\Struct\SearchResponse|\FGTCLB\HisClient\FacilityService\Struct\SearchRoomResponse|\FGTCLB\HisClient\FacilityService\Struct\SetEquipmentToRoomResponse|\FGTCLB\HisClient\FacilityService\Struct\SetOrgunitToRoomResponse|\FGTCLB\HisClient\FacilityService\Struct\SetPrimaryOrgunitToRoomResponse|\FGTCLB\HisClient\FacilityService\Struct\UpdateBuildingOpeninghoursEntryResponse|\FGTCLB\HisClient\FacilityService\Struct\UpdatePlanningPropertyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
