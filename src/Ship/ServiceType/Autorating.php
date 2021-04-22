<?php

namespace Canpar\Ship\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Autorating ServiceType
 * @subpackage Services
 */
class Autorating extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named autorating
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\Autorating $parameters
     * @return \Canpar\Ship\StructType\AutoratingResponse|bool
     */
    public function autorating(\Canpar\Ship\StructType\Autorating $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->autorating($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Ship\StructType\AutoratingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
