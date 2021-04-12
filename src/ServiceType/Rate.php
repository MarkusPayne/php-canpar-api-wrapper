<?php

namespace Canpar\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rate ServiceType
 * @subpackage Services
 */
class Rate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named rateShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\StructType\RateShipment $parameters
     * @return \Canpar\StructType\RateShipmentResponse|bool
     */
    public function rateShipment(\Canpar\StructType\RateShipment $parameters)
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
     * Method to call the operation originally named rateShipmentPublic
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\StructType\RateShipmentPublic $parameters
     * @return \Canpar\StructType\RateShipmentPublicResponse|bool
     */
    public function rateShipmentPublic(\Canpar\StructType\RateShipmentPublic $parameters)
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
     * Method to call the operation originally named rateShipmentAllServices
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\StructType\RateShipmentAllServices $parameters
     * @return \Canpar\StructType\RateShipmentAllServicesResponse|bool
     */
    public function rateShipmentAllServices(\Canpar\StructType\RateShipmentAllServices $parameters)
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
     * @param \Canpar\StructType\RateShipmentAllPremiums $parameters
     * @return \Canpar\StructType\RateShipmentAllPremiumsResponse|bool
     */
    public function rateShipmentAllPremiums(\Canpar\StructType\RateShipmentAllPremiums $parameters)
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
     * @return \Canpar\StructType\RateShipmentAllPremiumsResponse|\Canpar\StructType\RateShipmentAllServicesResponse|\Canpar\StructType\RateShipmentPublicResponse|\Canpar\StructType\RateShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
