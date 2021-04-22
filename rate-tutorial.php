<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://sandbox.canpar.com/canshipws/services/CanparRatingService?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://sandbox.canpar.com/canshipws/services/CanparRatingService?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Canpar\Rate\ClassMap::get(),
);
/**
 * Samples for Get ServiceType
 */
$get = new \Canpar\Rate\ServiceType\Get($options);
/**
 * Sample call for getVersion operation/method
 */
if ($get->getVersion() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableServices operation/method
 */
if ($get->getAvailableServices(new \Canpar\Rate\StructType\GetAvailableServices()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getProfile operation/method
 */
if ($get->getProfile(new \Canpar\Rate\StructType\GetProfile()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getProfiles operation/method
 */
if ($get->getProfiles(new \Canpar\Rate\StructType\GetProfiles()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Rate ServiceType
 */
$rate = new \Canpar\Rate\ServiceType\Rate($options);
/**
 * Sample call for rateShipmentPublic operation/method
 */
if ($rate->rateShipmentPublic(new \Canpar\Rate\StructType\RateShipmentPublic()) !== false) {
    print_r($rate->getResult());
} else {
    print_r($rate->getLastError());
}
/**
 * Sample call for rateShipment operation/method
 */
if ($rate->rateShipment(new \Canpar\Rate\StructType\RateShipment()) !== false) {
    print_r($rate->getResult());
} else {
    print_r($rate->getLastError());
}
/**
 * Sample call for rateShipmentAllServices operation/method
 */
if ($rate->rateShipmentAllServices(new \Canpar\Rate\StructType\RateShipmentAllServices()) !== false) {
    print_r($rate->getResult());
} else {
    print_r($rate->getLastError());
}
/**
 * Sample call for rateShipmentAllPremiums operation/method
 */
if ($rate->rateShipmentAllPremiums(new \Canpar\Rate\StructType\RateShipmentAllPremiums()) !== false) {
    print_r($rate->getResult());
} else {
    print_r($rate->getLastError());
}
/**
 * Samples for Submit ServiceType
 */
$submit = new \Canpar\Rate\ServiceType\Submit($options);
/**
 * Sample call for submitManifest operation/method
 */
if ($submit->submitManifest(new \Canpar\Rate\StructType\SubmitManifest()) !== false) {
    print_r($submit->getResult());
} else {
    print_r($submit->getLastError());
}
/**
 * Sample call for submitFile operation/method
 */
if ($submit->submitFile(new \Canpar\Rate\StructType\SubmitFile()) !== false) {
    print_r($submit->getResult());
} else {
    print_r($submit->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \Canpar\Rate\ServiceType\Search($options);
/**
 * Sample call for searchCanadaPost operation/method
 */
if ($search->searchCanadaPost(new \Canpar\Rate\StructType\SearchCanadaPost()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Samples for Is ServiceType
 */
$is = new \Canpar\Rate\ServiceType\Is($options);
/**
 * Sample call for isPostalCodeValid operation/method
 */
if ($is->isPostalCodeValid(new \Canpar\Rate\StructType\IsPostalCodeValid()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Sample call for isAlternativeService operation/method
 */
if ($is->isAlternativeService(new \Canpar\Rate\StructType\IsAlternativeService()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Sample call for isResidential operation/method
 */
if ($is->isResidential(new \Canpar\Rate\StructType\IsResidential()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
