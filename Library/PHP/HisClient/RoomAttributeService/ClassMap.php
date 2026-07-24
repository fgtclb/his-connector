<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\RoomAttributeService;

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
            'RoomAttributeValueDto' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\RoomAttributeValueDto',
            'RoomAttributeDto' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\RoomAttributeDto',
            'RoomAttributeTypeDto' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\RoomAttributeTypeDto',
            'createRoomAttributeForRoom' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\CreateRoomAttributeForRoom',
            'createRoomAttributeForRoomResponse' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\CreateRoomAttributeForRoomResponse',
            'createRoomAttributeType' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\CreateRoomAttributeType',
            'createRoomAttributeTypeResponse' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\CreateRoomAttributeTypeResponse',
            'deleteRoomAttributeFromRoom' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\DeleteRoomAttributeFromRoom',
            'deleteRoomAttributeType' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\DeleteRoomAttributeType',
            'getAllRoomAttributeTypes' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\GetAllRoomAttributeTypes',
            'getAllRoomAttributeTypesResponse' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\GetAllRoomAttributeTypesResponse',
            'readAllRoomAttributesFromRoom' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\ReadAllRoomAttributesFromRoom',
            'readAllRoomAttributesFromRoomResponse' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\ReadAllRoomAttributesFromRoomResponse',
            'updateRoomAttributeForRoom' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\UpdateRoomAttributeForRoom',
            'updateRoomAttributeType' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\UpdateRoomAttributeType',
            'roomAttributeValueListType' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\RoomAttributeValueListType',
            'roomAttributeTypesType' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\RoomAttributeTypesType',
            'roomAttributeDtosType' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\RoomAttributeDtosType',
            'ServiceFault' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\ServiceFault',
            'ValidationMessage' => '\\FGTCLB\\HisClient\\RoomAttributeService\\Struct\\ValidationMessage',
        ];
    }
}
