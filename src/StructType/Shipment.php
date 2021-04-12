<?php

namespace Canpar\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Shipment StructType
 * @subpackage Structs
 */
class Shipment extends AbstractStructBase
{
    /**
     * The airport_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $airport_code;
    /**
     * The billed_weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $billed_weight;
    /**
     * The billed_weight_unit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $billed_weight_unit;
    /**
     * The cod_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $cod_charge;
    /**
     * The cod_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $cod_type;
    /**
     * The collect
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $collect;
    /**
     * The collect_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $collect_charge;
    /**
     * The collect_shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $collect_shipper_num;
    /**
     * The consolidation_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $consolidation_type;
    /**
     * The cos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $cos;
    /**
     * The cos_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $cos_charge;
    /**
     * The delivery_address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\Address
     */
    public $delivery_address;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The dg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $dg;
    /**
     * The dg_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $dg_charge;
    /**
     * The dimention_unit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dimention_unit;
    /**
     * The dv_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $dv_charge;
    /**
     * The ea_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ea_charge;
    /**
     * The ea_zone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ea_zone;
    /**
     * The estimated_delivery_date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $estimated_delivery_date;
    /**
     * The freight_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $freight_charge;
    /**
     * The fuel_surcharge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $fuel_surcharge;
    /**
     * The handling
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $handling;
    /**
     * The handling_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $handling_type;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $id;
    /**
     * The inserted_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $inserted_on;
    /**
     * The instruction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $instruction;
    /**
     * The lg_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $lg_charge;
    /**
     * The manifest_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $manifest_num;
    /**
     * The nsr
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $nsr;
    /**
     * The order_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $order_id;
    /**
     * The over_size_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $over_size_charge;
    /**
     * The over_weight_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $over_weight_charge;
    /**
     * The packages
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\Package[]
     */
    public $packages;
    /**
     * The pickup_address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\Address
     */
    public $pickup_address;
    /**
     * The premium
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $premium;
    /**
     * The premium_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $premium_charge;
    /**
     * The proforma
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\Proforma
     */
    public $proforma;
    /**
     * The ra_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ra_charge;
    /**
     * The reported_weight_unit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $reported_weight_unit;
    /**
     * The rural_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $rural_charge;
    /**
     * The send_email_to_delivery
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $send_email_to_delivery;
    /**
     * The send_email_to_pickup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $send_email_to_pickup;
    /**
     * The service_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $service_type;
    /**
     * The shipment_status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipment_status;
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
     * The subtotal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $subtotal;
    /**
     * The subtotal_with_handling
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $subtotal_with_handling;
    /**
     * The tax_charge_1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $tax_charge_1;
    /**
     * The tax_charge_2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $tax_charge_2;
    /**
     * The tax_code_1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $tax_code_1;
    /**
     * The tax_code_2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $tax_code_2;
    /**
     * The total
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total;
    /**
     * The total_with_handling
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_with_handling;
    /**
     * The transit_time
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transit_time;
    /**
     * The transit_time_guaranteed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $transit_time_guaranteed;
    /**
     * The updated_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $updated_on;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * The voided
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $voided;
    /**
     * The xc_charge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $xc_charge;
    /**
     * The zone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $zone;
    /**
     * Constructor method for Shipment
     * @uses Shipment::setAirport_code()
     * @uses Shipment::setBilled_weight()
     * @uses Shipment::setBilled_weight_unit()
     * @uses Shipment::setCod_charge()
     * @uses Shipment::setCod_type()
     * @uses Shipment::setCollect()
     * @uses Shipment::setCollect_charge()
     * @uses Shipment::setCollect_shipper_num()
     * @uses Shipment::setConsolidation_type()
     * @uses Shipment::setCos()
     * @uses Shipment::setCos_charge()
     * @uses Shipment::setDelivery_address()
     * @uses Shipment::setDescription()
     * @uses Shipment::setDg()
     * @uses Shipment::setDg_charge()
     * @uses Shipment::setDimention_unit()
     * @uses Shipment::setDv_charge()
     * @uses Shipment::setEa_charge()
     * @uses Shipment::setEa_zone()
     * @uses Shipment::setEstimated_delivery_date()
     * @uses Shipment::setFreight_charge()
     * @uses Shipment::setFuel_surcharge()
     * @uses Shipment::setHandling()
     * @uses Shipment::setHandling_type()
     * @uses Shipment::setId()
     * @uses Shipment::setInserted_on()
     * @uses Shipment::setInstruction()
     * @uses Shipment::setLg_charge()
     * @uses Shipment::setManifest_num()
     * @uses Shipment::setNsr()
     * @uses Shipment::setOrder_id()
     * @uses Shipment::setOver_size_charge()
     * @uses Shipment::setOver_weight_charge()
     * @uses Shipment::setPackages()
     * @uses Shipment::setPickup_address()
     * @uses Shipment::setPremium()
     * @uses Shipment::setPremium_charge()
     * @uses Shipment::setProforma()
     * @uses Shipment::setRa_charge()
     * @uses Shipment::setReported_weight_unit()
     * @uses Shipment::setRural_charge()
     * @uses Shipment::setSend_email_to_delivery()
     * @uses Shipment::setSend_email_to_pickup()
     * @uses Shipment::setService_type()
     * @uses Shipment::setShipment_status()
     * @uses Shipment::setShipper_num()
     * @uses Shipment::setShipping_date()
     * @uses Shipment::setSubtotal()
     * @uses Shipment::setSubtotal_with_handling()
     * @uses Shipment::setTax_charge_1()
     * @uses Shipment::setTax_charge_2()
     * @uses Shipment::setTax_code_1()
     * @uses Shipment::setTax_code_2()
     * @uses Shipment::setTotal()
     * @uses Shipment::setTotal_with_handling()
     * @uses Shipment::setTransit_time()
     * @uses Shipment::setTransit_time_guaranteed()
     * @uses Shipment::setUpdated_on()
     * @uses Shipment::setUser_id()
     * @uses Shipment::setVoided()
     * @uses Shipment::setXc_charge()
     * @uses Shipment::setZone()
     * @param string $airport_code
     * @param float $billed_weight
     * @param string $billed_weight_unit
     * @param float $cod_charge
     * @param string $cod_type
     * @param bool $collect
     * @param float $collect_charge
     * @param string $collect_shipper_num
     * @param string $consolidation_type
     * @param bool $cos
     * @param float $cos_charge
     * @param \Canpar\StructType\Address $delivery_address
     * @param string $description
     * @param bool $dg
     * @param float $dg_charge
     * @param string $dimention_unit
     * @param float $dv_charge
     * @param float $ea_charge
     * @param string $ea_zone
     * @param string $estimated_delivery_date
     * @param float $freight_charge
     * @param float $fuel_surcharge
     * @param float $handling
     * @param string $handling_type
     * @param int $id
     * @param string $inserted_on
     * @param string $instruction
     * @param float $lg_charge
     * @param string $manifest_num
     * @param bool $nsr
     * @param string $order_id
     * @param float $over_size_charge
     * @param float $over_weight_charge
     * @param \Canpar\StructType\Package[] $packages
     * @param \Canpar\StructType\Address $pickup_address
     * @param string $premium
     * @param float $premium_charge
     * @param \Canpar\StructType\Proforma $proforma
     * @param float $ra_charge
     * @param string $reported_weight_unit
     * @param float $rural_charge
     * @param bool $send_email_to_delivery
     * @param bool $send_email_to_pickup
     * @param string $service_type
     * @param string $shipment_status
     * @param string $shipper_num
     * @param string $shipping_date
     * @param float $subtotal
     * @param float $subtotal_with_handling
     * @param float $tax_charge_1
     * @param float $tax_charge_2
     * @param string $tax_code_1
     * @param string $tax_code_2
     * @param float $total
     * @param float $total_with_handling
     * @param string $transit_time
     * @param bool $transit_time_guaranteed
     * @param string $updated_on
     * @param string $user_id
     * @param bool $voided
     * @param float $xc_charge
     * @param string $zone
     */
    public function __construct($airport_code = null, $billed_weight = null, $billed_weight_unit = null, $cod_charge = null, $cod_type = null, $collect = null, $collect_charge = null, $collect_shipper_num = null, $consolidation_type = null, $cos = null, $cos_charge = null, \Canpar\StructType\Address $delivery_address = null, $description = null, $dg = null, $dg_charge = null, $dimention_unit = null, $dv_charge = null, $ea_charge = null, $ea_zone = null, $estimated_delivery_date = null, $freight_charge = null, $fuel_surcharge = null, $handling = null, $handling_type = null, $id = null, $inserted_on = null, $instruction = null, $lg_charge = null, $manifest_num = null, $nsr = null, $order_id = null, $over_size_charge = null, $over_weight_charge = null, array $packages = array(), \Canpar\StructType\Address $pickup_address = null, $premium = null, $premium_charge = null, \Canpar\StructType\Proforma $proforma = null, $ra_charge = null, $reported_weight_unit = null, $rural_charge = null, $send_email_to_delivery = null, $send_email_to_pickup = null, $service_type = null, $shipment_status = null, $shipper_num = null, $shipping_date = null, $subtotal = null, $subtotal_with_handling = null, $tax_charge_1 = null, $tax_charge_2 = null, $tax_code_1 = null, $tax_code_2 = null, $total = null, $total_with_handling = null, $transit_time = null, $transit_time_guaranteed = null, $updated_on = null, $user_id = null, $voided = null, $xc_charge = null, $zone = null)
    {
        $this
            ->setAirport_code($airport_code)
            ->setBilled_weight($billed_weight)
            ->setBilled_weight_unit($billed_weight_unit)
            ->setCod_charge($cod_charge)
            ->setCod_type($cod_type)
            ->setCollect($collect)
            ->setCollect_charge($collect_charge)
            ->setCollect_shipper_num($collect_shipper_num)
            ->setConsolidation_type($consolidation_type)
            ->setCos($cos)
            ->setCos_charge($cos_charge)
            ->setDelivery_address($delivery_address)
            ->setDescription($description)
            ->setDg($dg)
            ->setDg_charge($dg_charge)
            ->setDimention_unit($dimention_unit)
            ->setDv_charge($dv_charge)
            ->setEa_charge($ea_charge)
            ->setEa_zone($ea_zone)
            ->setEstimated_delivery_date($estimated_delivery_date)
            ->setFreight_charge($freight_charge)
            ->setFuel_surcharge($fuel_surcharge)
            ->setHandling($handling)
            ->setHandling_type($handling_type)
            ->setId($id)
            ->setInserted_on($inserted_on)
            ->setInstruction($instruction)
            ->setLg_charge($lg_charge)
            ->setManifest_num($manifest_num)
            ->setNsr($nsr)
            ->setOrder_id($order_id)
            ->setOver_size_charge($over_size_charge)
            ->setOver_weight_charge($over_weight_charge)
            ->setPackages($packages)
            ->setPickup_address($pickup_address)
            ->setPremium($premium)
            ->setPremium_charge($premium_charge)
            ->setProforma($proforma)
            ->setRa_charge($ra_charge)
            ->setReported_weight_unit($reported_weight_unit)
            ->setRural_charge($rural_charge)
            ->setSend_email_to_delivery($send_email_to_delivery)
            ->setSend_email_to_pickup($send_email_to_pickup)
            ->setService_type($service_type)
            ->setShipment_status($shipment_status)
            ->setShipper_num($shipper_num)
            ->setShipping_date($shipping_date)
            ->setSubtotal($subtotal)
            ->setSubtotal_with_handling($subtotal_with_handling)
            ->setTax_charge_1($tax_charge_1)
            ->setTax_charge_2($tax_charge_2)
            ->setTax_code_1($tax_code_1)
            ->setTax_code_2($tax_code_2)
            ->setTotal($total)
            ->setTotal_with_handling($total_with_handling)
            ->setTransit_time($transit_time)
            ->setTransit_time_guaranteed($transit_time_guaranteed)
            ->setUpdated_on($updated_on)
            ->setUser_id($user_id)
            ->setVoided($voided)
            ->setXc_charge($xc_charge)
            ->setZone($zone);
    }
    /**
     * Get airport_code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAirport_code()
    {
        return isset($this->airport_code) ? $this->airport_code : null;
    }
    /**
     * Set airport_code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $airport_code
     * @return \Canpar\StructType\Shipment
     */
    public function setAirport_code($airport_code = null)
    {
        // validation for constraint: string
        if (!is_null($airport_code) && !is_string($airport_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airport_code, true), gettype($airport_code)), __LINE__);
        }
        if (is_null($airport_code) || (is_array($airport_code) && empty($airport_code))) {
            unset($this->airport_code);
        } else {
            $this->airport_code = $airport_code;
        }
        return $this;
    }
    /**
     * Get billed_weight value
     * @return float|null
     */
    public function getBilled_weight()
    {
        return $this->billed_weight;
    }
    /**
     * Set billed_weight value
     * @param float $billed_weight
     * @return \Canpar\StructType\Shipment
     */
    public function setBilled_weight($billed_weight = null)
    {
        // validation for constraint: float
        if (!is_null($billed_weight) && !(is_float($billed_weight) || is_numeric($billed_weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($billed_weight, true), gettype($billed_weight)), __LINE__);
        }
        $this->billed_weight = $billed_weight;
        return $this;
    }
    /**
     * Get billed_weight_unit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBilled_weight_unit()
    {
        return isset($this->billed_weight_unit) ? $this->billed_weight_unit : null;
    }
    /**
     * Set billed_weight_unit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $billed_weight_unit
     * @return \Canpar\StructType\Shipment
     */
    public function setBilled_weight_unit($billed_weight_unit = null)
    {
        // validation for constraint: string
        if (!is_null($billed_weight_unit) && !is_string($billed_weight_unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billed_weight_unit, true), gettype($billed_weight_unit)), __LINE__);
        }
        if (is_null($billed_weight_unit) || (is_array($billed_weight_unit) && empty($billed_weight_unit))) {
            unset($this->billed_weight_unit);
        } else {
            $this->billed_weight_unit = $billed_weight_unit;
        }
        return $this;
    }
    /**
     * Get cod_charge value
     * @return float|null
     */
    public function getCod_charge()
    {
        return $this->cod_charge;
    }
    /**
     * Set cod_charge value
     * @param float $cod_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setCod_charge($cod_charge = null)
    {
        // validation for constraint: float
        if (!is_null($cod_charge) && !(is_float($cod_charge) || is_numeric($cod_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cod_charge, true), gettype($cod_charge)), __LINE__);
        }
        $this->cod_charge = $cod_charge;
        return $this;
    }
    /**
     * Get cod_type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCod_type()
    {
        return isset($this->cod_type) ? $this->cod_type : null;
    }
    /**
     * Set cod_type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cod_type
     * @return \Canpar\StructType\Shipment
     */
    public function setCod_type($cod_type = null)
    {
        // validation for constraint: string
        if (!is_null($cod_type) && !is_string($cod_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cod_type, true), gettype($cod_type)), __LINE__);
        }
        if (is_null($cod_type) || (is_array($cod_type) && empty($cod_type))) {
            unset($this->cod_type);
        } else {
            $this->cod_type = $cod_type;
        }
        return $this;
    }
    /**
     * Get collect value
     * @return bool|null
     */
    public function getCollect()
    {
        return $this->collect;
    }
    /**
     * Set collect value
     * @param bool $collect
     * @return \Canpar\StructType\Shipment
     */
    public function setCollect($collect = null)
    {
        // validation for constraint: boolean
        if (!is_null($collect) && !is_bool($collect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collect, true), gettype($collect)), __LINE__);
        }
        $this->collect = $collect;
        return $this;
    }
    /**
     * Get collect_charge value
     * @return float|null
     */
    public function getCollect_charge()
    {
        return $this->collect_charge;
    }
    /**
     * Set collect_charge value
     * @param float $collect_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setCollect_charge($collect_charge = null)
    {
        // validation for constraint: float
        if (!is_null($collect_charge) && !(is_float($collect_charge) || is_numeric($collect_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($collect_charge, true), gettype($collect_charge)), __LINE__);
        }
        $this->collect_charge = $collect_charge;
        return $this;
    }
    /**
     * Get collect_shipper_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCollect_shipper_num()
    {
        return isset($this->collect_shipper_num) ? $this->collect_shipper_num : null;
    }
    /**
     * Set collect_shipper_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $collect_shipper_num
     * @return \Canpar\StructType\Shipment
     */
    public function setCollect_shipper_num($collect_shipper_num = null)
    {
        // validation for constraint: string
        if (!is_null($collect_shipper_num) && !is_string($collect_shipper_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($collect_shipper_num, true), gettype($collect_shipper_num)), __LINE__);
        }
        if (is_null($collect_shipper_num) || (is_array($collect_shipper_num) && empty($collect_shipper_num))) {
            unset($this->collect_shipper_num);
        } else {
            $this->collect_shipper_num = $collect_shipper_num;
        }
        return $this;
    }
    /**
     * Get consolidation_type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConsolidation_type()
    {
        return isset($this->consolidation_type) ? $this->consolidation_type : null;
    }
    /**
     * Set consolidation_type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $consolidation_type
     * @return \Canpar\StructType\Shipment
     */
    public function setConsolidation_type($consolidation_type = null)
    {
        // validation for constraint: string
        if (!is_null($consolidation_type) && !is_string($consolidation_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consolidation_type, true), gettype($consolidation_type)), __LINE__);
        }
        if (is_null($consolidation_type) || (is_array($consolidation_type) && empty($consolidation_type))) {
            unset($this->consolidation_type);
        } else {
            $this->consolidation_type = $consolidation_type;
        }
        return $this;
    }
    /**
     * Get cos value
     * @return bool|null
     */
    public function getCos()
    {
        return $this->cos;
    }
    /**
     * Set cos value
     * @param bool $cos
     * @return \Canpar\StructType\Shipment
     */
    public function setCos($cos = null)
    {
        // validation for constraint: boolean
        if (!is_null($cos) && !is_bool($cos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cos, true), gettype($cos)), __LINE__);
        }
        $this->cos = $cos;
        return $this;
    }
    /**
     * Get cos_charge value
     * @return float|null
     */
    public function getCos_charge()
    {
        return $this->cos_charge;
    }
    /**
     * Set cos_charge value
     * @param float $cos_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setCos_charge($cos_charge = null)
    {
        // validation for constraint: float
        if (!is_null($cos_charge) && !(is_float($cos_charge) || is_numeric($cos_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cos_charge, true), gettype($cos_charge)), __LINE__);
        }
        $this->cos_charge = $cos_charge;
        return $this;
    }
    /**
     * Get delivery_address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\Address|null
     */
    public function getDelivery_address()
    {
        return isset($this->delivery_address) ? $this->delivery_address : null;
    }
    /**
     * Set delivery_address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\StructType\Address $delivery_address
     * @return \Canpar\StructType\Shipment
     */
    public function setDelivery_address(\Canpar\StructType\Address $delivery_address = null)
    {
        if (is_null($delivery_address) || (is_array($delivery_address) && empty($delivery_address))) {
            unset($this->delivery_address);
        } else {
            $this->delivery_address = $delivery_address;
        }
        return $this;
    }
    /**
     * Get description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : null;
    }
    /**
     * Set description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Canpar\StructType\Shipment
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->description);
        } else {
            $this->description = $description;
        }
        return $this;
    }
    /**
     * Get dg value
     * @return bool|null
     */
    public function getDg()
    {
        return $this->dg;
    }
    /**
     * Set dg value
     * @param bool $dg
     * @return \Canpar\StructType\Shipment
     */
    public function setDg($dg = null)
    {
        // validation for constraint: boolean
        if (!is_null($dg) && !is_bool($dg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dg, true), gettype($dg)), __LINE__);
        }
        $this->dg = $dg;
        return $this;
    }
    /**
     * Get dg_charge value
     * @return float|null
     */
    public function getDg_charge()
    {
        return $this->dg_charge;
    }
    /**
     * Set dg_charge value
     * @param float $dg_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setDg_charge($dg_charge = null)
    {
        // validation for constraint: float
        if (!is_null($dg_charge) && !(is_float($dg_charge) || is_numeric($dg_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dg_charge, true), gettype($dg_charge)), __LINE__);
        }
        $this->dg_charge = $dg_charge;
        return $this;
    }
    /**
     * Get dimention_unit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDimention_unit()
    {
        return isset($this->dimention_unit) ? $this->dimention_unit : null;
    }
    /**
     * Set dimention_unit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dimention_unit
     * @return \Canpar\StructType\Shipment
     */
    public function setDimention_unit($dimention_unit = null)
    {
        // validation for constraint: string
        if (!is_null($dimention_unit) && !is_string($dimention_unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dimention_unit, true), gettype($dimention_unit)), __LINE__);
        }
        if (is_null($dimention_unit) || (is_array($dimention_unit) && empty($dimention_unit))) {
            unset($this->dimention_unit);
        } else {
            $this->dimention_unit = $dimention_unit;
        }
        return $this;
    }
    /**
     * Get dv_charge value
     * @return float|null
     */
    public function getDv_charge()
    {
        return $this->dv_charge;
    }
    /**
     * Set dv_charge value
     * @param float $dv_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setDv_charge($dv_charge = null)
    {
        // validation for constraint: float
        if (!is_null($dv_charge) && !(is_float($dv_charge) || is_numeric($dv_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dv_charge, true), gettype($dv_charge)), __LINE__);
        }
        $this->dv_charge = $dv_charge;
        return $this;
    }
    /**
     * Get ea_charge value
     * @return float|null
     */
    public function getEa_charge()
    {
        return $this->ea_charge;
    }
    /**
     * Set ea_charge value
     * @param float $ea_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setEa_charge($ea_charge = null)
    {
        // validation for constraint: float
        if (!is_null($ea_charge) && !(is_float($ea_charge) || is_numeric($ea_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ea_charge, true), gettype($ea_charge)), __LINE__);
        }
        $this->ea_charge = $ea_charge;
        return $this;
    }
    /**
     * Get ea_zone value
     * @return string|null
     */
    public function getEa_zone()
    {
        return $this->ea_zone;
    }
    /**
     * Set ea_zone value
     * @param string $ea_zone
     * @return \Canpar\StructType\Shipment
     */
    public function setEa_zone($ea_zone = null)
    {
        // validation for constraint: string
        if (!is_null($ea_zone) && !is_string($ea_zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ea_zone, true), gettype($ea_zone)), __LINE__);
        }
        $this->ea_zone = $ea_zone;
        return $this;
    }
    /**
     * Get estimated_delivery_date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEstimated_delivery_date()
    {
        return isset($this->estimated_delivery_date) ? $this->estimated_delivery_date : null;
    }
    /**
     * Set estimated_delivery_date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $estimated_delivery_date
     * @return \Canpar\StructType\Shipment
     */
    public function setEstimated_delivery_date($estimated_delivery_date = null)
    {
        // validation for constraint: string
        if (!is_null($estimated_delivery_date) && !is_string($estimated_delivery_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimated_delivery_date, true), gettype($estimated_delivery_date)), __LINE__);
        }
        if (is_null($estimated_delivery_date) || (is_array($estimated_delivery_date) && empty($estimated_delivery_date))) {
            unset($this->estimated_delivery_date);
        } else {
            $this->estimated_delivery_date = $estimated_delivery_date;
        }
        return $this;
    }
    /**
     * Get freight_charge value
     * @return float|null
     */
    public function getFreight_charge()
    {
        return $this->freight_charge;
    }
    /**
     * Set freight_charge value
     * @param float $freight_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setFreight_charge($freight_charge = null)
    {
        // validation for constraint: float
        if (!is_null($freight_charge) && !(is_float($freight_charge) || is_numeric($freight_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($freight_charge, true), gettype($freight_charge)), __LINE__);
        }
        $this->freight_charge = $freight_charge;
        return $this;
    }
    /**
     * Get fuel_surcharge value
     * @return float|null
     */
    public function getFuel_surcharge()
    {
        return $this->fuel_surcharge;
    }
    /**
     * Set fuel_surcharge value
     * @param float $fuel_surcharge
     * @return \Canpar\StructType\Shipment
     */
    public function setFuel_surcharge($fuel_surcharge = null)
    {
        // validation for constraint: float
        if (!is_null($fuel_surcharge) && !(is_float($fuel_surcharge) || is_numeric($fuel_surcharge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fuel_surcharge, true), gettype($fuel_surcharge)), __LINE__);
        }
        $this->fuel_surcharge = $fuel_surcharge;
        return $this;
    }
    /**
     * Get handling value
     * @return float|null
     */
    public function getHandling()
    {
        return $this->handling;
    }
    /**
     * Set handling value
     * @param float $handling
     * @return \Canpar\StructType\Shipment
     */
    public function setHandling($handling = null)
    {
        // validation for constraint: float
        if (!is_null($handling) && !(is_float($handling) || is_numeric($handling))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($handling, true), gettype($handling)), __LINE__);
        }
        $this->handling = $handling;
        return $this;
    }
    /**
     * Get handling_type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHandling_type()
    {
        return isset($this->handling_type) ? $this->handling_type : null;
    }
    /**
     * Set handling_type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $handling_type
     * @return \Canpar\StructType\Shipment
     */
    public function setHandling_type($handling_type = null)
    {
        // validation for constraint: string
        if (!is_null($handling_type) && !is_string($handling_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handling_type, true), gettype($handling_type)), __LINE__);
        }
        if (is_null($handling_type) || (is_array($handling_type) && empty($handling_type))) {
            unset($this->handling_type);
        } else {
            $this->handling_type = $handling_type;
        }
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Canpar\StructType\Shipment
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get inserted_on value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInserted_on()
    {
        return isset($this->inserted_on) ? $this->inserted_on : null;
    }
    /**
     * Set inserted_on value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inserted_on
     * @return \Canpar\StructType\Shipment
     */
    public function setInserted_on($inserted_on = null)
    {
        // validation for constraint: string
        if (!is_null($inserted_on) && !is_string($inserted_on)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inserted_on, true), gettype($inserted_on)), __LINE__);
        }
        if (is_null($inserted_on) || (is_array($inserted_on) && empty($inserted_on))) {
            unset($this->inserted_on);
        } else {
            $this->inserted_on = $inserted_on;
        }
        return $this;
    }
    /**
     * Get instruction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInstruction()
    {
        return isset($this->instruction) ? $this->instruction : null;
    }
    /**
     * Set instruction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $instruction
     * @return \Canpar\StructType\Shipment
     */
    public function setInstruction($instruction = null)
    {
        // validation for constraint: string
        if (!is_null($instruction) && !is_string($instruction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instruction, true), gettype($instruction)), __LINE__);
        }
        if (is_null($instruction) || (is_array($instruction) && empty($instruction))) {
            unset($this->instruction);
        } else {
            $this->instruction = $instruction;
        }
        return $this;
    }
    /**
     * Get lg_charge value
     * @return float|null
     */
    public function getLg_charge()
    {
        return $this->lg_charge;
    }
    /**
     * Set lg_charge value
     * @param float $lg_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setLg_charge($lg_charge = null)
    {
        // validation for constraint: float
        if (!is_null($lg_charge) && !(is_float($lg_charge) || is_numeric($lg_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lg_charge, true), gettype($lg_charge)), __LINE__);
        }
        $this->lg_charge = $lg_charge;
        return $this;
    }
    /**
     * Get manifest_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getManifest_num()
    {
        return isset($this->manifest_num) ? $this->manifest_num : null;
    }
    /**
     * Set manifest_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $manifest_num
     * @return \Canpar\StructType\Shipment
     */
    public function setManifest_num($manifest_num = null)
    {
        // validation for constraint: string
        if (!is_null($manifest_num) && !is_string($manifest_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manifest_num, true), gettype($manifest_num)), __LINE__);
        }
        if (is_null($manifest_num) || (is_array($manifest_num) && empty($manifest_num))) {
            unset($this->manifest_num);
        } else {
            $this->manifest_num = $manifest_num;
        }
        return $this;
    }
    /**
     * Get nsr value
     * @return bool|null
     */
    public function getNsr()
    {
        return $this->nsr;
    }
    /**
     * Set nsr value
     * @param bool $nsr
     * @return \Canpar\StructType\Shipment
     */
    public function setNsr($nsr = null)
    {
        // validation for constraint: boolean
        if (!is_null($nsr) && !is_bool($nsr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nsr, true), gettype($nsr)), __LINE__);
        }
        $this->nsr = $nsr;
        return $this;
    }
    /**
     * Get order_id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrder_id()
    {
        return isset($this->order_id) ? $this->order_id : null;
    }
    /**
     * Set order_id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $order_id
     * @return \Canpar\StructType\Shipment
     */
    public function setOrder_id($order_id = null)
    {
        // validation for constraint: string
        if (!is_null($order_id) && !is_string($order_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($order_id, true), gettype($order_id)), __LINE__);
        }
        if (is_null($order_id) || (is_array($order_id) && empty($order_id))) {
            unset($this->order_id);
        } else {
            $this->order_id = $order_id;
        }
        return $this;
    }
    /**
     * Get over_size_charge value
     * @return float|null
     */
    public function getOver_size_charge()
    {
        return $this->over_size_charge;
    }
    /**
     * Set over_size_charge value
     * @param float $over_size_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setOver_size_charge($over_size_charge = null)
    {
        // validation for constraint: float
        if (!is_null($over_size_charge) && !(is_float($over_size_charge) || is_numeric($over_size_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($over_size_charge, true), gettype($over_size_charge)), __LINE__);
        }
        $this->over_size_charge = $over_size_charge;
        return $this;
    }
    /**
     * Get over_weight_charge value
     * @return float|null
     */
    public function getOver_weight_charge()
    {
        return $this->over_weight_charge;
    }
    /**
     * Set over_weight_charge value
     * @param float $over_weight_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setOver_weight_charge($over_weight_charge = null)
    {
        // validation for constraint: float
        if (!is_null($over_weight_charge) && !(is_float($over_weight_charge) || is_numeric($over_weight_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($over_weight_charge, true), gettype($over_weight_charge)), __LINE__);
        }
        $this->over_weight_charge = $over_weight_charge;
        return $this;
    }
    /**
     * Get packages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\Package[]|null
     */
    public function getPackages()
    {
        return isset($this->packages) ? $this->packages : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPackages method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPackages method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePackagesForArrayConstraintsFromSetPackages(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shipmentPackagesItem) {
            // validation for constraint: itemType
            if (!$shipmentPackagesItem instanceof \Canpar\StructType\Package) {
                $invalidValues[] = is_object($shipmentPackagesItem) ? get_class($shipmentPackagesItem) : sprintf('%s(%s)', gettype($shipmentPackagesItem), var_export($shipmentPackagesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The packages property can only contain items of type \Canpar\StructType\Package, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set packages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\StructType\Package[] $packages
     * @return \Canpar\StructType\Shipment
     */
    public function setPackages(array $packages = array())
    {
        // validation for constraint: array
        if ('' !== ($packagesArrayErrorMessage = self::validatePackagesForArrayConstraintsFromSetPackages($packages))) {
            throw new \InvalidArgumentException($packagesArrayErrorMessage, __LINE__);
        }
        if (is_null($packages) || (is_array($packages) && empty($packages))) {
            unset($this->packages);
        } else {
            $this->packages = $packages;
        }
        return $this;
    }
    /**
     * Add item to packages value
     * @throws \InvalidArgumentException
     * @param \Canpar\StructType\Package $item
     * @return \Canpar\StructType\Shipment
     */
    public function addToPackages(\Canpar\StructType\Package $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\StructType\Package) {
            throw new \InvalidArgumentException(sprintf('The packages property can only contain items of type \Canpar\StructType\Package, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->packages[] = $item;
        return $this;
    }
    /**
     * Get pickup_address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\Address|null
     */
    public function getPickup_address()
    {
        return isset($this->pickup_address) ? $this->pickup_address : null;
    }
    /**
     * Set pickup_address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\StructType\Address $pickup_address
     * @return \Canpar\StructType\Shipment
     */
    public function setPickup_address(\Canpar\StructType\Address $pickup_address = null)
    {
        if (is_null($pickup_address) || (is_array($pickup_address) && empty($pickup_address))) {
            unset($this->pickup_address);
        } else {
            $this->pickup_address = $pickup_address;
        }
        return $this;
    }
    /**
     * Get premium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPremium()
    {
        return isset($this->premium) ? $this->premium : null;
    }
    /**
     * Set premium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $premium
     * @return \Canpar\StructType\Shipment
     */
    public function setPremium($premium = null)
    {
        // validation for constraint: string
        if (!is_null($premium) && !is_string($premium)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($premium, true), gettype($premium)), __LINE__);
        }
        if (is_null($premium) || (is_array($premium) && empty($premium))) {
            unset($this->premium);
        } else {
            $this->premium = $premium;
        }
        return $this;
    }
    /**
     * Get premium_charge value
     * @return float|null
     */
    public function getPremium_charge()
    {
        return $this->premium_charge;
    }
    /**
     * Set premium_charge value
     * @param float $premium_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setPremium_charge($premium_charge = null)
    {
        // validation for constraint: float
        if (!is_null($premium_charge) && !(is_float($premium_charge) || is_numeric($premium_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($premium_charge, true), gettype($premium_charge)), __LINE__);
        }
        $this->premium_charge = $premium_charge;
        return $this;
    }
    /**
     * Get proforma value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\Proforma|null
     */
    public function getProforma()
    {
        return isset($this->proforma) ? $this->proforma : null;
    }
    /**
     * Set proforma value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\StructType\Proforma $proforma
     * @return \Canpar\StructType\Shipment
     */
    public function setProforma(\Canpar\StructType\Proforma $proforma = null)
    {
        if (is_null($proforma) || (is_array($proforma) && empty($proforma))) {
            unset($this->proforma);
        } else {
            $this->proforma = $proforma;
        }
        return $this;
    }
    /**
     * Get ra_charge value
     * @return float|null
     */
    public function getRa_charge()
    {
        return $this->ra_charge;
    }
    /**
     * Set ra_charge value
     * @param float $ra_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setRa_charge($ra_charge = null)
    {
        // validation for constraint: float
        if (!is_null($ra_charge) && !(is_float($ra_charge) || is_numeric($ra_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ra_charge, true), gettype($ra_charge)), __LINE__);
        }
        $this->ra_charge = $ra_charge;
        return $this;
    }
    /**
     * Get reported_weight_unit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReported_weight_unit()
    {
        return isset($this->reported_weight_unit) ? $this->reported_weight_unit : null;
    }
    /**
     * Set reported_weight_unit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $reported_weight_unit
     * @return \Canpar\StructType\Shipment
     */
    public function setReported_weight_unit($reported_weight_unit = null)
    {
        // validation for constraint: string
        if (!is_null($reported_weight_unit) && !is_string($reported_weight_unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reported_weight_unit, true), gettype($reported_weight_unit)), __LINE__);
        }
        if (is_null($reported_weight_unit) || (is_array($reported_weight_unit) && empty($reported_weight_unit))) {
            unset($this->reported_weight_unit);
        } else {
            $this->reported_weight_unit = $reported_weight_unit;
        }
        return $this;
    }
    /**
     * Get rural_charge value
     * @return float|null
     */
    public function getRural_charge()
    {
        return $this->rural_charge;
    }
    /**
     * Set rural_charge value
     * @param float $rural_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setRural_charge($rural_charge = null)
    {
        // validation for constraint: float
        if (!is_null($rural_charge) && !(is_float($rural_charge) || is_numeric($rural_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rural_charge, true), gettype($rural_charge)), __LINE__);
        }
        $this->rural_charge = $rural_charge;
        return $this;
    }
    /**
     * Get send_email_to_delivery value
     * @return bool|null
     */
    public function getSend_email_to_delivery()
    {
        return $this->send_email_to_delivery;
    }
    /**
     * Set send_email_to_delivery value
     * @param bool $send_email_to_delivery
     * @return \Canpar\StructType\Shipment
     */
    public function setSend_email_to_delivery($send_email_to_delivery = null)
    {
        // validation for constraint: boolean
        if (!is_null($send_email_to_delivery) && !is_bool($send_email_to_delivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($send_email_to_delivery, true), gettype($send_email_to_delivery)), __LINE__);
        }
        $this->send_email_to_delivery = $send_email_to_delivery;
        return $this;
    }
    /**
     * Get send_email_to_pickup value
     * @return bool|null
     */
    public function getSend_email_to_pickup()
    {
        return $this->send_email_to_pickup;
    }
    /**
     * Set send_email_to_pickup value
     * @param bool $send_email_to_pickup
     * @return \Canpar\StructType\Shipment
     */
    public function setSend_email_to_pickup($send_email_to_pickup = null)
    {
        // validation for constraint: boolean
        if (!is_null($send_email_to_pickup) && !is_bool($send_email_to_pickup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($send_email_to_pickup, true), gettype($send_email_to_pickup)), __LINE__);
        }
        $this->send_email_to_pickup = $send_email_to_pickup;
        return $this;
    }
    /**
     * Get service_type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getService_type()
    {
        return isset($this->service_type) ? $this->service_type : null;
    }
    /**
     * Set service_type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $service_type
     * @return \Canpar\StructType\Shipment
     */
    public function setService_type($service_type = null)
    {
        // validation for constraint: string
        if (!is_null($service_type) && !is_string($service_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_type, true), gettype($service_type)), __LINE__);
        }
        if (is_null($service_type) || (is_array($service_type) && empty($service_type))) {
            unset($this->service_type);
        } else {
            $this->service_type = $service_type;
        }
        return $this;
    }
    /**
     * Get shipment_status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipment_status()
    {
        return isset($this->shipment_status) ? $this->shipment_status : null;
    }
    /**
     * Set shipment_status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipment_status
     * @return \Canpar\StructType\Shipment
     */
    public function setShipment_status($shipment_status = null)
    {
        // validation for constraint: string
        if (!is_null($shipment_status) && !is_string($shipment_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipment_status, true), gettype($shipment_status)), __LINE__);
        }
        if (is_null($shipment_status) || (is_array($shipment_status) && empty($shipment_status))) {
            unset($this->shipment_status);
        } else {
            $this->shipment_status = $shipment_status;
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
     * @return \Canpar\StructType\Shipment
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
     * @return \Canpar\StructType\Shipment
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
     * Get subtotal value
     * @return float|null
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }
    /**
     * Set subtotal value
     * @param float $subtotal
     * @return \Canpar\StructType\Shipment
     */
    public function setSubtotal($subtotal = null)
    {
        // validation for constraint: float
        if (!is_null($subtotal) && !(is_float($subtotal) || is_numeric($subtotal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($subtotal, true), gettype($subtotal)), __LINE__);
        }
        $this->subtotal = $subtotal;
        return $this;
    }
    /**
     * Get subtotal_with_handling value
     * @return float|null
     */
    public function getSubtotal_with_handling()
    {
        return $this->subtotal_with_handling;
    }
    /**
     * Set subtotal_with_handling value
     * @param float $subtotal_with_handling
     * @return \Canpar\StructType\Shipment
     */
    public function setSubtotal_with_handling($subtotal_with_handling = null)
    {
        // validation for constraint: float
        if (!is_null($subtotal_with_handling) && !(is_float($subtotal_with_handling) || is_numeric($subtotal_with_handling))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($subtotal_with_handling, true), gettype($subtotal_with_handling)), __LINE__);
        }
        $this->subtotal_with_handling = $subtotal_with_handling;
        return $this;
    }
    /**
     * Get tax_charge value
     * @return tax_charge
     */
    public function getTax_charge_1()
    {
        return $this->tax_charge_1;
    }
    /**
     * Set tax_charge value
     * @param tax_charge $tax_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setTax_charge_1($tax_charge_1 = null)
    {
        // validation for constraint: float
        if (!is_null($tax_charge_1) && !(is_float($tax_charge_1) || is_numeric($tax_charge_1))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($tax_charge_1, true), gettype($tax_charge_1)), __LINE__);
        }
        $this->tax_charge_1 = $tax_charge_1;
        return $this;
    }
    /**
     * Get tax_charge value
     * @return tax_charge
     */
    public function getTax_charge_2()
    {
        return $this->tax_charge_2;
    }
    /**
     * Set tax_charge value
     * @param tax_charge $tax_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setTax_charge_2($tax_charge_2 = null)
    {
        // validation for constraint: float
        if (!is_null($tax_charge_2) && !(is_float($tax_charge_2) || is_numeric($tax_charge_2))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($tax_charge_2, true), gettype($tax_charge_2)), __LINE__);
        }
        $this->tax_charge_2 = $tax_charge_2;
        return $this;
    }
    /**
     * Get tax_code value
     * @return tax_code
     */
    public function getTax_code_1()
    {
        return isset($this->tax_code_1) ? $this->tax_code_1 : null;
    }
    /**
     * Set tax_code value
     * @param tax_code $tax_code
     * @return \Canpar\StructType\Shipment
     */
    public function setTax_code_1($tax_code_1 = null)
    {
        // validation for constraint: string
        if (!is_null($tax_code_1) && !is_string($tax_code_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tax_code_1, true), gettype($tax_code_1)), __LINE__);
        }
        if (is_null($tax_code_1) || (is_array($tax_code_1) && empty($tax_code_1))) {
            unset($this->tax_code_1);
        } else {
            $this->tax_code_1 = $tax_code_1;
        }
        return $this;
    }
    /**
     * Get tax_code value
     * @return tax_code
     */
    public function getTax_code_2()
    {
        return isset($this->tax_code_2) ? $this->tax_code_2 : null;
    }
    /**
     * Set tax_code value
     * @param tax_code $tax_code
     * @return \Canpar\StructType\Shipment
     */
    public function setTax_code_2($tax_code_2 = null)
    {
        // validation for constraint: string
        if (!is_null($tax_code_2) && !is_string($tax_code_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tax_code_2, true), gettype($tax_code_2)), __LINE__);
        }
        if (is_null($tax_code_2) || (is_array($tax_code_2) && empty($tax_code_2))) {
            unset($this->tax_code_2);
        } else {
            $this->tax_code_2 = $tax_code_2;
        }
        return $this;
    }
    /**
     * Get total value
     * @return float|null
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * Set total value
     * @param float $total
     * @return \Canpar\StructType\Shipment
     */
    public function setTotal($total = null)
    {
        // validation for constraint: float
        if (!is_null($total) && !(is_float($total) || is_numeric($total))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
        $this->total = $total;
        return $this;
    }
    /**
     * Get total_with_handling value
     * @return float|null
     */
    public function getTotal_with_handling()
    {
        return $this->total_with_handling;
    }
    /**
     * Set total_with_handling value
     * @param float $total_with_handling
     * @return \Canpar\StructType\Shipment
     */
    public function setTotal_with_handling($total_with_handling = null)
    {
        // validation for constraint: float
        if (!is_null($total_with_handling) && !(is_float($total_with_handling) || is_numeric($total_with_handling))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_with_handling, true), gettype($total_with_handling)), __LINE__);
        }
        $this->total_with_handling = $total_with_handling;
        return $this;
    }
    /**
     * Get transit_time value
     * @return string|null
     */
    public function getTransit_time()
    {
        return $this->transit_time;
    }
    /**
     * Set transit_time value
     * @param string $transit_time
     * @return \Canpar\StructType\Shipment
     */
    public function setTransit_time($transit_time = null)
    {
        // validation for constraint: string
        if (!is_null($transit_time) && !is_string($transit_time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transit_time, true), gettype($transit_time)), __LINE__);
        }
        $this->transit_time = $transit_time;
        return $this;
    }
    /**
     * Get transit_time_guaranteed value
     * @return bool|null
     */
    public function getTransit_time_guaranteed()
    {
        return $this->transit_time_guaranteed;
    }
    /**
     * Set transit_time_guaranteed value
     * @param bool $transit_time_guaranteed
     * @return \Canpar\StructType\Shipment
     */
    public function setTransit_time_guaranteed($transit_time_guaranteed = null)
    {
        // validation for constraint: boolean
        if (!is_null($transit_time_guaranteed) && !is_bool($transit_time_guaranteed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($transit_time_guaranteed, true), gettype($transit_time_guaranteed)), __LINE__);
        }
        $this->transit_time_guaranteed = $transit_time_guaranteed;
        return $this;
    }
    /**
     * Get updated_on value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUpdated_on()
    {
        return isset($this->updated_on) ? $this->updated_on : null;
    }
    /**
     * Set updated_on value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $updated_on
     * @return \Canpar\StructType\Shipment
     */
    public function setUpdated_on($updated_on = null)
    {
        // validation for constraint: string
        if (!is_null($updated_on) && !is_string($updated_on)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updated_on, true), gettype($updated_on)), __LINE__);
        }
        if (is_null($updated_on) || (is_array($updated_on) && empty($updated_on))) {
            unset($this->updated_on);
        } else {
            $this->updated_on = $updated_on;
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
     * @return \Canpar\StructType\Shipment
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
    /**
     * Get voided value
     * @return bool|null
     */
    public function getVoided()
    {
        return $this->voided;
    }
    /**
     * Set voided value
     * @param bool $voided
     * @return \Canpar\StructType\Shipment
     */
    public function setVoided($voided = null)
    {
        // validation for constraint: boolean
        if (!is_null($voided) && !is_bool($voided)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($voided, true), gettype($voided)), __LINE__);
        }
        $this->voided = $voided;
        return $this;
    }
    /**
     * Get xc_charge value
     * @return float|null
     */
    public function getXc_charge()
    {
        return $this->xc_charge;
    }
    /**
     * Set xc_charge value
     * @param float $xc_charge
     * @return \Canpar\StructType\Shipment
     */
    public function setXc_charge($xc_charge = null)
    {
        // validation for constraint: float
        if (!is_null($xc_charge) && !(is_float($xc_charge) || is_numeric($xc_charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($xc_charge, true), gettype($xc_charge)), __LINE__);
        }
        $this->xc_charge = $xc_charge;
        return $this;
    }
    /**
     * Get zone value
     * @return string|null
     */
    public function getZone()
    {
        return $this->zone;
    }
    /**
     * Set zone value
     * @param string $zone
     * @return \Canpar\StructType\Shipment
     */
    public function setZone($zone = null)
    {
        // validation for constraint: string
        if (!is_null($zone) && !is_string($zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zone, true), gettype($zone)), __LINE__);
        }
        $this->zone = $zone;
        return $this;
    }
}
