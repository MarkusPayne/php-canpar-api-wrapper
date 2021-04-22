<?php

namespace Canpar\Ship\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getAddressBookLimit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetAddressBookLimit $parameters
     * @return \Canpar\Ship\StructType\GetAddressBookLimitResponse|bool
     */
    public function getAddressBookLimit(\Canpar\Ship\StructType\GetAddressBookLimit $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAddressBookLimit($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getManifest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetManifest $parameters
     * @return \Canpar\Ship\StructType\GetManifestResponse|bool
     */
    public function getManifest(\Canpar\Ship\StructType\GetManifest $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getManifest($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLabels
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetLabels $parameters
     * @return \Canpar\Ship\StructType\GetLabelsResponse|bool
     */
    public function getLabels(\Canpar\Ship\StructType\GetLabels $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLabels($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetUsers $parameters
     * @return \Canpar\Ship\StructType\GetUsersResponse|bool
     */
    public function getUsers(\Canpar\Ship\StructType\GetUsers $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getUsers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLabelsAdvancedV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetLabelsAdvancedV2 $parameters
     * @return \Canpar\Ship\StructType\GetLabelsAdvancedV2Response|bool
     */
    public function getLabelsAdvancedV2(\Canpar\Ship\StructType\GetLabelsAdvancedV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLabelsAdvancedV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProforma
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetProforma $parameters
     * @return \Canpar\Ship\StructType\GetProformaResponse|bool
     */
    public function getProforma(\Canpar\Ship\StructType\GetProforma $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getProforma($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getShipmentsBeforeDay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetShipmentsBeforeDay $parameters
     * @return \Canpar\Ship\StructType\GetShipmentsBeforeDayResponse|bool
     */
    public function getShipmentsBeforeDay(\Canpar\Ship\StructType\GetShipmentsBeforeDay $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getShipmentsBeforeDay($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLastManifestNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetLastManifestNumber $parameters
     * @return \Canpar\Ship\StructType\GetLastManifestNumberResponse|bool
     */
    public function getLastManifestNumber(\Canpar\Ship\StructType\GetLastManifestNumber $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLastManifestNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPreferences
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetPreferences $parameters
     * @return \Canpar\Ship\StructType\GetPreferencesResponse|bool
     */
    public function getPreferences(\Canpar\Ship\StructType\GetPreferences $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getPreferences($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBoxes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetBoxes $parameters
     * @return \Canpar\Ship\StructType\GetBoxesResponse|bool
     */
    public function getBoxes(\Canpar\Ship\StructType\GetBoxes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getBoxes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFuels
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetFuels $parameters
     * @return \Canpar\Ship\StructType\GetFuelsResponse|bool
     */
    public function getFuels(\Canpar\Ship\StructType\GetFuels $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getFuels($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getShipmentsAfterDay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetShipmentsAfterDay $parameters
     * @return \Canpar\Ship\StructType\GetShipmentsAfterDayResponse|bool
     */
    public function getShipmentsAfterDay(\Canpar\Ship\StructType\GetShipmentsAfterDay $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getShipmentsAfterDay($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetUser $parameters
     * @return \Canpar\Ship\StructType\GetUserResponse|bool
     */
    public function getUser(\Canpar\Ship\StructType\GetUser $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCommodities
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetCommodities $parameters
     * @return \Canpar\Ship\StructType\GetCommoditiesResponse|bool
     */
    public function getCommodities(\Canpar\Ship\StructType\GetCommodities $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCommodities($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGlobalPreference
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetGlobalPreference $parameters
     * @return \Canpar\Ship\StructType\GetGlobalPreferenceResponse|bool
     */
    public function getGlobalPreference(\Canpar\Ship\StructType\GetGlobalPreference $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getGlobalPreference($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getConsolidatedProforma
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetConsolidatedProforma $parameters
     * @return \Canpar\Ship\StructType\GetConsolidatedProformaResponse|bool
     */
    public function getConsolidatedProforma(\Canpar\Ship\StructType\GetConsolidatedProforma $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getConsolidatedProforma($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \Canpar\Ship\StructType\GetVersionResponse|bool
     */
    public function getVersion()
    {
        try {
            $this->setResult($this->getSoapClient()->getVersion());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCostCentres
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetCostCentres $parameters
     * @return \Canpar\Ship\StructType\GetCostCentresResponse|bool
     */
    public function getCostCentres(\Canpar\Ship\StructType\GetCostCentres $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCostCentres($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLabelsAdvanced
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetLabelsAdvanced $parameters
     * @return \Canpar\Ship\StructType\GetLabelsAdvancedResponse|bool
     */
    public function getLabelsAdvanced(\Canpar\Ship\StructType\GetLabelsAdvanced $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLabelsAdvanced($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSTOs
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\GetSTOs $parameters
     * @return \Canpar\Ship\StructType\GetSTOsResponse|bool
     */
    public function getSTOs(\Canpar\Ship\StructType\GetSTOs $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getSTOs($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Ship\StructType\GetAddressBookLimitResponse|\Canpar\Ship\StructType\GetBoxesResponse|\Canpar\Ship\StructType\GetCommoditiesResponse|\Canpar\Ship\StructType\GetConsolidatedProformaResponse|\Canpar\Ship\StructType\GetCostCentresResponse|\Canpar\Ship\StructType\GetFuelsResponse|\Canpar\Ship\StructType\GetGlobalPreferenceResponse|\Canpar\Ship\StructType\GetLabelsAdvancedResponse|\Canpar\Ship\StructType\GetLabelsAdvancedV2Response|\Canpar\Ship\StructType\GetLabelsResponse|\Canpar\Ship\StructType\GetLastManifestNumberResponse|\Canpar\Ship\StructType\GetManifestResponse|\Canpar\Ship\StructType\GetPreferencesResponse|\Canpar\Ship\StructType\GetProformaResponse|\Canpar\Ship\StructType\GetShipmentsAfterDayResponse|\Canpar\Ship\StructType\GetShipmentsBeforeDayResponse|\Canpar\Ship\StructType\GetSTOsResponse|\Canpar\Ship\StructType\GetUserResponse|\Canpar\Ship\StructType\GetUsersResponse|\Canpar\Ship\StructType\GetVersionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
