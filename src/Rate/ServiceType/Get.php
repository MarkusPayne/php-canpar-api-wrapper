<?php

namespace Canpar\Rate\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \Canpar\Rate\StructType\GetVersionResponse|bool
     */
    public function getVersion()
    {
        try {
            $this->setResult($this->getSoapClient()->getVersion());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableServices
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Rate\StructType\GetAvailableServices $parameters
     * @return \Canpar\Rate\StructType\GetAvailableServicesResponse|bool
     */
    public function getAvailableServices(\Canpar\Rate\StructType\GetAvailableServices $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAvailableServices($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Rate\StructType\GetProfile $parameters
     * @return \Canpar\Rate\StructType\GetProfileResponse|bool
     */
    public function getProfile(\Canpar\Rate\StructType\GetProfile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getProfile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProfiles
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Rate\StructType\GetProfiles $parameters
     * @return \Canpar\Rate\StructType\GetProfilesResponse|bool
     */
    public function getProfiles(\Canpar\Rate\StructType\GetProfiles $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getProfiles($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Rate\StructType\GetAvailableServicesResponse|\Canpar\Rate\StructType\GetProfileResponse|\Canpar\Rate\StructType\GetProfilesResponse|\Canpar\Rate\StructType\GetVersionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
