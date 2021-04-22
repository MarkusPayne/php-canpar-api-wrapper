<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rateShipmentAllServices StructType
 * @subpackage Structs
 */
class RateShipmentAllServices extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Rate\StructType\RateShipmentAllServicesRq
     */
    public $request;
    /**
     * Constructor method for rateShipmentAllServices
     * @uses RateShipmentAllServices::setRequest()
     * @param \Canpar\Rate\StructType\RateShipmentAllServicesRq $request
     */
    public function __construct(\Canpar\Rate\StructType\RateShipmentAllServicesRq $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Rate\StructType\RateShipmentAllServicesRq|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Rate\StructType\RateShipmentAllServicesRq $request
     * @return \Canpar\Rate\StructType\RateShipmentAllServices
     */
    public function setRequest(\Canpar\Rate\StructType\RateShipmentAllServicesRq $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
