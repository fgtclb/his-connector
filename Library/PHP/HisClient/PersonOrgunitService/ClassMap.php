<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\PersonOrgunitService;

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
            'AffiliationLocationPostaddressDto' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AffiliationLocationPostaddressDto',
            'Address' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\Address',
            'Affiliation60' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\Affiliation60',
            'AffiliationLocationDto' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AffiliationLocationDto',
            'SearchedAffiliationExtended' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SearchedAffiliationExtended',
            'Messenger' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\Messenger',
            'EMail' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\EMail',
            'EAddress' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\EAddress',
            'PostAddress' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\PostAddress',
            'AffiliationLocationRoomDto' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AffiliationLocationRoomDto',
            'Phone' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\Phone',
            'Affiliation202412' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\Affiliation202412',
            'SearchedAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SearchedAffiliation',
            'Affiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\Affiliation',
            'Hyperlink' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\Hyperlink',
            'addAffiliationToPerson' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AddAffiliationToPerson',
            'addAffiliationToPersonResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AddAffiliationToPersonResponse',
            'addEAddressToAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AddEAddressToAffiliation',
            'addEAddressToAffiliationResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AddEAddressToAffiliationResponse',
            'addPostAddressToAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AddPostAddressToAffiliation',
            'addPostAddressToAffiliationResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AddPostAddressToAffiliationResponse',
            'addRoomToAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AddRoomToAffiliation',
            'addRoomToAffiliationResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AddRoomToAffiliationResponse',
            'findAffiliationById' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\FindAffiliationById',
            'findAffiliationByIdResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\FindAffiliationByIdResponse',
            'getEAddressesFromAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\GetEAddressesFromAffiliation',
            'getEAddressesFromAffiliationResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\GetEAddressesFromAffiliationResponse',
            'getLocationFromAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\GetLocationFromAffiliation',
            'getLocationFromAffiliationResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\GetLocationFromAffiliationResponse',
            'readAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\ReadAffiliation',
            'readAffiliationResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\ReadAffiliationResponse',
            'readAffiliation202412' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\ReadAffiliation202412',
            'readAffiliation202412Response' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\ReadAffiliation202412Response',
            'removeAffiliationFromPerson' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\RemoveAffiliationFromPerson',
            'removeEAddressFromAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\RemoveEAddressFromAffiliation',
            'removeEAddressFromAffiliationResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\RemoveEAddressFromAffiliationResponse',
            'removeLocationFromAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\RemoveLocationFromAffiliation',
            'removeLocationFromAffiliationResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\RemoveLocationFromAffiliationResponse',
            'searchAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SearchAffiliation',
            'searchAffiliationResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SearchAffiliationResponse',
            'searchAffiliation202412' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SearchAffiliation202412',
            'searchAffiliation202412Response' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SearchAffiliation202412Response',
            'searchAffiliationById' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SearchAffiliationById',
            'searchAffiliationByIdResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SearchAffiliationByIdResponse',
            'searchAffiliationsForPerson' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SearchAffiliationsForPerson',
            'searchAffiliationsForPersonResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SearchAffiliationsForPersonResponse',
            'setPostaddressForAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SetPostaddressForAffiliation',
            'setPostaddressForAffiliationResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SetPostaddressForAffiliationResponse',
            'setRoomForAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SetRoomForAffiliation',
            'setRoomForAffiliationResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SetRoomForAffiliationResponse',
            'updateAffiliation' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\UpdateAffiliation',
            'updateAffiliationResponse' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\UpdateAffiliationResponse',
            'updateAffiliation202412' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\UpdateAffiliation202412',
            'updateAffiliation202412Response' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\UpdateAffiliation202412Response',
            'updateAffiliation60' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\UpdateAffiliation60',
            'updateAffiliation60Response' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\UpdateAffiliation60Response',
            'affiliationInfosType' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AffiliationInfosType',
            'eaddressesType' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\EaddressesType_1',
            'eAddressesType' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\EAddressesType',
            'affiliationsType' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\AffiliationsType',
            'searchedAffiliationsType' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\SearchedAffiliationsType',
            'ServiceFault' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\ServiceFault',
            'ValidationMessage' => '\\FGTCLB\\HisClient\\PersonOrgunitService\\Struct\\ValidationMessage',
        ];
    }
}
