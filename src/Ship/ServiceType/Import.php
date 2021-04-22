<?php

namespace Canpar\Ship\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Import ServiceType
 * @subpackage Services
 */
class Import extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named importAddressBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\ImportAddressBook $parameters
     * @return \Canpar\Ship\StructType\ImportAddressBookResponse|bool
     */
    public function importAddressBook(\Canpar\Ship\StructType\ImportAddressBook $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->importAddressBook($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named importCostCentres
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\ImportCostCentres $parameters
     * @return \Canpar\Ship\StructType\ImportCostCentresResponse|bool
     */
    public function importCostCentres(\Canpar\Ship\StructType\ImportCostCentres $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->importCostCentres($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named importCommodities
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\ImportCommodities $parameters
     * @return \Canpar\Ship\StructType\ImportCommoditiesResponse|bool
     */
    public function importCommodities(\Canpar\Ship\StructType\ImportCommodities $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->importCommodities($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named importBoxes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\ImportBoxes $parameters
     * @return \Canpar\Ship\StructType\ImportBoxesResponse|bool
     */
    public function importBoxes(\Canpar\Ship\StructType\ImportBoxes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->importBoxes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Ship\StructType\ImportAddressBookResponse|\Canpar\Ship\StructType\ImportBoxesResponse|\Canpar\Ship\StructType\ImportCommoditiesResponse|\Canpar\Ship\StructType\ImportCostCentresResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
