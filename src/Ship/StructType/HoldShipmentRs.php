<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HoldShipmentRs StructType
 * @subpackage Structs
 */
class HoldShipmentRs extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Shipment
     */
    public $shipment;
    /**
     * Constructor method for HoldShipmentRs
     * @uses HoldShipmentRs::setError()
     * @uses HoldShipmentRs::setShipment()
     * @param string $error
     * @param \Canpar\Ship\StructType\Shipment $shipment
     */
    public function __construct($error = null, \Canpar\Ship\StructType\Shipment $shipment = null)
    {
        $this
            ->setError($error)
            ->setShipment($shipment);
    }
    /**
     * Get error value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getError()
    {
        return isset($this->error) ? $this->error : null;
    }
    /**
     * Set error value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $error
     * @return \Canpar\Ship\StructType\HoldShipmentRs
     */
    public function setError($error = null)
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        if (is_null($error) || (is_array($error) && empty($error))) {
            unset($this->error);
        } else {
            $this->error = $error;
        }
        return $this;
    }
    /**
     * Get shipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Shipment|null
     */
    public function getShipment()
    {
        return isset($this->shipment) ? $this->shipment : null;
    }
    /**
     * Set shipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\Shipment $shipment
     * @return \Canpar\Ship\StructType\HoldShipmentRs
     */
    public function setShipment(\Canpar\Ship\StructType\Shipment $shipment = null)
    {
        if (is_null($shipment) || (is_array($shipment) && empty($shipment))) {
            unset($this->shipment);
        } else {
            $this->shipment = $shipment;
        }
        return $this;
    }
}
