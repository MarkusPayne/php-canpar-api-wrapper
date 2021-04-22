<?php

namespace Canpar\Ship\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Unvoid ServiceType
 * @subpackage Services
 */
class Unvoid extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named unvoidShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\UnvoidShipment $parameters
     * @return \Canpar\Ship\StructType\UnvoidShipmentResponse|bool
     */
    public function unvoidShipment(\Canpar\Ship\StructType\UnvoidShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->unvoidShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Ship\StructType\UnvoidShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
