<?php

namespace Canpar\Rate\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Is ServiceType
 * @subpackage Services
 */
class Is extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named isPostalCodeValid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Rate\StructType\IsPostalCodeValid $parameters
     * @return \Canpar\Rate\StructType\IsPostalCodeValidResponse|bool
     */
    public function isPostalCodeValid(\Canpar\Rate\StructType\IsPostalCodeValid $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->isPostalCodeValid($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named isAlternativeService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Rate\StructType\IsAlternativeService $parameters
     * @return \Canpar\Rate\StructType\IsAlternativeServiceResponse|bool
     */
    public function isAlternativeService(\Canpar\Rate\StructType\IsAlternativeService $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->isAlternativeService($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named isResidential
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Rate\StructType\IsResidential $parameters
     * @return \Canpar\Rate\StructType\IsResidentialResponse|bool
     */
    public function isResidential(\Canpar\Rate\StructType\IsResidential $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->isResidential($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Rate\StructType\IsAlternativeServiceResponse|\Canpar\Rate\StructType\IsPostalCodeValidResponse|\Canpar\Rate\StructType\IsResidentialResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
