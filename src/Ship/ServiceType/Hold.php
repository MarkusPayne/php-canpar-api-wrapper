<?php

namespace Canpar\Ship\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Hold ServiceType
 * @subpackage Services
 */
class Hold extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named holdShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\HoldShipment $parameters
     * @return \Canpar\Ship\StructType\HoldShipmentResponse|bool
     */
    public function holdShipment(\Canpar\Ship\StructType\HoldShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->holdShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Ship\StructType\HoldShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
