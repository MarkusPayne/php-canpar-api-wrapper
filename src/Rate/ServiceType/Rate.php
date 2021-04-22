<?php

namespace Canpar\Rate\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rate ServiceType
 * @subpackage Services
 */
class Rate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named rateShipmentPublic
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Rate\StructType\RateShipmentPublic $parameters
     * @return \Canpar\Rate\StructType\RateShipmentPublicResponse|bool
     */
    public function rateShipmentPublic(\Canpar\Rate\StructType\RateShipmentPublic $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->rateShipmentPublic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named rateShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Rate\StructType\RateShipment $parameters
     * @return \Canpar\Rate\StructType\RateShipmentResponse|bool
     */
    public function rateShipment(\Canpar\Rate\StructType\RateShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->rateShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named rateShipmentAllServices
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Rate\StructType\RateShipmentAllServices $parameters
     * @return \Canpar\Rate\StructType\RateShipmentAllServicesResponse|bool
     */
    public function rateShipmentAllServices(\Canpar\Rate\StructType\RateShipmentAllServices $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->rateShipmentAllServices($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named rateShipmentAllPremiums
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Rate\StructType\RateShipmentAllPremiums $parameters
     * @return \Canpar\Rate\StructType\RateShipmentAllPremiumsResponse|bool
     */
    public function rateShipmentAllPremiums(\Canpar\Rate\StructType\RateShipmentAllPremiums $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->rateShipmentAllPremiums($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Rate\StructType\RateShipmentAllPremiumsResponse|\Canpar\Rate\StructType\RateShipmentAllServicesResponse|\Canpar\Rate\StructType\RateShipmentPublicResponse|\Canpar\Rate\StructType\RateShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
