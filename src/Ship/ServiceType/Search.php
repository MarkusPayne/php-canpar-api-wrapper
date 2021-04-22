<?php

namespace Canpar\Ship\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named searchAddressBookByProvince
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchAddressBookByProvince $parameters
     * @return \Canpar\Ship\StructType\SearchAddressBookByProvinceResponse|bool
     */
    public function searchAddressBookByProvince(\Canpar\Ship\StructType\SearchAddressBookByProvince $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchAddressBookByProvince($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchShipmentsByOrderId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByOrderId $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByOrderIdResponse|bool
     */
    public function searchShipmentsByOrderId(\Canpar\Ship\StructType\SearchShipmentsByOrderId $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByOrderId($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchShipmentsByReference
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByReference $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByReferenceResponse|bool
     */
    public function searchShipmentsByReference(\Canpar\Ship\StructType\SearchShipmentsByReference $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByReference($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAddressBookByAddressId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchAddressBookByAddressId $parameters
     * @return \Canpar\Ship\StructType\SearchAddressBookByAddressIdResponse|bool
     */
    public function searchAddressBookByAddressId(\Canpar\Ship\StructType\SearchAddressBookByAddressId $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchAddressBookByAddressId($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAddressBookByCity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchAddressBookByCity $parameters
     * @return \Canpar\Ship\StructType\SearchAddressBookByCityResponse|bool
     */
    public function searchAddressBookByCity(\Canpar\Ship\StructType\SearchAddressBookByCity $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchAddressBookByCity($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchShipmentsByDeliveryAddressId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByDeliveryAddressId $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByDeliveryAddressIdResponse|bool
     */
    public function searchShipmentsByDeliveryAddressId(\Canpar\Ship\StructType\SearchShipmentsByDeliveryAddressId $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByDeliveryAddressId($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchShipmentsByDeliveryName
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByDeliveryName $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByDeliveryNameResponse|bool
     */
    public function searchShipmentsByDeliveryName(\Canpar\Ship\StructType\SearchShipmentsByDeliveryName $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByDeliveryName($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchShipmentsByBarcode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByBarcode $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByBarcodeResponse|bool
     */
    public function searchShipmentsByBarcode(\Canpar\Ship\StructType\SearchShipmentsByBarcode $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByBarcode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchShipmentsByCostCentre
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByCostCentre $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByCostCentreResponse|bool
     */
    public function searchShipmentsByCostCentre(\Canpar\Ship\StructType\SearchShipmentsByCostCentre $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByCostCentre($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchShipmentsByManifestNum
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByManifestNum $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByManifestNumResponse|bool
     */
    public function searchShipmentsByManifestNum(\Canpar\Ship\StructType\SearchShipmentsByManifestNum $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByManifestNum($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchShipmentsByDeliveryAddress
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByDeliveryAddress $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByDeliveryAddressResponse|bool
     */
    public function searchShipmentsByDeliveryAddress(\Canpar\Ship\StructType\SearchShipmentsByDeliveryAddress $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByDeliveryAddress($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * searchShipmentsByDeliveryPostalCode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByDeliveryPostalCode $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByDeliveryPostalCodeResponse|bool
     */
    public function searchShipmentsByDeliveryPostalCode(\Canpar\Ship\StructType\SearchShipmentsByDeliveryPostalCode $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByDeliveryPostalCode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAddressBookByPhone
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchAddressBookByPhone $parameters
     * @return \Canpar\Ship\StructType\SearchAddressBookByPhoneResponse|bool
     */
    public function searchAddressBookByPhone(\Canpar\Ship\StructType\SearchAddressBookByPhone $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchAddressBookByPhone($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchShipmentsByDeliveryCity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByDeliveryCity $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByDeliveryCityResponse|bool
     */
    public function searchShipmentsByDeliveryCity(\Canpar\Ship\StructType\SearchShipmentsByDeliveryCity $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByDeliveryCity($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAddressBookByPostalCode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchAddressBookByPostalCode $parameters
     * @return \Canpar\Ship\StructType\SearchAddressBookByPostalCodeResponse|bool
     */
    public function searchAddressBookByPostalCode(\Canpar\Ship\StructType\SearchAddressBookByPostalCode $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchAddressBookByPostalCode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAddressBookByReference
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchAddressBookByReference $parameters
     * @return \Canpar\Ship\StructType\SearchAddressBookByReferenceResponse|bool
     */
    public function searchAddressBookByReference(\Canpar\Ship\StructType\SearchAddressBookByReference $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchAddressBookByReference($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * searchShipmentsByAlternativeReference
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByAlternativeReference $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByAlternativeReferenceResponse|bool
     */
    public function searchShipmentsByAlternativeReference(\Canpar\Ship\StructType\SearchShipmentsByAlternativeReference $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByAlternativeReference($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchShipmentsByShippingDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByShippingDate $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByShippingDateResponse|bool
     */
    public function searchShipmentsByShippingDate(\Canpar\Ship\StructType\SearchShipmentsByShippingDate $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByShippingDate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAddressByPhone
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchAddressByPhone $parameters
     * @return \Canpar\Ship\StructType\SearchAddressByPhoneResponse|bool
     */
    public function searchAddressByPhone(\Canpar\Ship\StructType\SearchAddressByPhone $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchAddressByPhone($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAddressBookByCostCentre
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchAddressBookByCostCentre $parameters
     * @return \Canpar\Ship\StructType\SearchAddressBookByCostCentreResponse|bool
     */
    public function searchAddressBookByCostCentre(\Canpar\Ship\StructType\SearchAddressBookByCostCentre $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchAddressBookByCostCentre($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAddressBookByName
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchAddressBookByName $parameters
     * @return \Canpar\Ship\StructType\SearchAddressBookByNameResponse|bool
     */
    public function searchAddressBookByName(\Canpar\Ship\StructType\SearchAddressBookByName $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchAddressBookByName($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchShipmentsByDeliveryProvince
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Canpar\Ship\StructType\SearchShipmentsByDeliveryProvince $parameters
     * @return \Canpar\Ship\StructType\SearchShipmentsByDeliveryProvinceResponse|bool
     */
    public function searchShipmentsByDeliveryProvince(\Canpar\Ship\StructType\SearchShipmentsByDeliveryProvince $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchShipmentsByDeliveryProvince($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Canpar\Ship\StructType\SearchAddressBookByAddressIdResponse|\Canpar\Ship\StructType\SearchAddressBookByCityResponse|\Canpar\Ship\StructType\SearchAddressBookByCostCentreResponse|\Canpar\Ship\StructType\SearchAddressBookByNameResponse|\Canpar\Ship\StructType\SearchAddressBookByPhoneResponse|\Canpar\Ship\StructType\SearchAddressBookByPostalCodeResponse|\Canpar\Ship\StructType\SearchAddressBookByProvinceResponse|\Canpar\Ship\StructType\SearchAddressBookByReferenceResponse|\Canpar\Ship\StructType\SearchAddressByPhoneResponse|\Canpar\Ship\StructType\SearchShipmentsByAlternativeReferenceResponse|\Canpar\Ship\StructType\SearchShipmentsByBarcodeResponse|\Canpar\Ship\StructType\SearchShipmentsByCostCentreResponse|\Canpar\Ship\StructType\SearchShipmentsByDeliveryAddressIdResponse|\Canpar\Ship\StructType\SearchShipmentsByDeliveryAddressResponse|\Canpar\Ship\StructType\SearchShipmentsByDeliveryCityResponse|\Canpar\Ship\StructType\SearchShipmentsByDeliveryNameResponse|\Canpar\Ship\StructType\SearchShipmentsByDeliveryPostalCodeResponse|\Canpar\Ship\StructType\SearchShipmentsByDeliveryProvinceResponse|\Canpar\Ship\StructType\SearchShipmentsByManifestNumResponse|\Canpar\Ship\StructType\SearchShipmentsByOrderIdResponse|\Canpar\Ship\StructType\SearchShipmentsByReferenceResponse|\Canpar\Ship\StructType\SearchShipmentsByShippingDateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
