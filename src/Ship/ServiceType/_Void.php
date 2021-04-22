<?php

namespace Canpar\Ship\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Void ServiceType
 * @subpackage Services
 */
class _Void extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named voidShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\VoidShipment $parameters
     * @return \Canpar\Ship\StructType\VoidShipmentResponse|bool
     */
    public function voidShipment(\Canpar\Ship\StructType\VoidShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->voidShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Ship\StructType\VoidShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
