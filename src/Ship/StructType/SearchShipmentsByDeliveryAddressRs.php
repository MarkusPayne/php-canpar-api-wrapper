<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchShipmentsByDeliveryAddressRs StructType
 * @subpackage Structs
 */
class SearchShipmentsByDeliveryAddressRs extends AbstractStructBase
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Shipment[]
     */
    public $shipment;
    /**
     * Constructor method for SearchShipmentsByDeliveryAddressRs
     * @uses SearchShipmentsByDeliveryAddressRs::setError()
     * @uses SearchShipmentsByDeliveryAddressRs::setShipment()
     * @param string $error
     * @param \Canpar\Ship\StructType\Shipment[] $shipment
     */
    public function __construct($error = null, array $shipment = array())
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
     * @return \Canpar\Ship\StructType\SearchShipmentsByDeliveryAddressRs
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
     * @return \Canpar\Ship\StructType\Shipment[]|null
     */
    public function getShipment()
    {
        return isset($this->shipment) ? $this->shipment : null;
    }
    /**
     * This method is responsible for validating the values passed to the setShipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentForArrayConstraintsFromSetShipment(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchShipmentsByDeliveryAddressRsShipmentItem) {
            // validation for constraint: itemType
            if (!$searchShipmentsByDeliveryAddressRsShipmentItem instanceof \Canpar\Ship\StructType\Shipment) {
                $invalidValues[] = is_object($searchShipmentsByDeliveryAddressRsShipmentItem) ? get_class($searchShipmentsByDeliveryAddressRsShipmentItem) : sprintf('%s(%s)', gettype($searchShipmentsByDeliveryAddressRsShipmentItem), var_export($searchShipmentsByDeliveryAddressRsShipmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shipment property can only contain items of type \Canpar\Ship\StructType\Shipment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set shipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\Shipment[] $shipment
     * @return \Canpar\Ship\StructType\SearchShipmentsByDeliveryAddressRs
     */
    public function setShipment(array $shipment = array())
    {
        // validation for constraint: array
        if ('' !== ($shipmentArrayErrorMessage = self::validateShipmentForArrayConstraintsFromSetShipment($shipment))) {
            throw new \InvalidArgumentException($shipmentArrayErrorMessage, __LINE__);
        }
        if (is_null($shipment) || (is_array($shipment) && empty($shipment))) {
            unset($this->shipment);
        } else {
            $this->shipment = $shipment;
        }
        return $this;
    }
    /**
     * Add item to shipment value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\Shipment $item
     * @return \Canpar\Ship\StructType\SearchShipmentsByDeliveryAddressRs
     */
    public function addToShipment(\Canpar\Ship\StructType\Shipment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\Shipment) {
            throw new \InvalidArgumentException(sprintf('The shipment property can only contain items of type \Canpar\Ship\StructType\Shipment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shipment[] = $item;
        return $this;
    }
}
