<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Preference StructType
 * @subpackage Structs
 */
class Preference extends AbstractStructBase
{
    /**
     * The additional_manifest_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $additional_manifest_type;
    /**
     * The alternative_pickup_address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Address
     */
    public $alternative_pickup_address;
    /**
     * The alternative_reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $alternative_reference;
    /**
     * The alternative_reference_label
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $alternative_reference_label;
    /**
     * The barcode_source
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $barcode_source;
    /**
     * The broker_address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Address
     */
    public $broker_address;
    /**
     * The business_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $business_num;
    /**
     * The cod_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $cod_allowed;
    /**
     * The collect_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $collect_allowed;
    /**
     * The collect_shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $collect_shipper_num;
    /**
     * The consolidate_proforma
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $consolidate_proforma;
    /**
     * The cos_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $cos_allowed;
    /**
     * The cost_centre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $cost_centre;
    /**
     * The default_cod_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $default_cod_type;
    /**
     * The default_handling
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $default_handling;
    /**
     * The default_handling_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $default_handling_type;
    /**
     * The default_nsr
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $default_nsr;
    /**
     * The default_pieces
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $default_pieces;
    /**
     * The default_print_return_tag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $default_print_return_tag;
    /**
     * The default_proforma_print
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $default_proforma_print;
    /**
     * The default_weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $default_weight;
    /**
     * The dg_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $dg_allowed;
    /**
     * The dimensions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dimensions;
    /**
     * The ground_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ground_allowed;
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
     * The international_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $international_allowed;
    /**
     * The lock_pieces
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $lock_pieces;
    /**
     * The lock_weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $lock_weight;
    /**
     * The manifest_email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $manifest_email;
    /**
     * The manifest_num_of_copies
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $manifest_num_of_copies;
    /**
     * The noon_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $noon_allowed;
    /**
     * The nsr_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $nsr_allowed;
    /**
     * The overnight_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $overnight_allowed;
    /**
     * The overnight_letter_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $overnight_letter_allowed;
    /**
     * The overnight_pak_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $overnight_pak_allowed;
    /**
     * The permit_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $permit_num;
    /**
     * The print_charges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $print_charges;
    /**
     * The print_delivery_phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $print_delivery_phone;
    /**
     * The print_pickup_phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $print_pickup_phone;
    /**
     * The print_proforma
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $print_proforma;
    /**
     * The proforma_input
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $proforma_input;
    /**
     * The proforma_num_of_copies
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $proforma_num_of_copies;
    /**
     * The reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $reference;
    /**
     * The return_tag_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $return_tag_allowed;
    /**
     * The saturday_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $saturday_allowed;
    /**
     * The select_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $select_allowed;
    /**
     * The select_letter_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $select_letter_allowed;
    /**
     * The select_pak_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $select_pak_allowed;
    /**
     * The select_usa_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $select_usa_allowed;
    /**
     * The select_usa_letter_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $select_usa_letter_allowed;
    /**
     * The select_usa_pak_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $select_usa_pak_allowed;
    /**
     * The send_email_to_pickup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $send_email_to_pickup;
    /**
     * The service_selector
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $service_selector;
    /**
     * The shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipper_num;
    /**
     * The ten_am_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ten_am_allowed;
    /**
     * The updated_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $updated_on;
    /**
     * The usa_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $usa_allowed;
    /**
     * The use_alternative_pickup_address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $use_alternative_pickup_address;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * The xc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $xc;
    /**
     * Constructor method for Preference
     * @uses Preference::setAdditional_manifest_type()
     * @uses Preference::setAlternative_pickup_address()
     * @uses Preference::setAlternative_reference()
     * @uses Preference::setAlternative_reference_label()
     * @uses Preference::setBarcode_source()
     * @uses Preference::setBroker_address()
     * @uses Preference::setBusiness_num()
     * @uses Preference::setCod_allowed()
     * @uses Preference::setCollect_allowed()
     * @uses Preference::setCollect_shipper_num()
     * @uses Preference::setConsolidate_proforma()
     * @uses Preference::setCos_allowed()
     * @uses Preference::setCost_centre()
     * @uses Preference::setDefault_cod_type()
     * @uses Preference::setDefault_handling()
     * @uses Preference::setDefault_handling_type()
     * @uses Preference::setDefault_nsr()
     * @uses Preference::setDefault_pieces()
     * @uses Preference::setDefault_print_return_tag()
     * @uses Preference::setDefault_proforma_print()
     * @uses Preference::setDefault_weight()
     * @uses Preference::setDg_allowed()
     * @uses Preference::setDimensions()
     * @uses Preference::setGround_allowed()
     * @uses Preference::setInserted_on()
     * @uses Preference::setInstruction()
     * @uses Preference::setInternational_allowed()
     * @uses Preference::setLock_pieces()
     * @uses Preference::setLock_weight()
     * @uses Preference::setManifest_email()
     * @uses Preference::setManifest_num_of_copies()
     * @uses Preference::setNoon_allowed()
     * @uses Preference::setNsr_allowed()
     * @uses Preference::setOvernight_allowed()
     * @uses Preference::setOvernight_letter_allowed()
     * @uses Preference::setOvernight_pak_allowed()
     * @uses Preference::setPermit_num()
     * @uses Preference::setPrint_charges()
     * @uses Preference::setPrint_delivery_phone()
     * @uses Preference::setPrint_pickup_phone()
     * @uses Preference::setPrint_proforma()
     * @uses Preference::setProforma_input()
     * @uses Preference::setProforma_num_of_copies()
     * @uses Preference::setReference()
     * @uses Preference::setReturn_tag_allowed()
     * @uses Preference::setSaturday_allowed()
     * @uses Preference::setSelect_allowed()
     * @uses Preference::setSelect_letter_allowed()
     * @uses Preference::setSelect_pak_allowed()
     * @uses Preference::setSelect_usa_allowed()
     * @uses Preference::setSelect_usa_letter_allowed()
     * @uses Preference::setSelect_usa_pak_allowed()
     * @uses Preference::setSend_email_to_pickup()
     * @uses Preference::setService_selector()
     * @uses Preference::setShipper_num()
     * @uses Preference::setTen_am_allowed()
     * @uses Preference::setUpdated_on()
     * @uses Preference::setUsa_allowed()
     * @uses Preference::setUse_alternative_pickup_address()
     * @uses Preference::setUser_id()
     * @uses Preference::setXc()
     * @param string $additional_manifest_type
     * @param \Canpar\Ship\StructType\Address $alternative_pickup_address
     * @param string $alternative_reference
     * @param string $alternative_reference_label
     * @param string $barcode_source
     * @param \Canpar\Ship\StructType\Address $broker_address
     * @param string $business_num
     * @param bool $cod_allowed
     * @param bool $collect_allowed
     * @param string $collect_shipper_num
     * @param bool $consolidate_proforma
     * @param bool $cos_allowed
     * @param string $cost_centre
     * @param string $default_cod_type
     * @param float $default_handling
     * @param string $default_handling_type
     * @param bool $default_nsr
     * @param int $default_pieces
     * @param bool $default_print_return_tag
     * @param bool $default_proforma_print
     * @param float $default_weight
     * @param bool $dg_allowed
     * @param string $dimensions
     * @param bool $ground_allowed
     * @param string $inserted_on
     * @param string $instruction
     * @param bool $international_allowed
     * @param bool $lock_pieces
     * @param bool $lock_weight
     * @param string $manifest_email
     * @param string $manifest_num_of_copies
     * @param bool $noon_allowed
     * @param bool $nsr_allowed
     * @param bool $overnight_allowed
     * @param bool $overnight_letter_allowed
     * @param bool $overnight_pak_allowed
     * @param string $permit_num
     * @param bool $print_charges
     * @param bool $print_delivery_phone
     * @param bool $print_pickup_phone
     * @param bool $print_proforma
     * @param string $proforma_input
     * @param string $proforma_num_of_copies
     * @param string $reference
     * @param bool $return_tag_allowed
     * @param bool $saturday_allowed
     * @param bool $select_allowed
     * @param bool $select_letter_allowed
     * @param bool $select_pak_allowed
     * @param bool $select_usa_allowed
     * @param bool $select_usa_letter_allowed
     * @param bool $select_usa_pak_allowed
     * @param bool $send_email_to_pickup
     * @param string $service_selector
     * @param string $shipper_num
     * @param bool $ten_am_allowed
     * @param string $updated_on
     * @param bool $usa_allowed
     * @param bool $use_alternative_pickup_address
     * @param string $user_id
     * @param string $xc
     */
    public function __construct($additional_manifest_type = null, \Canpar\Ship\StructType\Address $alternative_pickup_address = null, $alternative_reference = null, $alternative_reference_label = null, $barcode_source = null, \Canpar\Ship\StructType\Address $broker_address = null, $business_num = null, $cod_allowed = null, $collect_allowed = null, $collect_shipper_num = null, $consolidate_proforma = null, $cos_allowed = null, $cost_centre = null, $default_cod_type = null, $default_handling = null, $default_handling_type = null, $default_nsr = null, $default_pieces = null, $default_print_return_tag = null, $default_proforma_print = null, $default_weight = null, $dg_allowed = null, $dimensions = null, $ground_allowed = null, $inserted_on = null, $instruction = null, $international_allowed = null, $lock_pieces = null, $lock_weight = null, $manifest_email = null, $manifest_num_of_copies = null, $noon_allowed = null, $nsr_allowed = null, $overnight_allowed = null, $overnight_letter_allowed = null, $overnight_pak_allowed = null, $permit_num = null, $print_charges = null, $print_delivery_phone = null, $print_pickup_phone = null, $print_proforma = null, $proforma_input = null, $proforma_num_of_copies = null, $reference = null, $return_tag_allowed = null, $saturday_allowed = null, $select_allowed = null, $select_letter_allowed = null, $select_pak_allowed = null, $select_usa_allowed = null, $select_usa_letter_allowed = null, $select_usa_pak_allowed = null, $send_email_to_pickup = null, $service_selector = null, $shipper_num = null, $ten_am_allowed = null, $updated_on = null, $usa_allowed = null, $use_alternative_pickup_address = null, $user_id = null, $xc = null)
    {
        $this
            ->setAdditional_manifest_type($additional_manifest_type)
            ->setAlternative_pickup_address($alternative_pickup_address)
            ->setAlternative_reference($alternative_reference)
            ->setAlternative_reference_label($alternative_reference_label)
            ->setBarcode_source($barcode_source)
            ->setBroker_address($broker_address)
            ->setBusiness_num($business_num)
            ->setCod_allowed($cod_allowed)
            ->setCollect_allowed($collect_allowed)
            ->setCollect_shipper_num($collect_shipper_num)
            ->setConsolidate_proforma($consolidate_proforma)
            ->setCos_allowed($cos_allowed)
            ->setCost_centre($cost_centre)
            ->setDefault_cod_type($default_cod_type)
            ->setDefault_handling($default_handling)
            ->setDefault_handling_type($default_handling_type)
            ->setDefault_nsr($default_nsr)
            ->setDefault_pieces($default_pieces)
            ->setDefault_print_return_tag($default_print_return_tag)
            ->setDefault_proforma_print($default_proforma_print)
            ->setDefault_weight($default_weight)
            ->setDg_allowed($dg_allowed)
            ->setDimensions($dimensions)
            ->setGround_allowed($ground_allowed)
            ->setInserted_on($inserted_on)
            ->setInstruction($instruction)
            ->setInternational_allowed($international_allowed)
            ->setLock_pieces($lock_pieces)
            ->setLock_weight($lock_weight)
            ->setManifest_email($manifest_email)
            ->setManifest_num_of_copies($manifest_num_of_copies)
            ->setNoon_allowed($noon_allowed)
            ->setNsr_allowed($nsr_allowed)
            ->setOvernight_allowed($overnight_allowed)
            ->setOvernight_letter_allowed($overnight_letter_allowed)
            ->setOvernight_pak_allowed($overnight_pak_allowed)
            ->setPermit_num($permit_num)
            ->setPrint_charges($print_charges)
            ->setPrint_delivery_phone($print_delivery_phone)
            ->setPrint_pickup_phone($print_pickup_phone)
            ->setPrint_proforma($print_proforma)
            ->setProforma_input($proforma_input)
            ->setProforma_num_of_copies($proforma_num_of_copies)
            ->setReference($reference)
            ->setReturn_tag_allowed($return_tag_allowed)
            ->setSaturday_allowed($saturday_allowed)
            ->setSelect_allowed($select_allowed)
            ->setSelect_letter_allowed($select_letter_allowed)
            ->setSelect_pak_allowed($select_pak_allowed)
            ->setSelect_usa_allowed($select_usa_allowed)
            ->setSelect_usa_letter_allowed($select_usa_letter_allowed)
            ->setSelect_usa_pak_allowed($select_usa_pak_allowed)
            ->setSend_email_to_pickup($send_email_to_pickup)
            ->setService_selector($service_selector)
            ->setShipper_num($shipper_num)
            ->setTen_am_allowed($ten_am_allowed)
            ->setUpdated_on($updated_on)
            ->setUsa_allowed($usa_allowed)
            ->setUse_alternative_pickup_address($use_alternative_pickup_address)
            ->setUser_id($user_id)
            ->setXc($xc);
    }
    /**
     * Get additional_manifest_type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditional_manifest_type()
    {
        return isset($this->additional_manifest_type) ? $this->additional_manifest_type : null;
    }
    /**
     * Set additional_manifest_type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additional_manifest_type
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setAdditional_manifest_type($additional_manifest_type = null)
    {
        // validation for constraint: string
        if (!is_null($additional_manifest_type) && !is_string($additional_manifest_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additional_manifest_type, true), gettype($additional_manifest_type)), __LINE__);
        }
        if (is_null($additional_manifest_type) || (is_array($additional_manifest_type) && empty($additional_manifest_type))) {
            unset($this->additional_manifest_type);
        } else {
            $this->additional_manifest_type = $additional_manifest_type;
        }
        return $this;
    }
    /**
     * Get alternative_pickup_address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Address|null
     */
    public function getAlternative_pickup_address()
    {
        return isset($this->alternative_pickup_address) ? $this->alternative_pickup_address : null;
    }
    /**
     * Set alternative_pickup_address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\Address $alternative_pickup_address
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setAlternative_pickup_address(\Canpar\Ship\StructType\Address $alternative_pickup_address = null)
    {
        if (is_null($alternative_pickup_address) || (is_array($alternative_pickup_address) && empty($alternative_pickup_address))) {
            unset($this->alternative_pickup_address);
        } else {
            $this->alternative_pickup_address = $alternative_pickup_address;
        }
        return $this;
    }
    /**
     * Get alternative_reference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAlternative_reference()
    {
        return isset($this->alternative_reference) ? $this->alternative_reference : null;
    }
    /**
     * Set alternative_reference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $alternative_reference
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setAlternative_reference($alternative_reference = null)
    {
        // validation for constraint: string
        if (!is_null($alternative_reference) && !is_string($alternative_reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alternative_reference, true), gettype($alternative_reference)), __LINE__);
        }
        if (is_null($alternative_reference) || (is_array($alternative_reference) && empty($alternative_reference))) {
            unset($this->alternative_reference);
        } else {
            $this->alternative_reference = $alternative_reference;
        }
        return $this;
    }
    /**
     * Get alternative_reference_label value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAlternative_reference_label()
    {
        return isset($this->alternative_reference_label) ? $this->alternative_reference_label : null;
    }
    /**
     * Set alternative_reference_label value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $alternative_reference_label
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setAlternative_reference_label($alternative_reference_label = null)
    {
        // validation for constraint: string
        if (!is_null($alternative_reference_label) && !is_string($alternative_reference_label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alternative_reference_label, true), gettype($alternative_reference_label)), __LINE__);
        }
        if (is_null($alternative_reference_label) || (is_array($alternative_reference_label) && empty($alternative_reference_label))) {
            unset($this->alternative_reference_label);
        } else {
            $this->alternative_reference_label = $alternative_reference_label;
        }
        return $this;
    }
    /**
     * Get barcode_source value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBarcode_source()
    {
        return isset($this->barcode_source) ? $this->barcode_source : null;
    }
    /**
     * Set barcode_source value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $barcode_source
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setBarcode_source($barcode_source = null)
    {
        // validation for constraint: string
        if (!is_null($barcode_source) && !is_string($barcode_source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcode_source, true), gettype($barcode_source)), __LINE__);
        }
        if (is_null($barcode_source) || (is_array($barcode_source) && empty($barcode_source))) {
            unset($this->barcode_source);
        } else {
            $this->barcode_source = $barcode_source;
        }
        return $this;
    }
    /**
     * Get broker_address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Address|null
     */
    public function getBroker_address()
    {
        return isset($this->broker_address) ? $this->broker_address : null;
    }
    /**
     * Set broker_address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\Address $broker_address
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setBroker_address(\Canpar\Ship\StructType\Address $broker_address = null)
    {
        if (is_null($broker_address) || (is_array($broker_address) && empty($broker_address))) {
            unset($this->broker_address);
        } else {
            $this->broker_address = $broker_address;
        }
        return $this;
    }
    /**
     * Get business_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBusiness_num()
    {
        return isset($this->business_num) ? $this->business_num : null;
    }
    /**
     * Set business_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $business_num
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setBusiness_num($business_num = null)
    {
        // validation for constraint: string
        if (!is_null($business_num) && !is_string($business_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($business_num, true), gettype($business_num)), __LINE__);
        }
        if (is_null($business_num) || (is_array($business_num) && empty($business_num))) {
            unset($this->business_num);
        } else {
            $this->business_num = $business_num;
        }
        return $this;
    }
    /**
     * Get cod_allowed value
     * @return bool|null
     */
    public function getCod_allowed()
    {
        return $this->cod_allowed;
    }
    /**
     * Set cod_allowed value
     * @param bool $cod_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setCod_allowed($cod_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($cod_allowed) && !is_bool($cod_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cod_allowed, true), gettype($cod_allowed)), __LINE__);
        }
        $this->cod_allowed = $cod_allowed;
        return $this;
    }
    /**
     * Get collect_allowed value
     * @return bool|null
     */
    public function getCollect_allowed()
    {
        return $this->collect_allowed;
    }
    /**
     * Set collect_allowed value
     * @param bool $collect_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setCollect_allowed($collect_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($collect_allowed) && !is_bool($collect_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collect_allowed, true), gettype($collect_allowed)), __LINE__);
        }
        $this->collect_allowed = $collect_allowed;
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
     * @return \Canpar\Ship\StructType\Preference
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
     * Get consolidate_proforma value
     * @return bool|null
     */
    public function getConsolidate_proforma()
    {
        return $this->consolidate_proforma;
    }
    /**
     * Set consolidate_proforma value
     * @param bool $consolidate_proforma
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setConsolidate_proforma($consolidate_proforma = null)
    {
        // validation for constraint: boolean
        if (!is_null($consolidate_proforma) && !is_bool($consolidate_proforma)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consolidate_proforma, true), gettype($consolidate_proforma)), __LINE__);
        }
        $this->consolidate_proforma = $consolidate_proforma;
        return $this;
    }
    /**
     * Get cos_allowed value
     * @return bool|null
     */
    public function getCos_allowed()
    {
        return $this->cos_allowed;
    }
    /**
     * Set cos_allowed value
     * @param bool $cos_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setCos_allowed($cos_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($cos_allowed) && !is_bool($cos_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cos_allowed, true), gettype($cos_allowed)), __LINE__);
        }
        $this->cos_allowed = $cos_allowed;
        return $this;
    }
    /**
     * Get cost_centre value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCost_centre()
    {
        return isset($this->cost_centre) ? $this->cost_centre : null;
    }
    /**
     * Set cost_centre value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cost_centre
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setCost_centre($cost_centre = null)
    {
        // validation for constraint: string
        if (!is_null($cost_centre) && !is_string($cost_centre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cost_centre, true), gettype($cost_centre)), __LINE__);
        }
        if (is_null($cost_centre) || (is_array($cost_centre) && empty($cost_centre))) {
            unset($this->cost_centre);
        } else {
            $this->cost_centre = $cost_centre;
        }
        return $this;
    }
    /**
     * Get default_cod_type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefault_cod_type()
    {
        return isset($this->default_cod_type) ? $this->default_cod_type : null;
    }
    /**
     * Set default_cod_type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $default_cod_type
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setDefault_cod_type($default_cod_type = null)
    {
        // validation for constraint: string
        if (!is_null($default_cod_type) && !is_string($default_cod_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($default_cod_type, true), gettype($default_cod_type)), __LINE__);
        }
        if (is_null($default_cod_type) || (is_array($default_cod_type) && empty($default_cod_type))) {
            unset($this->default_cod_type);
        } else {
            $this->default_cod_type = $default_cod_type;
        }
        return $this;
    }
    /**
     * Get default_handling value
     * @return float|null
     */
    public function getDefault_handling()
    {
        return $this->default_handling;
    }
    /**
     * Set default_handling value
     * @param float $default_handling
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setDefault_handling($default_handling = null)
    {
        // validation for constraint: float
        if (!is_null($default_handling) && !(is_float($default_handling) || is_numeric($default_handling))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($default_handling, true), gettype($default_handling)), __LINE__);
        }
        $this->default_handling = $default_handling;
        return $this;
    }
    /**
     * Get default_handling_type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefault_handling_type()
    {
        return isset($this->default_handling_type) ? $this->default_handling_type : null;
    }
    /**
     * Set default_handling_type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $default_handling_type
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setDefault_handling_type($default_handling_type = null)
    {
        // validation for constraint: string
        if (!is_null($default_handling_type) && !is_string($default_handling_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($default_handling_type, true), gettype($default_handling_type)), __LINE__);
        }
        if (is_null($default_handling_type) || (is_array($default_handling_type) && empty($default_handling_type))) {
            unset($this->default_handling_type);
        } else {
            $this->default_handling_type = $default_handling_type;
        }
        return $this;
    }
    /**
     * Get default_nsr value
     * @return bool|null
     */
    public function getDefault_nsr()
    {
        return $this->default_nsr;
    }
    /**
     * Set default_nsr value
     * @param bool $default_nsr
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setDefault_nsr($default_nsr = null)
    {
        // validation for constraint: boolean
        if (!is_null($default_nsr) && !is_bool($default_nsr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($default_nsr, true), gettype($default_nsr)), __LINE__);
        }
        $this->default_nsr = $default_nsr;
        return $this;
    }
    /**
     * Get default_pieces value
     * @return int|null
     */
    public function getDefault_pieces()
    {
        return $this->default_pieces;
    }
    /**
     * Set default_pieces value
     * @param int $default_pieces
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setDefault_pieces($default_pieces = null)
    {
        // validation for constraint: int
        if (!is_null($default_pieces) && !(is_int($default_pieces) || ctype_digit($default_pieces))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($default_pieces, true), gettype($default_pieces)), __LINE__);
        }
        $this->default_pieces = $default_pieces;
        return $this;
    }
    /**
     * Get default_print_return_tag value
     * @return bool|null
     */
    public function getDefault_print_return_tag()
    {
        return $this->default_print_return_tag;
    }
    /**
     * Set default_print_return_tag value
     * @param bool $default_print_return_tag
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setDefault_print_return_tag($default_print_return_tag = null)
    {
        // validation for constraint: boolean
        if (!is_null($default_print_return_tag) && !is_bool($default_print_return_tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($default_print_return_tag, true), gettype($default_print_return_tag)), __LINE__);
        }
        $this->default_print_return_tag = $default_print_return_tag;
        return $this;
    }
    /**
     * Get default_proforma_print value
     * @return bool|null
     */
    public function getDefault_proforma_print()
    {
        return $this->default_proforma_print;
    }
    /**
     * Set default_proforma_print value
     * @param bool $default_proforma_print
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setDefault_proforma_print($default_proforma_print = null)
    {
        // validation for constraint: boolean
        if (!is_null($default_proforma_print) && !is_bool($default_proforma_print)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($default_proforma_print, true), gettype($default_proforma_print)), __LINE__);
        }
        $this->default_proforma_print = $default_proforma_print;
        return $this;
    }
    /**
     * Get default_weight value
     * @return float|null
     */
    public function getDefault_weight()
    {
        return $this->default_weight;
    }
    /**
     * Set default_weight value
     * @param float $default_weight
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setDefault_weight($default_weight = null)
    {
        // validation for constraint: float
        if (!is_null($default_weight) && !(is_float($default_weight) || is_numeric($default_weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($default_weight, true), gettype($default_weight)), __LINE__);
        }
        $this->default_weight = $default_weight;
        return $this;
    }
    /**
     * Get dg_allowed value
     * @return bool|null
     */
    public function getDg_allowed()
    {
        return $this->dg_allowed;
    }
    /**
     * Set dg_allowed value
     * @param bool $dg_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setDg_allowed($dg_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($dg_allowed) && !is_bool($dg_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dg_allowed, true), gettype($dg_allowed)), __LINE__);
        }
        $this->dg_allowed = $dg_allowed;
        return $this;
    }
    /**
     * Get dimensions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDimensions()
    {
        return isset($this->dimensions) ? $this->dimensions : null;
    }
    /**
     * Set dimensions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dimensions
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setDimensions($dimensions = null)
    {
        // validation for constraint: string
        if (!is_null($dimensions) && !is_string($dimensions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dimensions, true), gettype($dimensions)), __LINE__);
        }
        if (is_null($dimensions) || (is_array($dimensions) && empty($dimensions))) {
            unset($this->dimensions);
        } else {
            $this->dimensions = $dimensions;
        }
        return $this;
    }
    /**
     * Get ground_allowed value
     * @return bool|null
     */
    public function getGround_allowed()
    {
        return $this->ground_allowed;
    }
    /**
     * Set ground_allowed value
     * @param bool $ground_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setGround_allowed($ground_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($ground_allowed) && !is_bool($ground_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ground_allowed, true), gettype($ground_allowed)), __LINE__);
        }
        $this->ground_allowed = $ground_allowed;
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
     * @return \Canpar\Ship\StructType\Preference
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
     * @return \Canpar\Ship\StructType\Preference
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
     * Get international_allowed value
     * @return bool|null
     */
    public function getInternational_allowed()
    {
        return $this->international_allowed;
    }
    /**
     * Set international_allowed value
     * @param bool $international_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setInternational_allowed($international_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($international_allowed) && !is_bool($international_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($international_allowed, true), gettype($international_allowed)), __LINE__);
        }
        $this->international_allowed = $international_allowed;
        return $this;
    }
    /**
     * Get lock_pieces value
     * @return bool|null
     */
    public function getLock_pieces()
    {
        return $this->lock_pieces;
    }
    /**
     * Set lock_pieces value
     * @param bool $lock_pieces
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setLock_pieces($lock_pieces = null)
    {
        // validation for constraint: boolean
        if (!is_null($lock_pieces) && !is_bool($lock_pieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lock_pieces, true), gettype($lock_pieces)), __LINE__);
        }
        $this->lock_pieces = $lock_pieces;
        return $this;
    }
    /**
     * Get lock_weight value
     * @return bool|null
     */
    public function getLock_weight()
    {
        return $this->lock_weight;
    }
    /**
     * Set lock_weight value
     * @param bool $lock_weight
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setLock_weight($lock_weight = null)
    {
        // validation for constraint: boolean
        if (!is_null($lock_weight) && !is_bool($lock_weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lock_weight, true), gettype($lock_weight)), __LINE__);
        }
        $this->lock_weight = $lock_weight;
        return $this;
    }
    /**
     * Get manifest_email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getManifest_email()
    {
        return isset($this->manifest_email) ? $this->manifest_email : null;
    }
    /**
     * Set manifest_email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $manifest_email
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setManifest_email($manifest_email = null)
    {
        // validation for constraint: string
        if (!is_null($manifest_email) && !is_string($manifest_email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manifest_email, true), gettype($manifest_email)), __LINE__);
        }
        if (is_null($manifest_email) || (is_array($manifest_email) && empty($manifest_email))) {
            unset($this->manifest_email);
        } else {
            $this->manifest_email = $manifest_email;
        }
        return $this;
    }
    /**
     * Get manifest_num_of_copies value
     * @return string|null
     */
    public function getManifest_num_of_copies()
    {
        return $this->manifest_num_of_copies;
    }
    /**
     * Set manifest_num_of_copies value
     * @param string $manifest_num_of_copies
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setManifest_num_of_copies($manifest_num_of_copies = null)
    {
        // validation for constraint: string
        if (!is_null($manifest_num_of_copies) && !is_string($manifest_num_of_copies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manifest_num_of_copies, true), gettype($manifest_num_of_copies)), __LINE__);
        }
        $this->manifest_num_of_copies = $manifest_num_of_copies;
        return $this;
    }
    /**
     * Get noon_allowed value
     * @return bool|null
     */
    public function getNoon_allowed()
    {
        return $this->noon_allowed;
    }
    /**
     * Set noon_allowed value
     * @param bool $noon_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setNoon_allowed($noon_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($noon_allowed) && !is_bool($noon_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noon_allowed, true), gettype($noon_allowed)), __LINE__);
        }
        $this->noon_allowed = $noon_allowed;
        return $this;
    }
    /**
     * Get nsr_allowed value
     * @return bool|null
     */
    public function getNsr_allowed()
    {
        return $this->nsr_allowed;
    }
    /**
     * Set nsr_allowed value
     * @param bool $nsr_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setNsr_allowed($nsr_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($nsr_allowed) && !is_bool($nsr_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nsr_allowed, true), gettype($nsr_allowed)), __LINE__);
        }
        $this->nsr_allowed = $nsr_allowed;
        return $this;
    }
    /**
     * Get overnight_allowed value
     * @return bool|null
     */
    public function getOvernight_allowed()
    {
        return $this->overnight_allowed;
    }
    /**
     * Set overnight_allowed value
     * @param bool $overnight_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setOvernight_allowed($overnight_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($overnight_allowed) && !is_bool($overnight_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overnight_allowed, true), gettype($overnight_allowed)), __LINE__);
        }
        $this->overnight_allowed = $overnight_allowed;
        return $this;
    }
    /**
     * Get overnight_letter_allowed value
     * @return bool|null
     */
    public function getOvernight_letter_allowed()
    {
        return $this->overnight_letter_allowed;
    }
    /**
     * Set overnight_letter_allowed value
     * @param bool $overnight_letter_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setOvernight_letter_allowed($overnight_letter_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($overnight_letter_allowed) && !is_bool($overnight_letter_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overnight_letter_allowed, true), gettype($overnight_letter_allowed)), __LINE__);
        }
        $this->overnight_letter_allowed = $overnight_letter_allowed;
        return $this;
    }
    /**
     * Get overnight_pak_allowed value
     * @return bool|null
     */
    public function getOvernight_pak_allowed()
    {
        return $this->overnight_pak_allowed;
    }
    /**
     * Set overnight_pak_allowed value
     * @param bool $overnight_pak_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setOvernight_pak_allowed($overnight_pak_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($overnight_pak_allowed) && !is_bool($overnight_pak_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overnight_pak_allowed, true), gettype($overnight_pak_allowed)), __LINE__);
        }
        $this->overnight_pak_allowed = $overnight_pak_allowed;
        return $this;
    }
    /**
     * Get permit_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPermit_num()
    {
        return isset($this->permit_num) ? $this->permit_num : null;
    }
    /**
     * Set permit_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $permit_num
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setPermit_num($permit_num = null)
    {
        // validation for constraint: string
        if (!is_null($permit_num) && !is_string($permit_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($permit_num, true), gettype($permit_num)), __LINE__);
        }
        if (is_null($permit_num) || (is_array($permit_num) && empty($permit_num))) {
            unset($this->permit_num);
        } else {
            $this->permit_num = $permit_num;
        }
        return $this;
    }
    /**
     * Get print_charges value
     * @return bool|null
     */
    public function getPrint_charges()
    {
        return $this->print_charges;
    }
    /**
     * Set print_charges value
     * @param bool $print_charges
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setPrint_charges($print_charges = null)
    {
        // validation for constraint: boolean
        if (!is_null($print_charges) && !is_bool($print_charges)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($print_charges, true), gettype($print_charges)), __LINE__);
        }
        $this->print_charges = $print_charges;
        return $this;
    }
    /**
     * Get print_delivery_phone value
     * @return bool|null
     */
    public function getPrint_delivery_phone()
    {
        return $this->print_delivery_phone;
    }
    /**
     * Set print_delivery_phone value
     * @param bool $print_delivery_phone
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setPrint_delivery_phone($print_delivery_phone = null)
    {
        // validation for constraint: boolean
        if (!is_null($print_delivery_phone) && !is_bool($print_delivery_phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($print_delivery_phone, true), gettype($print_delivery_phone)), __LINE__);
        }
        $this->print_delivery_phone = $print_delivery_phone;
        return $this;
    }
    /**
     * Get print_pickup_phone value
     * @return bool|null
     */
    public function getPrint_pickup_phone()
    {
        return $this->print_pickup_phone;
    }
    /**
     * Set print_pickup_phone value
     * @param bool $print_pickup_phone
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setPrint_pickup_phone($print_pickup_phone = null)
    {
        // validation for constraint: boolean
        if (!is_null($print_pickup_phone) && !is_bool($print_pickup_phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($print_pickup_phone, true), gettype($print_pickup_phone)), __LINE__);
        }
        $this->print_pickup_phone = $print_pickup_phone;
        return $this;
    }
    /**
     * Get print_proforma value
     * @return bool|null
     */
    public function getPrint_proforma()
    {
        return $this->print_proforma;
    }
    /**
     * Set print_proforma value
     * @param bool $print_proforma
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setPrint_proforma($print_proforma = null)
    {
        // validation for constraint: boolean
        if (!is_null($print_proforma) && !is_bool($print_proforma)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($print_proforma, true), gettype($print_proforma)), __LINE__);
        }
        $this->print_proforma = $print_proforma;
        return $this;
    }
    /**
     * Get proforma_input value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProforma_input()
    {
        return isset($this->proforma_input) ? $this->proforma_input : null;
    }
    /**
     * Set proforma_input value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $proforma_input
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setProforma_input($proforma_input = null)
    {
        // validation for constraint: string
        if (!is_null($proforma_input) && !is_string($proforma_input)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proforma_input, true), gettype($proforma_input)), __LINE__);
        }
        if (is_null($proforma_input) || (is_array($proforma_input) && empty($proforma_input))) {
            unset($this->proforma_input);
        } else {
            $this->proforma_input = $proforma_input;
        }
        return $this;
    }
    /**
     * Get proforma_num_of_copies value
     * @return string|null
     */
    public function getProforma_num_of_copies()
    {
        return $this->proforma_num_of_copies;
    }
    /**
     * Set proforma_num_of_copies value
     * @param string $proforma_num_of_copies
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setProforma_num_of_copies($proforma_num_of_copies = null)
    {
        // validation for constraint: string
        if (!is_null($proforma_num_of_copies) && !is_string($proforma_num_of_copies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proforma_num_of_copies, true), gettype($proforma_num_of_copies)), __LINE__);
        }
        $this->proforma_num_of_copies = $proforma_num_of_copies;
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
     * @return \Canpar\Ship\StructType\Preference
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
     * Get return_tag_allowed value
     * @return bool|null
     */
    public function getReturn_tag_allowed()
    {
        return $this->return_tag_allowed;
    }
    /**
     * Set return_tag_allowed value
     * @param bool $return_tag_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setReturn_tag_allowed($return_tag_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($return_tag_allowed) && !is_bool($return_tag_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($return_tag_allowed, true), gettype($return_tag_allowed)), __LINE__);
        }
        $this->return_tag_allowed = $return_tag_allowed;
        return $this;
    }
    /**
     * Get saturday_allowed value
     * @return bool|null
     */
    public function getSaturday_allowed()
    {
        return $this->saturday_allowed;
    }
    /**
     * Set saturday_allowed value
     * @param bool $saturday_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setSaturday_allowed($saturday_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($saturday_allowed) && !is_bool($saturday_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saturday_allowed, true), gettype($saturday_allowed)), __LINE__);
        }
        $this->saturday_allowed = $saturday_allowed;
        return $this;
    }
    /**
     * Get select_allowed value
     * @return bool|null
     */
    public function getSelect_allowed()
    {
        return $this->select_allowed;
    }
    /**
     * Set select_allowed value
     * @param bool $select_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setSelect_allowed($select_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($select_allowed) && !is_bool($select_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($select_allowed, true), gettype($select_allowed)), __LINE__);
        }
        $this->select_allowed = $select_allowed;
        return $this;
    }
    /**
     * Get select_letter_allowed value
     * @return bool|null
     */
    public function getSelect_letter_allowed()
    {
        return $this->select_letter_allowed;
    }
    /**
     * Set select_letter_allowed value
     * @param bool $select_letter_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setSelect_letter_allowed($select_letter_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($select_letter_allowed) && !is_bool($select_letter_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($select_letter_allowed, true), gettype($select_letter_allowed)), __LINE__);
        }
        $this->select_letter_allowed = $select_letter_allowed;
        return $this;
    }
    /**
     * Get select_pak_allowed value
     * @return bool|null
     */
    public function getSelect_pak_allowed()
    {
        return $this->select_pak_allowed;
    }
    /**
     * Set select_pak_allowed value
     * @param bool $select_pak_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setSelect_pak_allowed($select_pak_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($select_pak_allowed) && !is_bool($select_pak_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($select_pak_allowed, true), gettype($select_pak_allowed)), __LINE__);
        }
        $this->select_pak_allowed = $select_pak_allowed;
        return $this;
    }
    /**
     * Get select_usa_allowed value
     * @return bool|null
     */
    public function getSelect_usa_allowed()
    {
        return $this->select_usa_allowed;
    }
    /**
     * Set select_usa_allowed value
     * @param bool $select_usa_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setSelect_usa_allowed($select_usa_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($select_usa_allowed) && !is_bool($select_usa_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($select_usa_allowed, true), gettype($select_usa_allowed)), __LINE__);
        }
        $this->select_usa_allowed = $select_usa_allowed;
        return $this;
    }
    /**
     * Get select_usa_letter_allowed value
     * @return bool|null
     */
    public function getSelect_usa_letter_allowed()
    {
        return $this->select_usa_letter_allowed;
    }
    /**
     * Set select_usa_letter_allowed value
     * @param bool $select_usa_letter_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setSelect_usa_letter_allowed($select_usa_letter_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($select_usa_letter_allowed) && !is_bool($select_usa_letter_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($select_usa_letter_allowed, true), gettype($select_usa_letter_allowed)), __LINE__);
        }
        $this->select_usa_letter_allowed = $select_usa_letter_allowed;
        return $this;
    }
    /**
     * Get select_usa_pak_allowed value
     * @return bool|null
     */
    public function getSelect_usa_pak_allowed()
    {
        return $this->select_usa_pak_allowed;
    }
    /**
     * Set select_usa_pak_allowed value
     * @param bool $select_usa_pak_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setSelect_usa_pak_allowed($select_usa_pak_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($select_usa_pak_allowed) && !is_bool($select_usa_pak_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($select_usa_pak_allowed, true), gettype($select_usa_pak_allowed)), __LINE__);
        }
        $this->select_usa_pak_allowed = $select_usa_pak_allowed;
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
     * @return \Canpar\Ship\StructType\Preference
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
     * Get service_selector value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getService_selector()
    {
        return isset($this->service_selector) ? $this->service_selector : null;
    }
    /**
     * Set service_selector value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $service_selector
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setService_selector($service_selector = null)
    {
        // validation for constraint: string
        if (!is_null($service_selector) && !is_string($service_selector)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_selector, true), gettype($service_selector)), __LINE__);
        }
        if (is_null($service_selector) || (is_array($service_selector) && empty($service_selector))) {
            unset($this->service_selector);
        } else {
            $this->service_selector = $service_selector;
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
     * @return \Canpar\Ship\StructType\Preference
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
     * Get ten_am_allowed value
     * @return bool|null
     */
    public function getTen_am_allowed()
    {
        return $this->ten_am_allowed;
    }
    /**
     * Set ten_am_allowed value
     * @param bool $ten_am_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setTen_am_allowed($ten_am_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($ten_am_allowed) && !is_bool($ten_am_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ten_am_allowed, true), gettype($ten_am_allowed)), __LINE__);
        }
        $this->ten_am_allowed = $ten_am_allowed;
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
     * @return \Canpar\Ship\StructType\Preference
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
     * Get usa_allowed value
     * @return bool|null
     */
    public function getUsa_allowed()
    {
        return $this->usa_allowed;
    }
    /**
     * Set usa_allowed value
     * @param bool $usa_allowed
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setUsa_allowed($usa_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($usa_allowed) && !is_bool($usa_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($usa_allowed, true), gettype($usa_allowed)), __LINE__);
        }
        $this->usa_allowed = $usa_allowed;
        return $this;
    }
    /**
     * Get use_alternative_pickup_address value
     * @return bool|null
     */
    public function getUse_alternative_pickup_address()
    {
        return $this->use_alternative_pickup_address;
    }
    /**
     * Set use_alternative_pickup_address value
     * @param bool $use_alternative_pickup_address
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setUse_alternative_pickup_address($use_alternative_pickup_address = null)
    {
        // validation for constraint: boolean
        if (!is_null($use_alternative_pickup_address) && !is_bool($use_alternative_pickup_address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($use_alternative_pickup_address, true), gettype($use_alternative_pickup_address)), __LINE__);
        }
        $this->use_alternative_pickup_address = $use_alternative_pickup_address;
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
     * @return \Canpar\Ship\StructType\Preference
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
     * Get xc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getXc()
    {
        return isset($this->xc) ? $this->xc : null;
    }
    /**
     * Set xc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $xc
     * @return \Canpar\Ship\StructType\Preference
     */
    public function setXc($xc = null)
    {
        // validation for constraint: string
        if (!is_null($xc) && !is_string($xc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xc, true), gettype($xc)), __LINE__);
        }
        if (is_null($xc) || (is_array($xc) && empty($xc))) {
            unset($this->xc);
        } else {
            $this->xc = $xc;
        }
        return $this;
    }
}
