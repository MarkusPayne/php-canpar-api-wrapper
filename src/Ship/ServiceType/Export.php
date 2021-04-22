<?php

namespace Canpar\Ship\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Export ServiceType
 * @subpackage Services
 */
class Export extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named exportAddressBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\ExportAddressBook $parameters
     * @return \Canpar\Ship\StructType\ExportAddressBookResponse|bool
     */
    public function exportAddressBook(\Canpar\Ship\StructType\ExportAddressBook $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->exportAddressBook($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportCommodities
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\ExportCommodities $parameters
     * @return \Canpar\Ship\StructType\ExportCommoditiesResponse|bool
     */
    public function exportCommodities(\Canpar\Ship\StructType\ExportCommodities $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->exportCommodities($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportCostCentres
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\ExportCostCentres $parameters
     * @return \Canpar\Ship\StructType\ExportCostCentresResponse|bool
     */
    public function exportCostCentres(\Canpar\Ship\StructType\ExportCostCentres $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->exportCostCentres($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportBoxes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\ExportBoxes $parameters
     * @return \Canpar\Ship\StructType\ExportBoxesResponse|bool
     */
    public function exportBoxes(\Canpar\Ship\StructType\ExportBoxes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->exportBoxes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Ship\StructType\ExportAddressBookResponse|\Canpar\Ship\StructType\ExportBoxesResponse|\Canpar\Ship\StructType\ExportCommoditiesResponse|\Canpar\Ship\StructType\ExportCostCentresResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
