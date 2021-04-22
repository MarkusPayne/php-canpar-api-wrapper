<?php

namespace Canpar\Ship\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named savePreference
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SavePreference $parameters
     * @return \Canpar\Ship\StructType\SavePreferenceResponse|bool
     */
    public function savePreference(\Canpar\Ship\StructType\SavePreference $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->savePreference($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveGlobalPreference
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SaveGlobalPreference $parameters
     * @return \Canpar\Ship\StructType\SaveGlobalPreferenceResponse|bool
     */
    public function saveGlobalPreference(\Canpar\Ship\StructType\SaveGlobalPreference $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->saveGlobalPreference($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named savePreferenceAllUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SavePreferenceAllUsers $parameters
     * @return \Canpar\Ship\StructType\SavePreferenceAllUsersResponse|bool
     */
    public function savePreferenceAllUsers(\Canpar\Ship\StructType\SavePreferenceAllUsers $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->savePreferenceAllUsers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SaveUser $parameters
     * @return \Canpar\Ship\StructType\SaveUserResponse|bool
     */
    public function saveUser(\Canpar\Ship\StructType\SaveUser $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->saveUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAddressBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SaveAddressBook $parameters
     * @return \Canpar\Ship\StructType\SaveAddressBookResponse|bool
     */
    public function saveAddressBook(\Canpar\Ship\StructType\SaveAddressBook $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->saveAddressBook($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named savePreferenceAllShippers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SavePreferenceAllShippers $parameters
     * @return \Canpar\Ship\StructType\SavePreferenceAllShippersResponse|bool
     */
    public function savePreferenceAllShippers(\Canpar\Ship\StructType\SavePreferenceAllShippers $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->savePreferenceAllShippers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveFuel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SaveFuel $parameters
     * @return \Canpar\Ship\StructType\SaveFuelResponse|bool
     */
    public function saveFuel(\Canpar\Ship\StructType\SaveFuel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->saveFuel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBox
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SaveBox $parameters
     * @return \Canpar\Ship\StructType\SaveBoxResponse|bool
     */
    public function saveBox(\Canpar\Ship\StructType\SaveBox $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->saveBox($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveGlobalPreferenceAllUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SaveGlobalPreferenceAllUsers $parameters
     * @return \Canpar\Ship\StructType\SaveGlobalPreferenceAllUsersResponse|bool
     */
    public function saveGlobalPreferenceAllUsers(\Canpar\Ship\StructType\SaveGlobalPreferenceAllUsers $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->saveGlobalPreferenceAllUsers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCostCentre
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SaveCostCentre $parameters
     * @return \Canpar\Ship\StructType\SaveCostCentreResponse|bool
     */
    public function saveCostCentre(\Canpar\Ship\StructType\SaveCostCentre $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->saveCostCentre($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveProforma
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SaveProforma $parameters
     * @return \Canpar\Ship\StructType\SaveProformaResponse|bool
     */
    public function saveProforma(\Canpar\Ship\StructType\SaveProforma $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->saveProforma($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSTO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SaveSTO $parameters
     * @return \Canpar\Ship\StructType\SaveSTOResponse|bool
     */
    public function saveSTO(\Canpar\Ship\StructType\SaveSTO $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->saveSTO($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCommodity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SaveCommodity $parameters
     * @return \Canpar\Ship\StructType\SaveCommodityResponse|bool
     */
    public function saveCommodity(\Canpar\Ship\StructType\SaveCommodity $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->saveCommodity($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Ship\StructType\SaveAddressBookResponse|\Canpar\Ship\StructType\SaveBoxResponse|\Canpar\Ship\StructType\SaveCommodityResponse|\Canpar\Ship\StructType\SaveCostCentreResponse|\Canpar\Ship\StructType\SaveFuelResponse|\Canpar\Ship\StructType\SaveGlobalPreferenceAllUsersResponse|\Canpar\Ship\StructType\SaveGlobalPreferenceResponse|\Canpar\Ship\StructType\SavePreferenceAllShippersResponse|\Canpar\Ship\StructType\SavePreferenceAllUsersResponse|\Canpar\Ship\StructType\SavePreferenceResponse|\Canpar\Ship\StructType\SaveProformaResponse|\Canpar\Ship\StructType\SaveSTOResponse|\Canpar\Ship\StructType\SaveUserResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
