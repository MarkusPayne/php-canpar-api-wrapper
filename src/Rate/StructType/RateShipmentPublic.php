<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rateShipmentPublic StructType
 * @subpackage Structs
 */
class RateShipmentPublic extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Rate\StructType\RateShipmentPublicRq
     */
    public $request;
    /**
     * Constructor method for rateShipmentPublic
     * @uses RateShipmentPublic::setRequest()
     * @param \Canpar\Rate\StructType\RateShipmentPublicRq $request
     */
    public function __construct(\Canpar\Rate\StructType\RateShipmentPublicRq $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Rate\StructType\RateShipmentPublicRq|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Rate\StructType\RateShipmentPublicRq $request
     * @return \Canpar\Rate\StructType\RateShipmentPublic
     */
    public function setRequest(\Canpar\Rate\StructType\RateShipmentPublicRq $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
