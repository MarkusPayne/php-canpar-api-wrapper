<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchShipmentsByReferenceRq StructType
 * @subpackage Structs
 */
class SearchShipmentsByReferenceRq extends AbstractStructBase
{
    /**
     * The from_shipping_date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $from_shipping_date;
    /**
     * The page_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $page_num;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $reference;
    /**
     * The shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipper_num;
    /**
     * The to_shipping_date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $to_shipping_date;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * Constructor method for SearchShipmentsByReferenceRq
     * @uses SearchShipmentsByReferenceRq::setFrom_shipping_date()
     * @uses SearchShipmentsByReferenceRq::setPage_num()
     * @uses SearchShipmentsByReferenceRq::setPassword()
     * @uses SearchShipmentsByReferenceRq::setReference()
     * @uses SearchShipmentsByReferenceRq::setShipper_num()
     * @uses SearchShipmentsByReferenceRq::setTo_shipping_date()
     * @uses SearchShipmentsByReferenceRq::setUser_id()
     * @param string $from_shipping_date
     * @param int $page_num
     * @param string $password
     * @param string $reference
     * @param string $shipper_num
     * @param string $to_shipping_date
     * @param string $user_id
     */
    public function __construct($from_shipping_date = null, $page_num = null, $password = null, $reference = null, $shipper_num = null, $to_shipping_date = null, $user_id = null)
    {
        $this
            ->setFrom_shipping_date($from_shipping_date)
            ->setPage_num($page_num)
            ->setPassword($password)
            ->setReference($reference)
            ->setShipper_num($shipper_num)
            ->setTo_shipping_date($to_shipping_date)
            ->setUser_id($user_id);
    }
    /**
     * Get from_shipping_date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFrom_shipping_date()
    {
        return isset($this->from_shipping_date) ? $this->from_shipping_date : null;
    }
    /**
     * Set from_shipping_date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $from_shipping_date
     * @return \Canpar\Ship\StructType\SearchShipmentsByReferenceRq
     */
    public function setFrom_shipping_date($from_shipping_date = null)
    {
        // validation for constraint: string
        if (!is_null($from_shipping_date) && !is_string($from_shipping_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from_shipping_date, true), gettype($from_shipping_date)), __LINE__);
        }
        if (is_null($from_shipping_date) || (is_array($from_shipping_date) && empty($from_shipping_date))) {
            unset($this->from_shipping_date);
        } else {
            $this->from_shipping_date = $from_shipping_date;
        }
        return $this;
    }
    /**
     * Get page_num value
     * @return int|null
     */
    public function getPage_num()
    {
        return $this->page_num;
    }
    /**
     * Set page_num value
     * @param int $page_num
     * @return \Canpar\Ship\StructType\SearchShipmentsByReferenceRq
     */
    public function setPage_num($page_num = null)
    {
        // validation for constraint: int
        if (!is_null($page_num) && !(is_int($page_num) || ctype_digit($page_num))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($page_num, true), gettype($page_num)), __LINE__);
        }
        $this->page_num = $page_num;
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
     * @return \Canpar\Ship\StructType\SearchShipmentsByReferenceRq
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
     * Get reference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReference()
    {
        return isset($this->reference) ? $this->reference : null;
    }
    /**
     * Set reference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $reference
     * @return \Canpar\Ship\StructType\SearchShipmentsByReferenceRq
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        if (is_null($reference) || (is_array($reference) && empty($reference))) {
            unset($this->reference);
        } else {
            $this->reference = $reference;
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
     * @return \Canpar\Ship\StructType\SearchShipmentsByReferenceRq
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
     * Get to_shipping_date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTo_shipping_date()
    {
        return isset($this->to_shipping_date) ? $this->to_shipping_date : null;
    }
    /**
     * Set to_shipping_date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $to_shipping_date
     * @return \Canpar\Ship\StructType\SearchShipmentsByReferenceRq
     */
    public function setTo_shipping_date($to_shipping_date = null)
    {
        // validation for constraint: string
        if (!is_null($to_shipping_date) && !is_string($to_shipping_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to_shipping_date, true), gettype($to_shipping_date)), __LINE__);
        }
        if (is_null($to_shipping_date) || (is_array($to_shipping_date) && empty($to_shipping_date))) {
            unset($this->to_shipping_date);
        } else {
            $this->to_shipping_date = $to_shipping_date;
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
     * @return \Canpar\Ship\StructType\SearchShipmentsByReferenceRq
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
