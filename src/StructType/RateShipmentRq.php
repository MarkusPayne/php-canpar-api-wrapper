<?php

namespace Canpar\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateShipmentRq StructType
 * @subpackage Structs
 */
class RateShipmentRq extends AbstractStructBase
{
    /**
     * The apply_association_discount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $apply_association_discount;
    /**
     * The apply_individual_discount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $apply_individual_discount;
    /**
     * The apply_invoice_discount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $apply_invoice_discount;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\Shipment
     */
    public $shipment;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * Constructor method for RateShipmentRq
     * @uses RateShipmentRq::setApply_association_discount()
     * @uses RateShipmentRq::setApply_individual_discount()
     * @uses RateShipmentRq::setApply_invoice_discount()
     * @uses RateShipmentRq::setPassword()
     * @uses RateShipmentRq::setShipment()
     * @uses RateShipmentRq::setUser_id()
     * @param bool $apply_association_discount
     * @param bool $apply_individual_discount
     * @param bool $apply_invoice_discount
     * @param string $password
     * @param \Canpar\StructType\Shipment $shipment
     * @param string $user_id
     */
    public function __construct($apply_association_discount = null, $apply_individual_discount = null, $apply_invoice_discount = null, $password = null, \Canpar\StructType\Shipment $shipment = null, $user_id = null)
    {
        $this
            ->setApply_association_discount($apply_association_discount)
            ->setApply_individual_discount($apply_individual_discount)
            ->setApply_invoice_discount($apply_invoice_discount)
            ->setPassword($password)
            ->setShipment($shipment)
            ->setUser_id($user_id);
    }
    /**
     * Get apply_association_discount value
     * @return bool|null
     */
    public function getApply_association_discount()
    {
        return $this->apply_association_discount;
    }
    /**
     * Set apply_association_discount value
     * @param bool $apply_association_discount
     * @return \Canpar\StructType\RateShipmentRq
     */
    public function setApply_association_discount($apply_association_discount = null)
    {
        // validation for constraint: boolean
        if (!is_null($apply_association_discount) && !is_bool($apply_association_discount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($apply_association_discount, true), gettype($apply_association_discount)), __LINE__);
        }
        $this->apply_association_discount = $apply_association_discount;
        return $this;
    }
    /**
     * Get apply_individual_discount value
     * @return bool|null
     */
    public function getApply_individual_discount()
    {
        return $this->apply_individual_discount;
    }
    /**
     * Set apply_individual_discount value
     * @param bool $apply_individual_discount
     * @return \Canpar\StructType\RateShipmentRq
     */
    public function setApply_individual_discount($apply_individual_discount = null)
    {
        // validation for constraint: boolean
        if (!is_null($apply_individual_discount) && !is_bool($apply_individual_discount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($apply_individual_discount, true), gettype($apply_individual_discount)), __LINE__);
        }
        $this->apply_individual_discount = $apply_individual_discount;
        return $this;
    }
    /**
     * Get apply_invoice_discount value
     * @return bool|null
     */
    public function getApply_invoice_discount()
    {
        return $this->apply_invoice_discount;
    }
    /**
     * Set apply_invoice_discount value
     * @param bool $apply_invoice_discount
     * @return \Canpar\StructType\RateShipmentRq
     */
    public function setApply_invoice_discount($apply_invoice_discount = null)
    {
        // validation for constraint: boolean
        if (!is_null($apply_invoice_discount) && !is_bool($apply_invoice_discount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($apply_invoice_discount, true), gettype($apply_invoice_discount)), __LINE__);
        }
        $this->apply_invoice_discount = $apply_invoice_discount;
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
     * @return \Canpar\StructType\RateShipmentRq
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
     * Get shipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\Shipment|null
     */
    public function getShipment()
    {
        return isset($this->shipment) ? $this->shipment : null;
    }
    /**
     * Set shipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\StructType\Shipment $shipment
     * @return \Canpar\StructType\RateShipmentRq
     */
    public function setShipment(\Canpar\StructType\Shipment $shipment = null)
    {
        if (is_null($shipment) || (is_array($shipment) && empty($shipment))) {
            unset($this->shipment);
        } else {
            $this->shipment = $shipment;
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
     * @return \Canpar\StructType\RateShipmentRq
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
