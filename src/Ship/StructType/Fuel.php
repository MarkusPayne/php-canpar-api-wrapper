<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fuel StructType
 * @subpackage Structs
 */
class Fuel extends AbstractStructBase
{
    /**
     * The end_date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $end_date;
    /**
     * The manually_entered
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $manually_entered;
    /**
     * The rate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $rate;
    /**
     * The shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipper_num;
    /**
     * The start_date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $start_date;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * Constructor method for Fuel
     * @uses Fuel::setEnd_date()
     * @uses Fuel::setManually_entered()
     * @uses Fuel::setRate()
     * @uses Fuel::setShipper_num()
     * @uses Fuel::setStart_date()
     * @uses Fuel::setUser_id()
     * @param string $end_date
     * @param bool $manually_entered
     * @param float $rate
     * @param string $shipper_num
     * @param string $start_date
     * @param string $user_id
     */
    public function __construct($end_date = null, $manually_entered = null, $rate = null, $shipper_num = null, $start_date = null, $user_id = null)
    {
        $this
            ->setEnd_date($end_date)
            ->setManually_entered($manually_entered)
            ->setRate($rate)
            ->setShipper_num($shipper_num)
            ->setStart_date($start_date)
            ->setUser_id($user_id);
    }
    /**
     * Get end_date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEnd_date()
    {
        return isset($this->end_date) ? $this->end_date : null;
    }
    /**
     * Set end_date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $end_date
     * @return \Canpar\Ship\StructType\Fuel
     */
    public function setEnd_date($end_date = null)
    {
        // validation for constraint: string
        if (!is_null($end_date) && !is_string($end_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_date, true), gettype($end_date)), __LINE__);
        }
        if (is_null($end_date) || (is_array($end_date) && empty($end_date))) {
            unset($this->end_date);
        } else {
            $this->end_date = $end_date;
        }
        return $this;
    }
    /**
     * Get manually_entered value
     * @return bool|null
     */
    public function getManually_entered()
    {
        return $this->manually_entered;
    }
    /**
     * Set manually_entered value
     * @param bool $manually_entered
     * @return \Canpar\Ship\StructType\Fuel
     */
    public function setManually_entered($manually_entered = null)
    {
        // validation for constraint: boolean
        if (!is_null($manually_entered) && !is_bool($manually_entered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manually_entered, true), gettype($manually_entered)), __LINE__);
        }
        $this->manually_entered = $manually_entered;
        return $this;
    }
    /**
     * Get rate value
     * @return float|null
     */
    public function getRate()
    {
        return $this->rate;
    }
    /**
     * Set rate value
     * @param float $rate
     * @return \Canpar\Ship\StructType\Fuel
     */
    public function setRate($rate = null)
    {
        // validation for constraint: float
        if (!is_null($rate) && !(is_float($rate) || is_numeric($rate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rate, true), gettype($rate)), __LINE__);
        }
        $this->rate = $rate;
        return $this;
    }
    /**
     * Get shipper_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipper_num()
    {
        return isset($this->shipper_num) ? $this->shipper_num : null;
    }
    /**
     * Set shipper_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipper_num
     * @return \Canpar\Ship\StructType\Fuel
     */
    public function setShipper_num($shipper_num = null)
    {
        // validation for constraint: string
        if (!is_null($shipper_num) && !is_string($shipper_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipper_num, true), gettype($shipper_num)), __LINE__);
        }
        if (is_null($shipper_num) || (is_array($shipper_num) && empty($shipper_num))) {
            unset($this->shipper_num);
        } else {
            $this->shipper_num = $shipper_num;
        }
        return $this;
    }
    /**
     * Get start_date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStart_date()
    {
        return isset($this->start_date) ? $this->start_date : null;
    }
    /**
     * Set start_date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $start_date
     * @return \Canpar\Ship\StructType\Fuel
     */
    public function setStart_date($start_date = null)
    {
        // validation for constraint: string
        if (!is_null($start_date) && !is_string($start_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_date, true), gettype($start_date)), __LINE__);
        }
        if (is_null($start_date) || (is_array($start_date) && empty($start_date))) {
            unset($this->start_date);
        } else {
            $this->start_date = $start_date;
        }
        return $this;
    }
    /**
     * Get user_id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUser_id()
    {
        return isset($this->user_id) ? $this->user_id : null;
    }
    /**
     * Set user_id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $user_id
     * @return \Canpar\Ship\StructType\Fuel
     */
    public function setUser_id($user_id = null)
    {
        // validation for constraint: string
        if (!is_null($user_id) && !is_string($user_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user_id, true), gettype($user_id)), __LINE__);
        }
        if (is_null($user_id) || (is_array($user_id) && empty($user_id))) {
            unset($this->user_id);
        } else {
            $this->user_id = $user_id;
        }
        return $this;
    }
}
