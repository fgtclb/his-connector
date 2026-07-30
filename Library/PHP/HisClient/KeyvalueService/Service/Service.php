<?php

declare(strict_types=1);

namespace FGTCLB\HisClient\KeyvalueService\Service;

use SoapFault;
use FGTCLB\HisClientFacade\Soap\AbstractSoapService;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapService
{
    /**
     * Method to call the operation originally named getAll
     * Meta information extracted from the WSDL
     * - documentation: Get all values for given keytable. The result may contain values that are outdated/not valid today. SECURED BY [(cs.sys.core.VIEW_KEYTABLE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\GetAll $parameters
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GetAllResponse|bool
     */
    public function getAll(\FGTCLB\HisClient\KeyvalueService\Struct\GetAll $parameters)
    {
        try {
            $this->setResult($resultGetAll = $this->getSoapClient()->__soapCall('getAll', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAll;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllExtended
     * Meta information extracted from the WSDL
     * - documentation: Get all values for given keytable with additional attributes. The result may contain values that are outdated/not valid today. SECURED BY [(cs.sys.core.VIEW_KEYTABLE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\GetAllExtended $parameters
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GetAllExtendedResponse|bool
     */
    public function getAllExtended(\FGTCLB\HisClient\KeyvalueService\Struct\GetAllExtended $parameters)
    {
        try {
            $this->setResult($resultGetAllExtended = $this->getSoapClient()->__soapCall('getAllExtended', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllExtended;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllValid
     * Meta information extracted from the WSDL
     * - documentation: Get all valid values for given keytable. The result will ONLY contain values that are valid today. SECURED BY [(cs.sys.core.VIEW_KEYTABLE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\GetAllValid $parameters
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GetAllValidResponse|bool
     */
    public function getAllValid(\FGTCLB\HisClient\KeyvalueService\Struct\GetAllValid $parameters)
    {
        try {
            $this->setResult($resultGetAllValid = $this->getSoapClient()->__soapCall('getAllValid', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllValid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllValidExtended
     * Meta information extracted from the WSDL
     * - documentation: Get all values for given keytable with additional attributes. The result will ONLY contain values that are valid today. SECURED BY [(cs.sys.core.VIEW_KEYTABLE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\GetAllValidExtended $parameters
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GetAllValidExtendedResponse|bool
     */
    public function getAllValidExtended(\FGTCLB\HisClient\KeyvalueService\Struct\GetAllValidExtended $parameters)
    {
        try {
            $this->setResult($resultGetAllValidExtended = $this->getSoapClient()->__soapCall('getAllValidExtended', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllValidExtended;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllValueClasses
     * Meta information extracted from the WSDL
     * - documentation: SECURED BY [(cs.sys.core.VIEW_KEYTABLE)]
     * @uses AbstractSoapService::getSoapClient()
     * @uses AbstractSoapService::setResult()
     * @uses AbstractSoapService::saveLastError()
     * @param \FGTCLB\HisClient\KeyvalueService\Struct\GetAllValueClasses $parameters
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GetAllValueClassesResponse|bool
     */
    public function getAllValueClasses(\FGTCLB\HisClient\KeyvalueService\Struct\GetAllValueClasses $parameters)
    {
        try {
            $this->setResult($resultGetAllValueClasses = $this->getSoapClient()->__soapCall('getAllValueClasses', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllValueClasses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapService::getResult()
     * @return \FGTCLB\HisClient\KeyvalueService\Struct\GetAllExtendedResponse|\FGTCLB\HisClient\KeyvalueService\Struct\GetAllResponse|\FGTCLB\HisClient\KeyvalueService\Struct\GetAllValidExtendedResponse|\FGTCLB\HisClient\KeyvalueService\Struct\GetAllValidResponse|\FGTCLB\HisClient\KeyvalueService\Struct\GetAllValueClassesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
