<?php

namespace Canpar\ServiceType;

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
     * @return \Canpar\StructType\GetVersionResponse|bool
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
     * @param \Canpar\StructType\GetAvailableServices $parameters
     * @return \Canpar\StructType\GetAvailableServicesResponse|bool
     */
    public function getAvailableServices(\Canpar\StructType\GetAvailableServices $parameters)
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
     * @param \Canpar\StructType\GetProfile $parameters
     * @return \Canpar\StructType\GetProfileResponse|bool
     */
    public function getProfile(\Canpar\StructType\GetProfile $parameters)
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
     * @param \Canpar\StructType\GetProfiles $parameters
     * @return \Canpar\StructType\GetProfilesResponse|bool
     */
    public function getProfiles(\Canpar\StructType\GetProfiles $parameters)
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
     * @return \Canpar\StructType\GetAvailableServicesResponse|\Canpar\StructType\GetProfileResponse|\Canpar\StructType\GetProfilesResponse|\Canpar\StructType\GetVersionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
