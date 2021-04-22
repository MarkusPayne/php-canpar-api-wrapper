<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFuelsRs StructType
 * @subpackage Structs
 */
class GetFuelsRs extends AbstractStructBase
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
     * The fuel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Fuel[]
     */
    public $fuel;
    /**
     * Constructor method for GetFuelsRs
     * @uses GetFuelsRs::setError()
     * @uses GetFuelsRs::setFuel()
     * @param string $error
     * @param \Canpar\Ship\StructType\Fuel[] $fuel
     */
    public function __construct($error = null, array $fuel = array())
    {
        $this
            ->setError($error)
            ->setFuel($fuel);
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
     * @return \Canpar\Ship\StructType\GetFuelsRs
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
     * Get fuel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Fuel[]|null
     */
    public function getFuel()
    {
        return isset($this->fuel) ? $this->fuel : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFuel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFuel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFuelForArrayConstraintsFromSetFuel(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFuelsRsFuelItem) {
            // validation for constraint: itemType
            if (!$getFuelsRsFuelItem instanceof \Canpar\Ship\StructType\Fuel) {
                $invalidValues[] = is_object($getFuelsRsFuelItem) ? get_class($getFuelsRsFuelItem) : sprintf('%s(%s)', gettype($getFuelsRsFuelItem), var_export($getFuelsRsFuelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fuel property can only contain items of type \Canpar\Ship\StructType\Fuel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set fuel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\Fuel[] $fuel
     * @return \Canpar\Ship\StructType\GetFuelsRs
     */
    public function setFuel(array $fuel = array())
    {
        // validation for constraint: array
        if ('' !== ($fuelArrayErrorMessage = self::validateFuelForArrayConstraintsFromSetFuel($fuel))) {
            throw new \InvalidArgumentException($fuelArrayErrorMessage, __LINE__);
        }
        if (is_null($fuel) || (is_array($fuel) && empty($fuel))) {
            unset($this->fuel);
        } else {
            $this->fuel = $fuel;
        }
        return $this;
    }
    /**
     * Add item to fuel value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\Fuel $item
     * @return \Canpar\Ship\StructType\GetFuelsRs
     */
    public function addToFuel(\Canpar\Ship\StructType\Fuel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\Fuel) {
            throw new \InvalidArgumentException(sprintf('The fuel property can only contain items of type \Canpar\Ship\StructType\Fuel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fuel[] = $item;
        return $this;
    }
}
