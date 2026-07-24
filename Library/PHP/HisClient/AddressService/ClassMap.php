<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\AddressService;

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
            'PostAddress' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\PostAddress',
            'HiskeyValue' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\HiskeyValue',
            'Address' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\Address',
            'PostAddressWithNillablePostcode' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\PostAddressWithNillablePostcode',
            'Phone' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\Phone',
            'Value' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\Value',
            'Messenger' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\Messenger',
            'PostAddressWithNotification' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\PostAddressWithNotification',
            'EMail' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\EMail',
            'NotificationCategorie' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\NotificationCategorie',
            'EAddress' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\EAddress',
            'Hyperlink' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\Hyperlink',
            'compareEAddressRequired' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\CompareEAddressRequired',
            'compareEAddressRequiredResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\CompareEAddressRequiredResponse',
            'compareEAddresses' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\CompareEAddresses',
            'compareEAddressesResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\CompareEAddressesResponse',
            'comparePostAddressExcludeAddressTag' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ComparePostAddressExcludeAddressTag',
            'comparePostAddressExcludeAddressTagResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ComparePostAddressExcludeAddressTagResponse',
            'deleteEaddress' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\DeleteEaddress',
            'deleteEaddressResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\DeleteEaddressResponse',
            'deletePostaddress' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\DeletePostaddress',
            'deletePostaddressResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\DeletePostaddressResponse',
            'readAddressTagIdForPrivate' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadAddressTagIdForPrivate',
            'readAddressTagIdForPrivateResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadAddressTagIdForPrivateResponse',
            'readAddressesOfPersonWithNotificationCategory' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadAddressesOfPersonWithNotificationCategory',
            'readAddressesOfPersonWithNotificationCategoryResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadAddressesOfPersonWithNotificationCategoryResponse',
            'readEAddress' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadEAddress',
            'readEAddressResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadEAddressResponse',
            'readEAddressTypeIdsForEmail' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadEAddressTypeIdsForEmail',
            'readEAddressTypeIdsForEmailResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadEAddressTypeIdsForEmailResponse',
            'readEAddressTypeIdsForPhone' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadEAddressTypeIdsForPhone',
            'readEAddressTypeIdsForPhoneResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadEAddressTypeIdsForPhoneResponse',
            'readEAddresses' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadEAddresses',
            'readEAddressesResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadEAddressesResponse',
            'readEAddressesWithAddressTagAndEAddressType' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadEAddressesWithAddressTagAndEAddressType',
            'readEAddressesWithAddressTagAndEAddressTypeResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadEAddressesWithAddressTagAndEAddressTypeResponse',
            'readPostAddresses' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadPostAddresses',
            'readPostAddressesResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadPostAddressesResponse',
            'readPostAddressesWithNotification' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadPostAddressesWithNotification',
            'readPostAddressesWithNotificationResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadPostAddressesWithNotificationResponse',
            'readPostaddress' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadPostaddress',
            'readPostaddressResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ReadPostaddressResponse',
            'removeNotificationCategoryFromAddress' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\RemoveNotificationCategoryFromAddress',
            'removeNotificationCategoryFromAddressResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\RemoveNotificationCategoryFromAddressResponse',
            'saveEAddresses' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\SaveEAddresses',
            'saveEAddressesResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\SaveEAddressesResponse',
            'saveEAddresses201906' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\SaveEAddresses201906',
            'saveEAddresses201906Response' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\SaveEAddresses201906Response',
            'savePostAddresses' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\SavePostAddresses',
            'savePostAddressesResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\SavePostAddressesResponse',
            'savePostAddresses201906' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\SavePostAddresses201906',
            'savePostAddresses201906Response' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\SavePostAddresses201906Response',
            'setNotificationCategoryForAddress' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\SetNotificationCategoryForAddress',
            'setNotificationCategoryForAddressResponse' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\SetNotificationCategoryForAddressResponse',
            'postAddressIdsType' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\PostAddressIdsType',
            'addressesType' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\AddressesType',
            'postAddressesType' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\PostAddressesType',
            'eAdressesType' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\EAdressesType',
            'notificationCategoriesType' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\NotificationCategoriesType',
            'postAdressesWithNotificationType' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\PostAdressesWithNotificationType',
            'eAddressesType' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\EAddressesType',
            'postAdressesType' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\PostAdressesType',
            'eAddressTypeIdsType' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\EAddressTypeIdsType',
            'eAdressIdsType' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\EAdressIdsType',
            'ServiceFault' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ServiceFault',
            'ValidationMessage' => '\\FGTCLB\\HisClient\\AddressService\\Struct\\ValidationMessage',
        ];
    }
}
