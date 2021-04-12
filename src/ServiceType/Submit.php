<?php

namespace Canpar\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Submit ServiceType
 * @subpackage Services
 */
class Submit extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named submitManifest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\StructType\SubmitManifest $parameters
     * @return \Canpar\StructType\SubmitManifestResponse|bool
     */
    public function submitManifest(\Canpar\StructType\SubmitManifest $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->submitManifest($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named submitFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\StructType\SubmitFile $parameters
     * @return \Canpar\StructType\SubmitFileResponse|bool
     */
    public function submitFile(\Canpar\StructType\SubmitFile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->submitFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\StructType\SubmitFileResponse|\Canpar\StructType\SubmitManifestResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
