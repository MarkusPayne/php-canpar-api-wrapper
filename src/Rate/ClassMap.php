<?php

namespace Canpar\Rate;

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
            'GetVersionRs' => '\\Canpar\\Rate\\StructType\\GetVersionRs',
            'IsResidentialRq' => '\\Canpar\\Rate\\StructType\\IsResidentialRq',
            'IsResidentialRs' => '\\Canpar\\Rate\\StructType\\IsResidentialRs',
            'RateShipmentPublicRq' => '\\Canpar\\Rate\\StructType\\RateShipmentPublicRq',
            'RateShipmentPublicRs' => '\\Canpar\\Rate\\StructType\\RateShipmentPublicRs',
            'RateShipmentAllServicesRq' => '\\Canpar\\Rate\\StructType\\RateShipmentAllServicesRq',
            'RateShipmentAllServicesRs' => '\\Canpar\\Rate\\StructType\\RateShipmentAllServicesRs',
            'RateShipmentAllPremiumsRq' => '\\Canpar\\Rate\\StructType\\RateShipmentAllPremiumsRq',
            'RateShipmentAllPremiumsRs' => '\\Canpar\\Rate\\StructType\\RateShipmentAllPremiumsRs',
            'GetAvailableServicesRq' => '\\Canpar\\Rate\\StructType\\GetAvailableServicesRq',
            'GetAvailableServicesRs' => '\\Canpar\\Rate\\StructType\\GetAvailableServicesRs',
            'IsPostalCodeValidRq' => '\\Canpar\\Rate\\StructType\\IsPostalCodeValidRq',
            'IsPostalCodeValidRs' => '\\Canpar\\Rate\\StructType\\IsPostalCodeValidRs',
            'IsAlternativeServiceRq' => '\\Canpar\\Rate\\StructType\\IsAlternativeServiceRq',
            'IsAlternativeServiceRs' => '\\Canpar\\Rate\\StructType\\IsAlternativeServiceRs',
            'GetProfilesRq' => '\\Canpar\\Rate\\StructType\\GetProfilesRq',
            'GetProfilesRs' => '\\Canpar\\Rate\\StructType\\GetProfilesRs',
            'RateShipmentRq' => '\\Canpar\\Rate\\StructType\\RateShipmentRq',
            'RateShipmentRs' => '\\Canpar\\Rate\\StructType\\RateShipmentRs',
            'SubmitManifestRq' => '\\Canpar\\Rate\\StructType\\SubmitManifestRq',
            'SubmitManifestRs' => '\\Canpar\\Rate\\StructType\\SubmitManifestRs',
            'SearchCanadaPostRq' => '\\Canpar\\Rate\\StructType\\SearchCanadaPostRq',
            'SearchCanadaPostRs' => '\\Canpar\\Rate\\StructType\\SearchCanadaPostRs',
            'GetProfileRq' => '\\Canpar\\Rate\\StructType\\GetProfileRq',
            'GetProfileRs' => '\\Canpar\\Rate\\StructType\\GetProfileRs',
            'SubmitFileRq' => '\\Canpar\\Rate\\StructType\\SubmitFileRq',
            'SubmitFileRs' => '\\Canpar\\Rate\\StructType\\SubmitFileRs',
            'Shipment' => '\\Canpar\\Rate\\StructType\\Shipment',
            'Address' => '\\Canpar\\Rate\\StructType\\Address',
            'Package' => '\\Canpar\\Rate\\StructType\\Package',
            'COD' => '\\Canpar\\Rate\\StructType\\COD',
            'Proforma' => '\\Canpar\\Rate\\StructType\\Proforma',
            'ProformaItem' => '\\Canpar\\Rate\\StructType\\ProformaItem',
            'CommodityInfo' => '\\Canpar\\Rate\\StructType\\CommodityInfo',
            'ProcessShipmentResult' => '\\Canpar\\Rate\\StructType\\ProcessShipmentResult',
            'GetAvailableServicesResult' => '\\Canpar\\Rate\\StructType\\GetAvailableServicesResult',
            'Profile' => '\\Canpar\\Rate\\StructType\\Profile',
            'Service' => '\\Canpar\\Rate\\StructType\\Service',
            'getVersionResponse' => '\\Canpar\\Rate\\StructType\\GetVersionResponse',
            'isResidential' => '\\Canpar\\Rate\\StructType\\IsResidential',
            'isResidentialResponse' => '\\Canpar\\Rate\\StructType\\IsResidentialResponse',
            'rateShipmentPublic' => '\\Canpar\\Rate\\StructType\\RateShipmentPublic',
            'rateShipmentPublicResponse' => '\\Canpar\\Rate\\StructType\\RateShipmentPublicResponse',
            'rateShipmentAllServices' => '\\Canpar\\Rate\\StructType\\RateShipmentAllServices',
            'rateShipmentAllServicesResponse' => '\\Canpar\\Rate\\StructType\\RateShipmentAllServicesResponse',
            'rateShipmentAllPremiums' => '\\Canpar\\Rate\\StructType\\RateShipmentAllPremiums',
            'rateShipmentAllPremiumsResponse' => '\\Canpar\\Rate\\StructType\\RateShipmentAllPremiumsResponse',
            'getAvailableServices' => '\\Canpar\\Rate\\StructType\\GetAvailableServices',
            'getAvailableServicesResponse' => '\\Canpar\\Rate\\StructType\\GetAvailableServicesResponse',
            'isPostalCodeValid' => '\\Canpar\\Rate\\StructType\\IsPostalCodeValid',
            'isPostalCodeValidResponse' => '\\Canpar\\Rate\\StructType\\IsPostalCodeValidResponse',
            'isAlternativeService' => '\\Canpar\\Rate\\StructType\\IsAlternativeService',
            'isAlternativeServiceResponse' => '\\Canpar\\Rate\\StructType\\IsAlternativeServiceResponse',
            'getProfiles' => '\\Canpar\\Rate\\StructType\\GetProfiles',
            'getProfilesResponse' => '\\Canpar\\Rate\\StructType\\GetProfilesResponse',
            'rateShipment' => '\\Canpar\\Rate\\StructType\\RateShipment',
            'rateShipmentResponse' => '\\Canpar\\Rate\\StructType\\RateShipmentResponse',
            'submitManifest' => '\\Canpar\\Rate\\StructType\\SubmitManifest',
            'submitManifestResponse' => '\\Canpar\\Rate\\StructType\\SubmitManifestResponse',
            'searchCanadaPost' => '\\Canpar\\Rate\\StructType\\SearchCanadaPost',
            'searchCanadaPostResponse' => '\\Canpar\\Rate\\StructType\\SearchCanadaPostResponse',
            'getProfile' => '\\Canpar\\Rate\\StructType\\GetProfile',
            'getProfileResponse' => '\\Canpar\\Rate\\StructType\\GetProfileResponse',
            'submitFile' => '\\Canpar\\Rate\\StructType\\SubmitFile',
            'submitFileResponse' => '\\Canpar\\Rate\\StructType\\SubmitFileResponse',
        );
    }
}
