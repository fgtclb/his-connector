<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\OrgUnitService;

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
            'OrgUnit' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\OrgUnit',
            'VersionDateRange' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\VersionDateRange',
            'SearchedOrgunit60' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\SearchedOrgunit60',
            'OrgUnitChildren' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\OrgUnitChildren',
            'Orgunit61' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\Orgunit61',
            'childrenSizeOfOrgunit' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ChildrenSizeOfOrgunit',
            'childrenSizeOfOrgunitResponse' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ChildrenSizeOfOrgunitResponse',
            'findAllVersionsByLid' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\FindAllVersionsByLid',
            'findAllVersionsByLidResponse' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\FindAllVersionsByLidResponse',
            'findOrgUnit' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\FindOrgUnit',
            'findOrgUnitResponse' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\FindOrgUnitResponse',
            'findOrgUnit60' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\FindOrgUnit60',
            'findOrgUnit60Response' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\FindOrgUnit60Response',
            'findOrgUnit61' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\FindOrgUnit61',
            'findOrgUnit61Response' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\FindOrgUnit61Response',
            'getOrgunitLid' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\GetOrgunitLid',
            'getOrgunitLidResponse' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\GetOrgunitLidResponse',
            'getOrgunitWithChildren' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\GetOrgunitWithChildren',
            'getOrgunitWithChildrenResponse' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\GetOrgunitWithChildrenResponse',
            'getUniversityLid' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\GetUniversityLid',
            'getUniversityLidResponse' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\GetUniversityLidResponse',
            'readOrgUnit' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ReadOrgUnit',
            'readOrgUnitResponse' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ReadOrgUnitResponse',
            'readOrgUnit61' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ReadOrgUnit61',
            'readOrgUnit61Response' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ReadOrgUnit61Response',
            'readOrgUnitsChildren' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ReadOrgUnitsChildren',
            'readOrgUnitsChildrenResponse' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ReadOrgUnitsChildrenResponse',
            'readOrgUnitsChildren61' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ReadOrgUnitsChildren61',
            'readOrgUnitsChildren61Response' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ReadOrgUnitsChildren61Response',
            'readOrgunitById' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ReadOrgunitById',
            'readOrgunitByIdResponse' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ReadOrgunitByIdResponse',
            'removeOrgunits' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\RemoveOrgunits',
            'saveNewOrgunit' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\SaveNewOrgunit',
            'saveNewOrgunitResponse' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\SaveNewOrgunitResponse',
            'saveNewVersionOfExistingOrgunit' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\SaveNewVersionOfExistingOrgunit',
            'saveNewVersionOfExistingOrgunitResponse' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\SaveNewVersionOfExistingOrgunitResponse',
            'updateOrgunit' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\UpdateOrgunit',
            'updateOrgunitResponse' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\UpdateOrgunitResponse',
            'children61Type' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\Children61Type',
            'searchedOrgunitsType' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\SearchedOrgunitsType',
            'orgUnitIdsType' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\OrgUnitIdsType',
            'orgunitsType' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\OrgunitsType',
            'childrenType' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ChildrenType',
            'ServiceFault' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ServiceFault',
            'ValidationMessage' => '\\FGTCLB\\HisClient\\OrgUnitService\\Struct\\ValidationMessage',
        ];
    }
}
