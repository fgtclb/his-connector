<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService\Service;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named createRoomAttributeForRoom
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.facility.room.EDIT_ROOM_ATTRIBUTE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeForRoom $parameters
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeForRoomResponse|bool
     */
    public function createRoomAttributeForRoom(\FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeForRoom $parameters)
    {
        try {
            $this->setResult($resultCreateRoomAttributeForRoom = $this->getSoapClient()->__soapCall('createRoomAttributeForRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateRoomAttributeForRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createRoomAttributeType
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.facility.roomattribute.ADMINISTRATE_ROOMATTRIBUTE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeType $parameters
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeTypeResponse|bool
     */
    public function createRoomAttributeType(\FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeType $parameters)
    {
        try {
            $this->setResult($resultCreateRoomAttributeType = $this->getSoapClient()->__soapCall('createRoomAttributeType', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateRoomAttributeType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRoomAttributeFromRoom
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.facility.room.EDIT_ROOM_ATTRIBUTE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\DeleteRoomAttributeFromRoom $parameters
     * @return void|bool
     */
    public function deleteRoomAttributeFromRoom(\FGTCLB\HisClient\RoomAttributeService\Struct\DeleteRoomAttributeFromRoom $parameters)
    {
        try {
            $this->setResult($resultDeleteRoomAttributeFromRoom = $this->getSoapClient()->__soapCall('deleteRoomAttributeFromRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRoomAttributeFromRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRoomAttributeType
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.facility.roomattribute.ADMINISTRATE_ROOMATTRIBUTE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\DeleteRoomAttributeType $parameters
     * @return void|bool
     */
    public function deleteRoomAttributeType(\FGTCLB\HisClient\RoomAttributeService\Struct\DeleteRoomAttributeType $parameters)
    {
        try {
            $this->setResult($resultDeleteRoomAttributeType = $this->getSoapClient()->__soapCall('deleteRoomAttributeType', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRoomAttributeType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllRoomAttributeTypes
     * Meta information extracted from the WSDL
     * - documentation: Load the definitions of the available room attribute types. SECURED BY [(cs.psv.facility.room.VIEW_ROOM_ATTRIBUTE or cs.psv.facility.room.EDIT_ROOM_ATTRIBUTE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\GetAllRoomAttributeTypes $parameters
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\GetAllRoomAttributeTypesResponse|bool
     */
    public function getAllRoomAttributeTypes(\FGTCLB\HisClient\RoomAttributeService\Struct\GetAllRoomAttributeTypes $parameters)
    {
        try {
            $this->setResult($resultGetAllRoomAttributeTypes = $this->getSoapClient()->__soapCall('getAllRoomAttributeTypes', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllRoomAttributeTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readAllRoomAttributesFromRoom
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.facility.room.VIEW_ROOM_ATTRIBUTE or cs.psv.facility.room.EDIT_ROOM_ATTRIBUTE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\ReadAllRoomAttributesFromRoom $parameters
     * @return \FGTCLB\HisClient\RoomAttributeService\Struct\ReadAllRoomAttributesFromRoomResponse|bool
     */
    public function readAllRoomAttributesFromRoom(\FGTCLB\HisClient\RoomAttributeService\Struct\ReadAllRoomAttributesFromRoom $parameters)
    {
        try {
            $this->setResult($resultReadAllRoomAttributesFromRoom = $this->getSoapClient()->__soapCall('readAllRoomAttributesFromRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadAllRoomAttributesFromRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateRoomAttributeForRoom
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.facility.room.EDIT_ROOM_ATTRIBUTE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\UpdateRoomAttributeForRoom $parameters
     * @return void|bool
     */
    public function updateRoomAttributeForRoom(\FGTCLB\HisClient\RoomAttributeService\Struct\UpdateRoomAttributeForRoom $parameters)
    {
        try {
            $this->setResult($resultUpdateRoomAttributeForRoom = $this->getSoapClient()->__soapCall('updateRoomAttributeForRoom', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateRoomAttributeForRoom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateRoomAttributeType
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.psv.facility.roomattribute.ADMINISTRATE_ROOMATTRIBUTE)]
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FGTCLB\HisClient\RoomAttributeService\Struct\UpdateRoomAttributeType $parameters
     * @return void|bool
     */
    public function updateRoomAttributeType(\FGTCLB\HisClient\RoomAttributeService\Struct\UpdateRoomAttributeType $parameters)
    {
        try {
            $this->setResult($resultUpdateRoomAttributeType = $this->getSoapClient()->__soapCall('updateRoomAttributeType', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateRoomAttributeType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return void|\FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeForRoomResponse|\FGTCLB\HisClient\RoomAttributeService\Struct\CreateRoomAttributeTypeResponse|\FGTCLB\HisClient\RoomAttributeService\Struct\GetAllRoomAttributeTypesResponse|\FGTCLB\HisClient\RoomAttributeService\Struct\ReadAllRoomAttributesFromRoomResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
