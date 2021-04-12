<?php

namespace Canpar\ServiceType;

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
     * @param \Canpar\StructType\IsPostalCodeValid $parameters
     * @return \Canpar\StructType\IsPostalCodeValidResponse|bool
     */
    public function isPostalCodeValid(\Canpar\StructType\IsPostalCodeValid $parameters)
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
     * @param \Canpar\StructType\IsAlternativeService $parameters
     * @return \Canpar\StructType\IsAlternativeServiceResponse|bool
     */
    public function isAlternativeService(\Canpar\StructType\IsAlternativeService $parameters)
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
     * @param \Canpar\StructType\IsResidential $parameters
     * @return \Canpar\StructType\IsResidentialResponse|bool
     */
    public function isResidential(\Canpar\StructType\IsResidential $parameters)
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
     * @return \Canpar\StructType\IsAlternativeServiceResponse|\Canpar\StructType\IsPostalCodeValidResponse|\Canpar\StructType\IsResidentialResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
