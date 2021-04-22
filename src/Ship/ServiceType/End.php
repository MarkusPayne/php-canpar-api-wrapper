<?php

namespace Canpar\Ship\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for End ServiceType
 * @subpackage Services
 */
class End extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named endOfDay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\EndOfDay $parameters
     * @return \Canpar\Ship\StructType\EndOfDayResponse|bool
     */
    public function endOfDay(\Canpar\Ship\StructType\EndOfDay $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->endOfDay($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Ship\StructType\EndOfDayResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
