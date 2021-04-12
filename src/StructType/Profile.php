<?php

namespace Canpar\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Profile StructType
 * @subpackage Structs
 */
class Profile extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\Address
     */
    public $address;
    /**
     * The blind_manifest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $blind_manifest;
    /**
     * The collect_service_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $collect_service_allowed;
    /**
     * The consolidation_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $consolidation_type;
    /**
     * The credit_cancelled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $credit_cancelled;
    /**
     * The manifest_processing_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $manifest_processing_code;
    /**
     * The otc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $otc;
    /**
     * The pickup_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $pickup_allowed;
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\Service[]
     */
    public $services;
    /**
     * The shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipper_num;
    /**
     * The validate_store_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $validate_store_num;
    /**
     * The weight_unit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $weight_unit;
    /**
     * Constructor method for Profile
     * @uses Profile::setAddress()
     * @uses Profile::setBlind_manifest()
     * @uses Profile::setCollect_service_allowed()
     * @uses Profile::setConsolidation_type()
     * @uses Profile::setCredit_cancelled()
     * @uses Profile::setManifest_processing_code()
     * @uses Profile::setOtc()
     * @uses Profile::setPickup_allowed()
     * @uses Profile::setServices()
     * @uses Profile::setShipper_num()
     * @uses Profile::setValidate_store_num()
     * @uses Profile::setWeight_unit()
     * @param \Canpar\StructType\Address $address
     * @param bool $blind_manifest
     * @param bool $collect_service_allowed
     * @param string $consolidation_type
     * @param bool $credit_cancelled
     * @param string $manifest_processing_code
     * @param bool $otc
     * @param bool $pickup_allowed
     * @param \Canpar\StructType\Service[] $services
     * @param string $shipper_num
     * @param bool $validate_store_num
     * @param string $weight_unit
     */
    public function __construct(\Canpar\StructType\Address $address = null, $blind_manifest = null, $collect_service_allowed = null, $consolidation_type = null, $credit_cancelled = null, $manifest_processing_code = null, $otc = null, $pickup_allowed = null, array $services = array(), $shipper_num = null, $validate_store_num = null, $weight_unit = null)
    {
        $this
            ->setAddress($address)
            ->setBlind_manifest($blind_manifest)
            ->setCollect_service_allowed($collect_service_allowed)
            ->setConsolidation_type($consolidation_type)
            ->setCredit_cancelled($credit_cancelled)
            ->setManifest_processing_code($manifest_processing_code)
            ->setOtc($otc)
            ->setPickup_allowed($pickup_allowed)
            ->setServices($services)
            ->setShipper_num($shipper_num)
            ->setValidate_store_num($validate_store_num)
            ->setWeight_unit($weight_unit);
    }
    /**
     * Get address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\Address|null
     */
    public function getAddress()
    {
        return isset($this->address) ? $this->address : null;
    }
    /**
     * Set address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\StructType\Address $address
     * @return \Canpar\StructType\Profile
     */
    public function setAddress(\Canpar\StructType\Address $address = null)
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
        }
        return $this;
    }
    /**
     * Get blind_manifest value
     * @return bool|null
     */
    public function getBlind_manifest()
    {
        return $this->blind_manifest;
    }
    /**
     * Set blind_manifest value
     * @param bool $blind_manifest
     * @return \Canpar\StructType\Profile
     */
    public function setBlind_manifest($blind_manifest = null)
    {
        // validation for constraint: boolean
        if (!is_null($blind_manifest) && !is_bool($blind_manifest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($blind_manifest, true), gettype($blind_manifest)), __LINE__);
        }
        $this->blind_manifest = $blind_manifest;
        return $this;
    }
    /**
     * Get collect_service_allowed value
     * @return bool|null
     */
    public function getCollect_service_allowed()
    {
        return $this->collect_service_allowed;
    }
    /**
     * Set collect_service_allowed value
     * @param bool $collect_service_allowed
     * @return \Canpar\StructType\Profile
     */
    public function setCollect_service_allowed($collect_service_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($collect_service_allowed) && !is_bool($collect_service_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collect_service_allowed, true), gettype($collect_service_allowed)), __LINE__);
        }
        $this->collect_service_allowed = $collect_service_allowed;
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
     * @return \Canpar\StructType\Profile
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
     * Get credit_cancelled value
     * @return bool|null
     */
    public function getCredit_cancelled()
    {
        return $this->credit_cancelled;
    }
    /**
     * Set credit_cancelled value
     * @param bool $credit_cancelled
     * @return \Canpar\StructType\Profile
     */
    public function setCredit_cancelled($credit_cancelled = null)
    {
        // validation for constraint: boolean
        if (!is_null($credit_cancelled) && !is_bool($credit_cancelled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($credit_cancelled, true), gettype($credit_cancelled)), __LINE__);
        }
        $this->credit_cancelled = $credit_cancelled;
        return $this;
    }
    /**
     * Get manifest_processing_code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getManifest_processing_code()
    {
        return isset($this->manifest_processing_code) ? $this->manifest_processing_code : null;
    }
    /**
     * Set manifest_processing_code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $manifest_processing_code
     * @return \Canpar\StructType\Profile
     */
    public function setManifest_processing_code($manifest_processing_code = null)
    {
        // validation for constraint: string
        if (!is_null($manifest_processing_code) && !is_string($manifest_processing_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manifest_processing_code, true), gettype($manifest_processing_code)), __LINE__);
        }
        if (is_null($manifest_processing_code) || (is_array($manifest_processing_code) && empty($manifest_processing_code))) {
            unset($this->manifest_processing_code);
        } else {
            $this->manifest_processing_code = $manifest_processing_code;
        }
        return $this;
    }
    /**
     * Get otc value
     * @return bool|null
     */
    public function getOtc()
    {
        return $this->otc;
    }
    /**
     * Set otc value
     * @param bool $otc
     * @return \Canpar\StructType\Profile
     */
    public function setOtc($otc = null)
    {
        // validation for constraint: boolean
        if (!is_null($otc) && !is_bool($otc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($otc, true), gettype($otc)), __LINE__);
        }
        $this->otc = $otc;
        return $this;
    }
    /**
     * Get pickup_allowed value
     * @return bool|null
     */
    public function getPickup_allowed()
    {
        return $this->pickup_allowed;
    }
    /**
     * Set pickup_allowed value
     * @param bool $pickup_allowed
     * @return \Canpar\StructType\Profile
     */
    public function setPickup_allowed($pickup_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($pickup_allowed) && !is_bool($pickup_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pickup_allowed, true), gettype($pickup_allowed)), __LINE__);
        }
        $this->pickup_allowed = $pickup_allowed;
        return $this;
    }
    /**
     * Get services value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\Service[]|null
     */
    public function getServices()
    {
        return isset($this->services) ? $this->services : null;
    }
    /**
     * This method is responsible for validating the values passed to the setServices method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServices method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServicesForArrayConstraintsFromSetServices(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $profileServicesItem) {
            // validation for constraint: itemType
            if (!$profileServicesItem instanceof \Canpar\StructType\Service) {
                $invalidValues[] = is_object($profileServicesItem) ? get_class($profileServicesItem) : sprintf('%s(%s)', gettype($profileServicesItem), var_export($profileServicesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The services property can only contain items of type \Canpar\StructType\Service, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set services value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\StructType\Service[] $services
     * @return \Canpar\StructType\Profile
     */
    public function setServices(array $services = array())
    {
        // validation for constraint: array
        if ('' !== ($servicesArrayErrorMessage = self::validateServicesForArrayConstraintsFromSetServices($services))) {
            throw new \InvalidArgumentException($servicesArrayErrorMessage, __LINE__);
        }
        if (is_null($services) || (is_array($services) && empty($services))) {
            unset($this->services);
        } else {
            $this->services = $services;
        }
        return $this;
    }
    /**
     * Add item to services value
     * @throws \InvalidArgumentException
     * @param \Canpar\StructType\Service $item
     * @return \Canpar\StructType\Profile
     */
    public function addToServices(\Canpar\StructType\Service $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\StructType\Service) {
            throw new \InvalidArgumentException(sprintf('The services property can only contain items of type \Canpar\StructType\Service, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->services[] = $item;
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
     * @return \Canpar\StructType\Profile
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
     * Get validate_store_num value
     * @return bool|null
     */
    public function getValidate_store_num()
    {
        return $this->validate_store_num;
    }
    /**
     * Set validate_store_num value
     * @param bool $validate_store_num
     * @return \Canpar\StructType\Profile
     */
    public function setValidate_store_num($validate_store_num = null)
    {
        // validation for constraint: boolean
        if (!is_null($validate_store_num) && !is_bool($validate_store_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validate_store_num, true), gettype($validate_store_num)), __LINE__);
        }
        $this->validate_store_num = $validate_store_num;
        return $this;
    }
    /**
     * Get weight_unit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWeight_unit()
    {
        return isset($this->weight_unit) ? $this->weight_unit : null;
    }
    /**
     * Set weight_unit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $weight_unit
     * @return \Canpar\StructType\Profile
     */
    public function setWeight_unit($weight_unit = null)
    {
        // validation for constraint: string
        if (!is_null($weight_unit) && !is_string($weight_unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight_unit, true), gettype($weight_unit)), __LINE__);
        }
        if (is_null($weight_unit) || (is_array($weight_unit) && empty($weight_unit))) {
            unset($this->weight_unit);
        } else {
            $this->weight_unit = $weight_unit;
        }
        return $this;
    }
}
