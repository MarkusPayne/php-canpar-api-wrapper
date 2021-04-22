<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateShipmentPublicRq StructType
 * @subpackage Structs
 */
class RateShipmentPublicRq extends AbstractStructBase
{
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Rate\StructType\Shipment
     */
    public $shipment;
    /**
     * Constructor method for RateShipmentPublicRq
     * @uses RateShipmentPublicRq::setShipment()
     * @param \Canpar\Rate\StructType\Shipment $shipment
     */
    public function __construct(\Canpar\Rate\StructType\Shipment $shipment = null)
    {
        $this
            ->setShipment($shipment);
    }
    /**
     * Get shipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Rate\StructType\Shipment|null
     */
    public function getShipment()
    {
        return isset($this->shipment) ? $this->shipment : null;
    }
    /**
     * Set shipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Rate\StructType\Shipment $shipment
     * @return \Canpar\Rate\StructType\RateShipmentPublicRq
     */
    public function setShipment(\Canpar\Rate\StructType\Shipment $shipment = null)
    {
        if (is_null($shipment) || (is_array($shipment) && empty($shipment))) {
            unset($this->shipment);
        } else {
            $this->shipment = $shipment;
        }
        return $this;
    }
}
