<?php

namespace Canpar\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named searchCanadaPost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\StructType\SearchCanadaPost $parameters
     * @return \Canpar\StructType\SearchCanadaPostResponse|bool
     */
    public function searchCanadaPost(\Canpar\StructType\SearchCanadaPost $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchCanadaPost($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\StructType\SearchCanadaPostResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
