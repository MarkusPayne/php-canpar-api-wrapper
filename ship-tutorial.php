<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://sandbox.canpar.com/canshipws/services/CanshipBusinessService?wsdl',
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
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://sandbox.canpar.com/canshipws/services/CanshipBusinessService?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Canpar\Ship\ClassMap::get(),
);
/**
 * Samples for Autorating ServiceType
 */
$autorating = new \Canpar\Ship\ServiceType\Autorating($options);
/**
 * Sample call for autorating operation/method
 */
if ($autorating->autorating(new \Canpar\Ship\StructType\Autorating()) !== false) {
    print_r($autorating->getResult());
} else {
    print_r($autorating->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Canpar\Ship\ServiceType\Get($options);
/**
 * Sample call for getAddressBookLimit operation/method
 */
if ($get->getAddressBookLimit(new \Canpar\Ship\StructType\GetAddressBookLimit()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getManifest operation/method
 */
if ($get->getManifest(new \Canpar\Ship\StructType\GetManifest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLabels operation/method
 */
if ($get->getLabels(new \Canpar\Ship\StructType\GetLabels()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUsers operation/method
 */
if ($get->getUsers(new \Canpar\Ship\StructType\GetUsers()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLabelsAdvancedV2 operation/method
 */
if ($get->getLabelsAdvancedV2(new \Canpar\Ship\StructType\GetLabelsAdvancedV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getProforma operation/method
 */
if ($get->getProforma(new \Canpar\Ship\StructType\GetProforma()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getShipmentsBeforeDay operation/method
 */
if ($get->getShipmentsBeforeDay(new \Canpar\Ship\StructType\GetShipmentsBeforeDay()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLastManifestNumber operation/method
 */
if ($get->getLastManifestNumber(new \Canpar\Ship\StructType\GetLastManifestNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPreferences operation/method
 */
if ($get->getPreferences(new \Canpar\Ship\StructType\GetPreferences()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBoxes operation/method
 */
if ($get->getBoxes(new \Canpar\Ship\StructType\GetBoxes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFuels operation/method
 */
if ($get->getFuels(new \Canpar\Ship\StructType\GetFuels()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getShipmentsAfterDay operation/method
 */
if ($get->getShipmentsAfterDay(new \Canpar\Ship\StructType\GetShipmentsAfterDay()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUser operation/method
 */
if ($get->getUser(new \Canpar\Ship\StructType\GetUser()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCommodities operation/method
 */
if ($get->getCommodities(new \Canpar\Ship\StructType\GetCommodities()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGlobalPreference operation/method
 */
if ($get->getGlobalPreference(new \Canpar\Ship\StructType\GetGlobalPreference()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getConsolidatedProforma operation/method
 */
if ($get->getConsolidatedProforma(new \Canpar\Ship\StructType\GetConsolidatedProforma()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getVersion operation/method
 */
if ($get->getVersion() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCostCentres operation/method
 */
if ($get->getCostCentres(new \Canpar\Ship\StructType\GetCostCentres()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLabelsAdvanced operation/method
 */
if ($get->getLabelsAdvanced(new \Canpar\Ship\StructType\GetLabelsAdvanced()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSTOs operation/method
 */
if ($get->getSTOs(new \Canpar\Ship\StructType\GetSTOs()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \Canpar\Ship\ServiceType\Search($options);
/**
 * Sample call for searchAddressBookByProvince operation/method
 */
if ($search->searchAddressBookByProvince(new \Canpar\Ship\StructType\SearchAddressBookByProvince()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByOrderId operation/method
 */
if ($search->searchShipmentsByOrderId(new \Canpar\Ship\StructType\SearchShipmentsByOrderId()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByReference operation/method
 */
if ($search->searchShipmentsByReference(new \Canpar\Ship\StructType\SearchShipmentsByReference()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAddressBookByAddressId operation/method
 */
if ($search->searchAddressBookByAddressId(new \Canpar\Ship\StructType\SearchAddressBookByAddressId()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAddressBookByCity operation/method
 */
if ($search->searchAddressBookByCity(new \Canpar\Ship\StructType\SearchAddressBookByCity()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByDeliveryAddressId operation/method
 */
if ($search->searchShipmentsByDeliveryAddressId(new \Canpar\Ship\StructType\SearchShipmentsByDeliveryAddressId()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByDeliveryName operation/method
 */
if ($search->searchShipmentsByDeliveryName(new \Canpar\Ship\StructType\SearchShipmentsByDeliveryName()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByBarcode operation/method
 */
if ($search->searchShipmentsByBarcode(new \Canpar\Ship\StructType\SearchShipmentsByBarcode()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByCostCentre operation/method
 */
if ($search->searchShipmentsByCostCentre(new \Canpar\Ship\StructType\SearchShipmentsByCostCentre()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByManifestNum operation/method
 */
if ($search->searchShipmentsByManifestNum(new \Canpar\Ship\StructType\SearchShipmentsByManifestNum()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByDeliveryAddress operation/method
 */
if ($search->searchShipmentsByDeliveryAddress(new \Canpar\Ship\StructType\SearchShipmentsByDeliveryAddress()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByDeliveryPostalCode operation/method
 */
if ($search->searchShipmentsByDeliveryPostalCode(new \Canpar\Ship\StructType\SearchShipmentsByDeliveryPostalCode()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAddressBookByPhone operation/method
 */
if ($search->searchAddressBookByPhone(new \Canpar\Ship\StructType\SearchAddressBookByPhone()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByDeliveryCity operation/method
 */
if ($search->searchShipmentsByDeliveryCity(new \Canpar\Ship\StructType\SearchShipmentsByDeliveryCity()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAddressBookByPostalCode operation/method
 */
if ($search->searchAddressBookByPostalCode(new \Canpar\Ship\StructType\SearchAddressBookByPostalCode()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAddressBookByReference operation/method
 */
if ($search->searchAddressBookByReference(new \Canpar\Ship\StructType\SearchAddressBookByReference()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByAlternativeReference operation/method
 */
if ($search->searchShipmentsByAlternativeReference(new \Canpar\Ship\StructType\SearchShipmentsByAlternativeReference()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByShippingDate operation/method
 */
if ($search->searchShipmentsByShippingDate(new \Canpar\Ship\StructType\SearchShipmentsByShippingDate()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAddressByPhone operation/method
 */
if ($search->searchAddressByPhone(new \Canpar\Ship\StructType\SearchAddressByPhone()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAddressBookByCostCentre operation/method
 */
if ($search->searchAddressBookByCostCentre(new \Canpar\Ship\StructType\SearchAddressBookByCostCentre()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAddressBookByName operation/method
 */
if ($search->searchAddressBookByName(new \Canpar\Ship\StructType\SearchAddressBookByName()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchShipmentsByDeliveryProvince operation/method
 */
if ($search->searchShipmentsByDeliveryProvince(new \Canpar\Ship\StructType\SearchShipmentsByDeliveryProvince()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Samples for Export ServiceType
 */
$export = new \Canpar\Ship\ServiceType\Export($options);
/**
 * Sample call for exportAddressBook operation/method
 */
if ($export->exportAddressBook(new \Canpar\Ship\StructType\ExportAddressBook()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportCommodities operation/method
 */
if ($export->exportCommodities(new \Canpar\Ship\StructType\ExportCommodities()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportCostCentres operation/method
 */
if ($export->exportCostCentres(new \Canpar\Ship\StructType\ExportCostCentres()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Sample call for exportBoxes operation/method
 */
if ($export->exportBoxes(new \Canpar\Ship\StructType\ExportBoxes()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Samples for Save ServiceType
 */
$save = new \Canpar\Ship\ServiceType\Save($options);
/**
 * Sample call for savePreference operation/method
 */
if ($save->savePreference(new \Canpar\Ship\StructType\SavePreference()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveGlobalPreference operation/method
 */
if ($save->saveGlobalPreference(new \Canpar\Ship\StructType\SaveGlobalPreference()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for savePreferenceAllUsers operation/method
 */
if ($save->savePreferenceAllUsers(new \Canpar\Ship\StructType\SavePreferenceAllUsers()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveUser operation/method
 */
if ($save->saveUser(new \Canpar\Ship\StructType\SaveUser()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAddressBook operation/method
 */
if ($save->saveAddressBook(new \Canpar\Ship\StructType\SaveAddressBook()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for savePreferenceAllShippers operation/method
 */
if ($save->savePreferenceAllShippers(new \Canpar\Ship\StructType\SavePreferenceAllShippers()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveFuel operation/method
 */
if ($save->saveFuel(new \Canpar\Ship\StructType\SaveFuel()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBox operation/method
 */
if ($save->saveBox(new \Canpar\Ship\StructType\SaveBox()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveGlobalPreferenceAllUsers operation/method
 */
if ($save->saveGlobalPreferenceAllUsers(new \Canpar\Ship\StructType\SaveGlobalPreferenceAllUsers()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCostCentre operation/method
 */
if ($save->saveCostCentre(new \Canpar\Ship\StructType\SaveCostCentre()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveProforma operation/method
 */
if ($save->saveProforma(new \Canpar\Ship\StructType\SaveProforma()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveSTO operation/method
 */
if ($save->saveSTO(new \Canpar\Ship\StructType\SaveSTO()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCommodity operation/method
 */
if ($save->saveCommodity(new \Canpar\Ship\StructType\SaveCommodity()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Import ServiceType
 */
$import = new \Canpar\Ship\ServiceType\Import($options);
/**
 * Sample call for importAddressBook operation/method
 */
if ($import->importAddressBook(new \Canpar\Ship\StructType\ImportAddressBook()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Sample call for importCostCentres operation/method
 */
if ($import->importCostCentres(new \Canpar\Ship\StructType\ImportCostCentres()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Sample call for importCommodities operation/method
 */
if ($import->importCommodities(new \Canpar\Ship\StructType\ImportCommodities()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Sample call for importBoxes operation/method
 */
if ($import->importBoxes(new \Canpar\Ship\StructType\ImportBoxes()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Canpar\Ship\ServiceType\Delete($options);
/**
 * Sample call for deleteGlobalPreference operation/method
 */
if ($delete->deleteGlobalPreference(new \Canpar\Ship\StructType\DeleteGlobalPreference()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSTO operation/method
 */
if ($delete->deleteSTO(new \Canpar\Ship\StructType\DeleteSTO()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deletePreference operation/method
 */
if ($delete->deletePreference(new \Canpar\Ship\StructType\DeletePreference()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteUser operation/method
 */
if ($delete->deleteUser(new \Canpar\Ship\StructType\DeleteUser()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteProforma operation/method
 */
if ($delete->deleteProforma(new \Canpar\Ship\StructType\DeleteProforma()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBox operation/method
 */
if ($delete->deleteBox(new \Canpar\Ship\StructType\DeleteBox()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCommodity operation/method
 */
if ($delete->deleteCommodity(new \Canpar\Ship\StructType\DeleteCommodity()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAddressBook operation/method
 */
if ($delete->deleteAddressBook(new \Canpar\Ship\StructType\DeleteAddressBook()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCostCentre operation/method
 */
if ($delete->deleteCostCentre(new \Canpar\Ship\StructType\DeleteCostCentre()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Void ServiceType
 */
$void = new \Canpar\Ship\ServiceType\_Void($options);
/**
 * Sample call for voidShipment operation/method
 */
if ($void->voidShipment(new \Canpar\Ship\StructType\VoidShipment()) !== false) {
    print_r($void->getResult());
} else {
    print_r($void->getLastError());
}
/**
 * Samples for Unvoid ServiceType
 */
$unvoid = new \Canpar\Ship\ServiceType\Unvoid($options);
/**
 * Sample call for unvoidShipment operation/method
 */
if ($unvoid->unvoidShipment(new \Canpar\Ship\StructType\UnvoidShipment()) !== false) {
    print_r($unvoid->getResult());
} else {
    print_r($unvoid->getLastError());
}
/**
 * Samples for End ServiceType
 */
$end = new \Canpar\Ship\ServiceType\End($options);
/**
 * Sample call for endOfDay operation/method
 */
if ($end->endOfDay(new \Canpar\Ship\StructType\EndOfDay()) !== false) {
    print_r($end->getResult());
} else {
    print_r($end->getLastError());
}
/**
 * Samples for Hold ServiceType
 */
$hold = new \Canpar\Ship\ServiceType\Hold($options);
/**
 * Sample call for holdShipment operation/method
 */
if ($hold->holdShipment(new \Canpar\Ship\StructType\HoldShipment()) !== false) {
    print_r($hold->getResult());
} else {
    print_r($hold->getLastError());
}
/**
 * Samples for Process ServiceType
 */
$process = new \Canpar\Ship\ServiceType\Process($options);
/**
 * Sample call for processShipment operation/method
 */
if ($process->processShipment(new \Canpar\Ship\StructType\ProcessShipment()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Samples for Change ServiceType
 */
$change = new \Canpar\Ship\ServiceType\Change($options);
/**
 * Sample call for changePassword operation/method
 */
if ($change->changePassword(new \Canpar\Ship\StructType\ChangePassword()) !== false) {
    print_r($change->getResult());
} else {
    print_r($change->getLastError());
}
