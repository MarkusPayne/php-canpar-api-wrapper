<?php

namespace Canpar\Ship\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named deleteGlobalPreference
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\DeleteGlobalPreference $parameters
     * @return \Canpar\Ship\StructType\DeleteGlobalPreferenceResponse|bool
     */
    public function deleteGlobalPreference(\Canpar\Ship\StructType\DeleteGlobalPreference $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->deleteGlobalPreference($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\DeleteSTO $parameters
     * @return \Canpar\Ship\StructType\DeleteSTOResponse|bool
     */
    public function deleteSTO(\Canpar\Ship\StructType\DeleteSTO $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->deleteSTO($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePreference
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\DeletePreference $parameters
     * @return \Canpar\Ship\StructType\DeletePreferenceResponse|bool
     */
    public function deletePreference(\Canpar\Ship\StructType\DeletePreference $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->deletePreference($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\DeleteUser $parameters
     * @return \Canpar\Ship\StructType\DeleteUserResponse|bool
     */
    public function deleteUser(\Canpar\Ship\StructType\DeleteUser $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->deleteUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteProforma
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\DeleteProforma $parameters
     * @return \Canpar\Ship\StructType\DeleteProformaResponse|bool
     */
    public function deleteProforma(\Canpar\Ship\StructType\DeleteProforma $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->deleteProforma($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBox
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\DeleteBox $parameters
     * @return \Canpar\Ship\StructType\DeleteBoxResponse|bool
     */
    public function deleteBox(\Canpar\Ship\StructType\DeleteBox $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->deleteBox($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCommodity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\DeleteCommodity $parameters
     * @return \Canpar\Ship\StructType\DeleteCommodityResponse|bool
     */
    public function deleteCommodity(\Canpar\Ship\StructType\DeleteCommodity $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->deleteCommodity($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAddressBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\DeleteAddressBook $parameters
     * @return \Canpar\Ship\StructType\DeleteAddressBookResponse|bool
     */
    public function deleteAddressBook(\Canpar\Ship\StructType\DeleteAddressBook $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->deleteAddressBook($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCostCentre
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\DeleteCostCentre $parameters
     * @return \Canpar\Ship\StructType\DeleteCostCentreResponse|bool
     */
    public function deleteCostCentre(\Canpar\Ship\StructType\DeleteCostCentre $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->deleteCostCentre($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Ship\StructType\DeleteAddressBookResponse|\Canpar\Ship\StructType\DeleteBoxResponse|\Canpar\Ship\StructType\DeleteCommodityResponse|\Canpar\Ship\StructType\DeleteCostCentreResponse|\Canpar\Ship\StructType\DeleteGlobalPreferenceResponse|\Canpar\Ship\StructType\DeletePreferenceResponse|\Canpar\Ship\StructType\DeleteProformaResponse|\Canpar\Ship\StructType\DeleteSTOResponse|\Canpar\Ship\StructType\DeleteUserResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
