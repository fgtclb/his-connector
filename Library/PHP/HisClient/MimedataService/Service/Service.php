<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\MimedataService\Service;

use SoapFault;
use FGTCLB\HisClientFacade\Soap\AbstractSoapService;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapService
{
    /**
     * Method to call the operation originally named deleteDocument
     * Meta information extracted from the WSDL
     * - documentation: Delete given document metadata and associated mimedata. SECURED BY [(cs.sys.document.DELETE_DOCUMENT) and (cs.sys.document.DELETE_DOCUMENT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\MimedataService\Struct\DeleteDocument $parameters
     * @return \FGTCLB\HisClient\MimedataService\Struct\DeleteDocumentResponse|bool
     */
    public function deleteDocument(\FGTCLB\HisClient\MimedataService\Struct\DeleteDocument $parameters)
    {
        try {
            $this->setResult($resultDeleteDocument = $this->getSoapClient()->__soapCall('deleteDocument', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDocumentByDmsId
     * Meta information extracted from the WSDL
     * - documentation: Removes mimedata and associated document metadata. Mimedata is identified by its external DMS identifier. SECURED BY [(cs.sys.document.DELETE_DOCUMENT) and (cs.sys.document.DELETE_DOCUMENT)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\MimedataService\Struct\DeleteDocumentByDmsId $parameters
     * @return \FGTCLB\HisClient\MimedataService\Struct\DeleteDocumentByDmsIdResponse|bool
     */
    public function deleteDocumentByDmsId(\FGTCLB\HisClient\MimedataService\Struct\DeleteDocumentByDmsId $parameters)
    {
        try {
            $this->setResult($resultDeleteDocumentByDmsId = $this->getSoapClient()->__soapCall('deleteDocumentByDmsId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDocumentByDmsId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePersonPicture
     * Meta information extracted from the WSDL
     * - documentation: Delete given mimedata from person, also deleting the associated entries in person picture. If the mimedata is associated with a chipcard then this association will be removed. SECURED BY [(cs.psv.person.DELETE_PERSON_PICTURE) and
     * (cs.psv.DOCUMENT_READ) and (cs.psv.person.DELETE_PERSON_PICTURE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\MimedataService\Struct\DeletePersonPicture $parameters
     * @return \FGTCLB\HisClient\MimedataService\Struct\DeletePersonPictureResponse|bool
     */
    public function deletePersonPicture(\FGTCLB\HisClient\MimedataService\Struct\DeletePersonPicture $parameters)
    {
        try {
            $this->setResult($resultDeletePersonPicture = $this->getSoapClient()->__soapCall('deletePersonPicture', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePersonPicture;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readDocumentForReport
     * Meta information extracted from the WSDL
     * - documentation: Find most recent Document for the report of given type for this person. Reports are filtered by given term. There may be more than one document attached to this report. In that case you may specify the category of required sub
     * document. The following right ist needed: 'cs.sys.rp.GENERATE_REPORT' which may be narrowed to a domain via rights parameter. Be careful NOT to assign this right to any Webservice-Account of individual Persons because they could access reports of any
     * other person. SECURED BY [(cs.sys.rp.GENERATE_REPORT or cs.sys.rp.GENERATE_REPORT_WITH_OWN_DATA)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\MimedataService\Struct\ReadDocumentForReport $parameters
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadDocumentForReportResponse|bool
     */
    public function readDocumentForReport(\FGTCLB\HisClient\MimedataService\Struct\ReadDocumentForReport $parameters)
    {
        try {
            $this->setResult($resultReadDocumentForReport = $this->getSoapClient()->__soapCall('readDocumentForReport', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadDocumentForReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readDocuments
     * Meta information extracted from the WSDL
     * - documentation: Read the metadata of documents associated with specified object. Required rights depend on the type of object and the documents requested. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\MimedataService\Struct\ReadDocuments $parameters
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadDocumentsResponse|bool
     */
    public function readDocuments(\FGTCLB\HisClient\MimedataService\Struct\ReadDocuments $parameters)
    {
        try {
            $this->setResult($resultReadDocuments = $this->getSoapClient()->__soapCall('readDocuments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readMimeData
     * Meta information extracted from the WSDL
     * - documentation: Read binary object. Returns Base64-encoded binary file contents. No metadata (i.e.mime-type) is added but must be inferred from binary representation. SECURED BY [(cs.psv.DOCUMENT_READ)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\MimedataService\Struct\ReadMimeData $parameters
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadMimeDataResponse|bool
     */
    public function readMimeData(\FGTCLB\HisClient\MimedataService\Struct\ReadMimeData $parameters)
    {
        try {
            $this->setResult($resultReadMimeData = $this->getSoapClient()->__soapCall('readMimeData', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadMimeData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named readMimedata201912
     * Meta information extracted from the WSDL
     * - documentation: Read mimedata by given ID. Access check will be performed as necessary. Will return NIL on missing mimedata. SECURED BY [(RIGHT_EVERYONE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\MimedataService\Struct\ReadMimedata201912 $parameters
     * @return \FGTCLB\HisClient\MimedataService\Struct\ReadMimedata201912Response|bool
     */
    public function readMimedata201912(\FGTCLB\HisClient\MimedataService\Struct\ReadMimedata201912 $parameters)
    {
        try {
            $this->setResult($resultReadMimedata201912 = $this->getSoapClient()->__soapCall('readMimedata201912', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReadMimedata201912;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchPersonPictureDtoList
     * Meta information extracted from the WSDL
     * - documentation: Searches a list of pictures which belong to the person concerning a special context. One of the following rights is needed to use this method: 'cs.psv.person.EDIT_PERSON_CHIPCARD', 'cs.psv.person.PERSON_VIEW_PERSON_CHIPCARD',
     * 'cs.psv.person.PERSON_CREATE_PERSON_CHIPCARD', 'cs.psv.person.PERSON_EDIT_PERSON_PICTURE', 'cs.psv.person.PERSON_VIEW_PERSON_PICTURE', 'cs.psv.person.PERSON_VIEW_PERSON_PICTURE_OWN', 'cs.psv.person.PERSON_EDIT_PERSON_PICTURE_OWN' SECURED BY
     * [(cs.psv.person.EDIT_PERSON_CHIPCARD or cs.psv.person.VIEW_PERSON_CHIPCARD or cs.psv.person.CREATE_PERSON_CHIPCARD or cs.psv.person.EDIT_PERSON_PICTURE or cs.psv.person.VIEW_PERSON_PICTURE or cs.psv.person.VIEW_PERSON_PICTURE_OWN or
     * cs.psv.person.EDIT_PERSON_PICTURE_OWN)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\MimedataService\Struct\SearchPersonPictureDtoList $parameters
     * @return \FGTCLB\HisClient\MimedataService\Struct\SearchPersonPictureDtoListResponse|bool
     */
    public function searchPersonPictureDtoList(\FGTCLB\HisClient\MimedataService\Struct\SearchPersonPictureDtoList $parameters)
    {
        try {
            $this->setResult($resultSearchPersonPictureDtoList = $this->getSoapClient()->__soapCall('searchPersonPictureDtoList', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchPersonPictureDtoList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapService::getResult()
     * @return \FGTCLB\HisClient\MimedataService\Struct\DeleteDocumentByDmsIdResponse|\FGTCLB\HisClient\MimedataService\Struct\DeleteDocumentResponse|\FGTCLB\HisClient\MimedataService\Struct\DeletePersonPictureResponse|\FGTCLB\HisClient\MimedataService\Struct\ReadDocumentForReportResponse|\FGTCLB\HisClient\MimedataService\Struct\ReadDocumentsResponse|\FGTCLB\HisClient\MimedataService\Struct\ReadMimedata201912Response|\FGTCLB\HisClient\MimedataService\Struct\ReadMimeDataResponse|\FGTCLB\HisClient\MimedataService\Struct\SearchPersonPictureDtoListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
