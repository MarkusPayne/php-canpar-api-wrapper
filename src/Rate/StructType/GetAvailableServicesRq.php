<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableServicesRq StructType
 * @subpackage Structs
 */
class GetAvailableServicesRq extends AbstractStructBase
{
    /**
     * The delivery_country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $delivery_country;
    /**
     * The delivery_postal_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $delivery_postal_code;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The pickup_postal_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $pickup_postal_code;
    /**
     * The shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipper_num;
    /**
     * The shipping_date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipping_date;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * Constructor method for GetAvailableServicesRq
     * @uses GetAvailableServicesRq::setDelivery_country()
     * @uses GetAvailableServicesRq::setDelivery_postal_code()
     * @uses GetAvailableServicesRq::setPassword()
     * @uses GetAvailableServicesRq::setPickup_postal_code()
     * @uses GetAvailableServicesRq::setShipper_num()
     * @uses GetAvailableServicesRq::setShipping_date()
     * @uses GetAvailableServicesRq::setUser_id()
     * @param string $delivery_country
     * @param string $delivery_postal_code
     * @param string $password
     * @param string $pickup_postal_code
     * @param string $shipper_num
     * @param string $shipping_date
     * @param string $user_id
     */
    public function __construct($delivery_country = null, $delivery_postal_code = null, $password = null, $pickup_postal_code = null, $shipper_num = null, $shipping_date = null, $user_id = null)
    {
        $this
            ->setDelivery_country($delivery_country)
            ->setDelivery_postal_code($delivery_postal_code)
            ->setPassword($password)
            ->setPickup_postal_code($pickup_postal_code)
            ->setShipper_num($shipper_num)
            ->setShipping_date($shipping_date)
            ->setUser_id($user_id);
    }
    /**
     * Get delivery_country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDelivery_country()
    {
        return isset($this->delivery_country) ? $this->delivery_country : null;
    }
    /**
     * Set delivery_country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $delivery_country
     * @return \Canpar\Rate\StructType\GetAvailableServicesRq
     */
    public function setDelivery_country($delivery_country = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_country) && !is_string($delivery_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delivery_country, true), gettype($delivery_country)), __LINE__);
        }
        if (is_null($delivery_country) || (is_array($delivery_country) && empty($delivery_country))) {
            unset($this->delivery_country);
        } else {
            $this->delivery_country = $delivery_country;
        }
        return $this;
    }
    /**
     * Get delivery_postal_code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDelivery_postal_code()
    {
        return isset($this->delivery_postal_code) ? $this->delivery_postal_code : null;
    }
    /**
     * Set delivery_postal_code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $delivery_postal_code
     * @return \Canpar\Rate\StructType\GetAvailableServicesRq
     */
    public function setDelivery_postal_code($delivery_postal_code = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_postal_code) && !is_string($delivery_postal_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delivery_postal_code, true), gettype($delivery_postal_code)), __LINE__);
        }
        if (is_null($delivery_postal_code) || (is_array($delivery_postal_code) && empty($delivery_postal_code))) {
            unset($this->delivery_postal_code);
        } else {
            $this->delivery_postal_code = $delivery_postal_code;
        }
        return $this;
    }
    /**
     * Get password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->password) ? $this->password : null;
    }
    /**
     * Set password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Canpar\Rate\StructType\GetAvailableServicesRq
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->password);
        } else {
            $this->password = $password;
        }
        return $this;
    }
    /**
     * Get pickup_postal_code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickup_postal_code()
    {
        return isset($this->pickup_postal_code) ? $this->pickup_postal_code : null;
    }
    /**
     * Set pickup_postal_code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickup_postal_code
     * @return \Canpar\Rate\StructType\GetAvailableServicesRq
     */
    public function setPickup_postal_code($pickup_postal_code = null)
    {
        // validation for constraint: string
        if (!is_null($pickup_postal_code) && !is_string($pickup_postal_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickup_postal_code, true), gettype($pickup_postal_code)), __LINE__);
        }
        if (is_null($pickup_postal_code) || (is_array($pickup_postal_code) && empty($pickup_postal_code))) {
            unset($this->pickup_postal_code);
        } else {
            $this->pickup_postal_code = $pickup_postal_code;
        }
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
     * @return \Canpar\Rate\StructType\GetAvailableServicesRq
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
     * Get shipping_date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipping_date()
    {
        return isset($this->shipping_date) ? $this->shipping_date : null;
    }
    /**
     * Set shipping_date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipping_date
     * @return \Canpar\Rate\StructType\GetAvailableServicesRq
     */
    public function setShipping_date($shipping_date = null)
    {
        // validation for constraint: string
        if (!is_null($shipping_date) && !is_string($shipping_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipping_date, true), gettype($shipping_date)), __LINE__);
        }
        if (is_null($shipping_date) || (is_array($shipping_date) && empty($shipping_date))) {
            unset($this->shipping_date);
        } else {
            $this->shipping_date = $shipping_date;
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
     * @return \Canpar\Rate\StructType\GetAvailableServicesRq
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
