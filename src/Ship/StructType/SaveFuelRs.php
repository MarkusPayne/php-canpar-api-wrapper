<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveFuelRs StructType
 * @subpackage Structs
 */
class SaveFuelRs extends AbstractStructBase
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
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Fuel
     */
    public $fuel;
    /**
     * Constructor method for SaveFuelRs
     * @uses SaveFuelRs::setError()
     * @uses SaveFuelRs::setFuel()
     * @param string $error
     * @param \Canpar\Ship\StructType\Fuel $fuel
     */
    public function __construct($error = null, \Canpar\Ship\StructType\Fuel $fuel = null)
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
     * @return \Canpar\Ship\StructType\SaveFuelRs
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
     * @return \Canpar\Ship\StructType\Fuel|null
     */
    public function getFuel()
    {
        return isset($this->fuel) ? $this->fuel : null;
    }
    /**
     * Set fuel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\Fuel $fuel
     * @return \Canpar\Ship\StructType\SaveFuelRs
     */
    public function setFuel(\Canpar\Ship\StructType\Fuel $fuel = null)
    {
        if (is_null($fuel) || (is_array($fuel) && empty($fuel))) {
            unset($this->fuel);
        } else {
            $this->fuel = $fuel;
        }
        return $this;
    }
}
