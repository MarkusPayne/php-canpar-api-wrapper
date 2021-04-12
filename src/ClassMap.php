<?php

namespace Canpar;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'GetVersionRs' => '\\Canpar\\StructType\\GetVersionRs',
            'IsResidentialRq' => '\\Canpar\\StructType\\IsResidentialRq',
            'IsResidentialRs' => '\\Canpar\\StructType\\IsResidentialRs',
            'GetProfileRq' => '\\Canpar\\StructType\\GetProfileRq',
            'GetProfileRs' => '\\Canpar\\StructType\\GetProfileRs',
            'RateShipmentRq' => '\\Canpar\\StructType\\RateShipmentRq',
            'RateShipmentRs' => '\\Canpar\\StructType\\RateShipmentRs',
            'SubmitFileRq' => '\\Canpar\\StructType\\SubmitFileRq',
            'SubmitFileRs' => '\\Canpar\\StructType\\SubmitFileRs',
            'GetProfilesRq' => '\\Canpar\\StructType\\GetProfilesRq',
            'GetProfilesRs' => '\\Canpar\\StructType\\GetProfilesRs',
            'SearchCanadaPostRq' => '\\Canpar\\StructType\\SearchCanadaPostRq',
            'SearchCanadaPostRs' => '\\Canpar\\StructType\\SearchCanadaPostRs',
            'SubmitManifestRq' => '\\Canpar\\StructType\\SubmitManifestRq',
            'SubmitManifestRs' => '\\Canpar\\StructType\\SubmitManifestRs',
            'RateShipmentPublicRq' => '\\Canpar\\StructType\\RateShipmentPublicRq',
            'RateShipmentPublicRs' => '\\Canpar\\StructType\\RateShipmentPublicRs',
            'RateShipmentAllServicesRq' => '\\Canpar\\StructType\\RateShipmentAllServicesRq',
            'RateShipmentAllServicesRs' => '\\Canpar\\StructType\\RateShipmentAllServicesRs',
            'RateShipmentAllPremiumsRq' => '\\Canpar\\StructType\\RateShipmentAllPremiumsRq',
            'RateShipmentAllPremiumsRs' => '\\Canpar\\StructType\\RateShipmentAllPremiumsRs',
            'IsAlternativeServiceRq' => '\\Canpar\\StructType\\IsAlternativeServiceRq',
            'IsAlternativeServiceRs' => '\\Canpar\\StructType\\IsAlternativeServiceRs',
            'IsPostalCodeValidRq' => '\\Canpar\\StructType\\IsPostalCodeValidRq',
            'IsPostalCodeValidRs' => '\\Canpar\\StructType\\IsPostalCodeValidRs',
            'GetAvailableServicesRq' => '\\Canpar\\StructType\\GetAvailableServicesRq',
            'GetAvailableServicesRs' => '\\Canpar\\StructType\\GetAvailableServicesRs',
            'Profile' => '\\Canpar\\StructType\\Profile',
            'Address' => '\\Canpar\\StructType\\Address',
            'Service' => '\\Canpar\\StructType\\Service',
            'Shipment' => '\\Canpar\\StructType\\Shipment',
            'Package' => '\\Canpar\\StructType\\Package',
            'COD' => '\\Canpar\\StructType\\COD',
            'Proforma' => '\\Canpar\\StructType\\Proforma',
            'ProformaItem' => '\\Canpar\\StructType\\ProformaItem',
            'CommodityInfo' => '\\Canpar\\StructType\\CommodityInfo',
            'ProcessShipmentResult' => '\\Canpar\\StructType\\ProcessShipmentResult',
            'GetAvailableServicesResult' => '\\Canpar\\StructType\\GetAvailableServicesResult',
            'getVersionResponse' => '\\Canpar\\StructType\\GetVersionResponse',
            'isResidential' => '\\Canpar\\StructType\\IsResidential',
            'isResidentialResponse' => '\\Canpar\\StructType\\IsResidentialResponse',
            'getProfile' => '\\Canpar\\StructType\\GetProfile',
            'getProfileResponse' => '\\Canpar\\StructType\\GetProfileResponse',
            'rateShipment' => '\\Canpar\\StructType\\RateShipment',
            'rateShipmentResponse' => '\\Canpar\\StructType\\RateShipmentResponse',
            'submitFile' => '\\Canpar\\StructType\\SubmitFile',
            'submitFileResponse' => '\\Canpar\\StructType\\SubmitFileResponse',
            'getProfiles' => '\\Canpar\\StructType\\GetProfiles',
            'getProfilesResponse' => '\\Canpar\\StructType\\GetProfilesResponse',
            'searchCanadaPost' => '\\Canpar\\StructType\\SearchCanadaPost',
            'searchCanadaPostResponse' => '\\Canpar\\StructType\\SearchCanadaPostResponse',
            'submitManifest' => '\\Canpar\\StructType\\SubmitManifest',
            'submitManifestResponse' => '\\Canpar\\StructType\\SubmitManifestResponse',
            'rateShipmentPublic' => '\\Canpar\\StructType\\RateShipmentPublic',
            'rateShipmentPublicResponse' => '\\Canpar\\StructType\\RateShipmentPublicResponse',
            'rateShipmentAllServices' => '\\Canpar\\StructType\\RateShipmentAllServices',
            'rateShipmentAllServicesResponse' => '\\Canpar\\StructType\\RateShipmentAllServicesResponse',
            'rateShipmentAllPremiums' => '\\Canpar\\StructType\\RateShipmentAllPremiums',
            'rateShipmentAllPremiumsResponse' => '\\Canpar\\StructType\\RateShipmentAllPremiumsResponse',
            'isAlternativeService' => '\\Canpar\\StructType\\IsAlternativeService',
            'isAlternativeServiceResponse' => '\\Canpar\\StructType\\IsAlternativeServiceResponse',
            'isPostalCodeValid' => '\\Canpar\\StructType\\IsPostalCodeValid',
            'isPostalCodeValidResponse' => '\\Canpar\\StructType\\IsPostalCodeValidResponse',
            'getAvailableServices' => '\\Canpar\\StructType\\GetAvailableServices',
            'getAvailableServicesResponse' => '\\Canpar\\StructType\\GetAvailableServicesResponse',
        );
    }
}
