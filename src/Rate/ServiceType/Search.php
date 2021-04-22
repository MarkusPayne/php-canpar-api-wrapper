<?php

namespace Canpar\Rate\ServiceType;

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
     * @param \Canpar\Rate\StructType\SearchCanadaPost $parameters
     * @return \Canpar\Rate\StructType\SearchCanadaPostResponse|bool
     */
    public function searchCanadaPost(\Canpar\Rate\StructType\SearchCanadaPost $parameters)
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
     * @return \Canpar\Rate\StructType\SearchCanadaPostResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
