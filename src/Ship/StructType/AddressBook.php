<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressBook StructType
 * @subpackage Structs
 */
class AddressBook extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Address
     */
    public $address;
    /**
     * The alternative_reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $alternative_reference;
    /**
     * The cost_centre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $cost_centre;
    /**
     * The default_service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $default_service;
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
     * The reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $reference;
    /**
     * The send_email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $send_email;
    /**
     * The shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipper_num;
    /**
     * The updated_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $updated_on;
    /**
     * Constructor method for AddressBook
     * @uses AddressBook::setAddress()
     * @uses AddressBook::setAlternative_reference()
     * @uses AddressBook::setCost_centre()
     * @uses AddressBook::setDefault_service()
     * @uses AddressBook::setId()
     * @uses AddressBook::setInserted_on()
     * @uses AddressBook::setReference()
     * @uses AddressBook::setSend_email()
     * @uses AddressBook::setShipper_num()
     * @uses AddressBook::setUpdated_on()
     * @param \Canpar\Ship\StructType\Address $address
     * @param string $alternative_reference
     * @param string $cost_centre
     * @param string $default_service
     * @param int $id
     * @param string $inserted_on
     * @param string $reference
     * @param bool $send_email
     * @param string $shipper_num
     * @param string $updated_on
     */
    public function __construct(\Canpar\Ship\StructType\Address $address = null, $alternative_reference = null, $cost_centre = null, $default_service = null, $id = null, $inserted_on = null, $reference = null, $send_email = null, $shipper_num = null, $updated_on = null)
    {
        $this
            ->setAddress($address)
            ->setAlternative_reference($alternative_reference)
            ->setCost_centre($cost_centre)
            ->setDefault_service($default_service)
            ->setId($id)
            ->setInserted_on($inserted_on)
            ->setReference($reference)
            ->setSend_email($send_email)
            ->setShipper_num($shipper_num)
            ->setUpdated_on($updated_on);
    }
    /**
     * Get address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Address|null
     */
    public function getAddress()
    {
        return isset($this->address) ? $this->address : null;
    }
    /**
     * Set address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\Address $address
     * @return \Canpar\Ship\StructType\AddressBook
     */
    public function setAddress(\Canpar\Ship\StructType\Address $address = null)
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
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
     * @return \Canpar\Ship\StructType\AddressBook
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
     * @return \Canpar\Ship\StructType\AddressBook
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
     * Get default_service value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefault_service()
    {
        return isset($this->default_service) ? $this->default_service : null;
    }
    /**
     * Set default_service value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $default_service
     * @return \Canpar\Ship\StructType\AddressBook
     */
    public function setDefault_service($default_service = null)
    {
        // validation for constraint: string
        if (!is_null($default_service) && !is_string($default_service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($default_service, true), gettype($default_service)), __LINE__);
        }
        if (is_null($default_service) || (is_array($default_service) && empty($default_service))) {
            unset($this->default_service);
        } else {
            $this->default_service = $default_service;
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
     * @return \Canpar\Ship\StructType\AddressBook
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
     * @return \Canpar\Ship\StructType\AddressBook
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
     * @return \Canpar\Ship\StructType\AddressBook
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
     * Get send_email value
     * @return bool|null
     */
    public function getSend_email()
    {
        return $this->send_email;
    }
    /**
     * Set send_email value
     * @param bool $send_email
     * @return \Canpar\Ship\StructType\AddressBook
     */
    public function setSend_email($send_email = null)
    {
        // validation for constraint: boolean
        if (!is_null($send_email) && !is_bool($send_email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($send_email, true), gettype($send_email)), __LINE__);
        }
        $this->send_email = $send_email;
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
     * @return \Canpar\Ship\StructType\AddressBook
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
     * @return \Canpar\Ship\StructType\AddressBook
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
}
