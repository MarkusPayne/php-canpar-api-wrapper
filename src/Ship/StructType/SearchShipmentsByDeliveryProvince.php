<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchShipmentsByDeliveryProvince StructType
 * @subpackage Structs
 */
class SearchShipmentsByDeliveryProvince extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\SearchShipmentsByDeliveryProvinceRq
     */
    public $request;
    /**
     * Constructor method for searchShipmentsByDeliveryProvince
     * @uses SearchShipmentsByDeliveryProvince::setRequest()
     * @param \Canpar\Ship\StructType\SearchShipmentsByDeliveryProvinceRq $request
     */
    public function __construct(\Canpar\Ship\StructType\SearchShipmentsByDeliveryProvinceRq $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\SearchShipmentsByDeliveryProvinceRq|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\SearchShipmentsByDeliveryProvinceRq $request
     * @return \Canpar\Ship\StructType\SearchShipmentsByDeliveryProvince
     */
    public function setRequest(\Canpar\Ship\StructType\SearchShipmentsByDeliveryProvinceRq $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
