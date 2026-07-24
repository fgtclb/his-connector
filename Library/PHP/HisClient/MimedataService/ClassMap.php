<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService;

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
            'DocumentMetadata' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\DocumentMetadata',
            'PersonPictureLegacyWebService' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\PersonPictureLegacyWebService',
            'Mimedata' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\Mimedata',
            'deleteDocument' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\DeleteDocument',
            'deleteDocumentResponse' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\DeleteDocumentResponse',
            'deleteDocumentByDmsId' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\DeleteDocumentByDmsId',
            'deleteDocumentByDmsIdResponse' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\DeleteDocumentByDmsIdResponse',
            'deletePersonPicture' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\DeletePersonPicture',
            'deletePersonPictureResponse' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\DeletePersonPictureResponse',
            'readDocumentForReport' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\ReadDocumentForReport',
            'readDocumentForReportResponse' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\ReadDocumentForReportResponse',
            'readDocuments' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\ReadDocuments',
            'readDocumentsResponse' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\ReadDocumentsResponse',
            'readMimeData' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\ReadMimeData',
            'readMimeDataResponse' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\ReadMimeDataResponse',
            'readMimedata201912' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\ReadMimedata201912',
            'readMimedata201912Response' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\ReadMimedata201912Response',
            'searchPersonPictureDtoList' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\SearchPersonPictureDtoList',
            'searchPersonPictureDtoListResponse' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\SearchPersonPictureDtoListResponse',
            'personPicturesType' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\PersonPicturesType',
            'documentMetadatasType' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\DocumentMetadatasType',
            'ServiceFault' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\ServiceFault',
            'ValidationMessage' => '\\FGTCLB\\HisClient\\MimedataService\\Struct\\ValidationMessage',
        ];
    }
}
