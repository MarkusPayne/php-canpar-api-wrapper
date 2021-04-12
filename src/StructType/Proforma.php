<?php

namespace Canpar\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Proforma StructType
 * @subpackage Structs
 */
class Proforma extends AbstractStructBase
{
    /**
     * The broker_address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\Address
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
     * The currency_of_declared_value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $currency_of_declared_value;
    /**
     * The extension
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $extension;
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
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The permit_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $permit_num;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $phone;
    /**
     * The proforma_items
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\ProformaItem[]
     */
    public $proforma_items;
    /**
     * The reason_for_export
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $reason_for_export;
    /**
     * The reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $reference;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The updated_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $updated_on;
    /**
     * Constructor method for Proforma
     * @uses Proforma::setBroker_address()
     * @uses Proforma::setBusiness_num()
     * @uses Proforma::setCurrency_of_declared_value()
     * @uses Proforma::setExtension()
     * @uses Proforma::setId()
     * @uses Proforma::setInserted_on()
     * @uses Proforma::setName()
     * @uses Proforma::setPermit_num()
     * @uses Proforma::setPhone()
     * @uses Proforma::setProforma_items()
     * @uses Proforma::setReason_for_export()
     * @uses Proforma::setReference()
     * @uses Proforma::setStatus()
     * @uses Proforma::setUpdated_on()
     * @param \Canpar\StructType\Address $broker_address
     * @param string $business_num
     * @param string $currency_of_declared_value
     * @param string $extension
     * @param int $id
     * @param string $inserted_on
     * @param string $name
     * @param string $permit_num
     * @param string $phone
     * @param \Canpar\StructType\ProformaItem[] $proforma_items
     * @param string $reason_for_export
     * @param string $reference
     * @param string $status
     * @param string $updated_on
     */
    public function __construct(\Canpar\StructType\Address $broker_address = null, $business_num = null, $currency_of_declared_value = null, $extension = null, $id = null, $inserted_on = null, $name = null, $permit_num = null, $phone = null, array $proforma_items = array(), $reason_for_export = null, $reference = null, $status = null, $updated_on = null)
    {
        $this
            ->setBroker_address($broker_address)
            ->setBusiness_num($business_num)
            ->setCurrency_of_declared_value($currency_of_declared_value)
            ->setExtension($extension)
            ->setId($id)
            ->setInserted_on($inserted_on)
            ->setName($name)
            ->setPermit_num($permit_num)
            ->setPhone($phone)
            ->setProforma_items($proforma_items)
            ->setReason_for_export($reason_for_export)
            ->setReference($reference)
            ->setStatus($status)
            ->setUpdated_on($updated_on);
    }
    /**
     * Get broker_address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\Address|null
     */
    public function getBroker_address()
    {
        return isset($this->broker_address) ? $this->broker_address : null;
    }
    /**
     * Set broker_address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\StructType\Address $broker_address
     * @return \Canpar\StructType\Proforma
     */
    public function setBroker_address(\Canpar\StructType\Address $broker_address = null)
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
     * @return \Canpar\StructType\Proforma
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
     * Get currency_of_declared_value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrency_of_declared_value()
    {
        return isset($this->currency_of_declared_value) ? $this->currency_of_declared_value : null;
    }
    /**
     * Set currency_of_declared_value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currency_of_declared_value
     * @return \Canpar\StructType\Proforma
     */
    public function setCurrency_of_declared_value($currency_of_declared_value = null)
    {
        // validation for constraint: string
        if (!is_null($currency_of_declared_value) && !is_string($currency_of_declared_value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency_of_declared_value, true), gettype($currency_of_declared_value)), __LINE__);
        }
        if (is_null($currency_of_declared_value) || (is_array($currency_of_declared_value) && empty($currency_of_declared_value))) {
            unset($this->currency_of_declared_value);
        } else {
            $this->currency_of_declared_value = $currency_of_declared_value;
        }
        return $this;
    }
    /**
     * Get extension value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExtension()
    {
        return isset($this->extension) ? $this->extension : null;
    }
    /**
     * Set extension value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $extension
     * @return \Canpar\StructType\Proforma
     */
    public function setExtension($extension = null)
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extension, true), gettype($extension)), __LINE__);
        }
        if (is_null($extension) || (is_array($extension) && empty($extension))) {
            unset($this->extension);
        } else {
            $this->extension = $extension;
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
     * @return \Canpar\StructType\Proforma
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
     * @return \Canpar\StructType\Proforma
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
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Canpar\StructType\Proforma
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
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
     * @return \Canpar\StructType\Proforma
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
     * Get phone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhone()
    {
        return isset($this->phone) ? $this->phone : null;
    }
    /**
     * Set phone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phone
     * @return \Canpar\StructType\Proforma
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        if (is_null($phone) || (is_array($phone) && empty($phone))) {
            unset($this->phone);
        } else {
            $this->phone = $phone;
        }
        return $this;
    }
    /**
     * Get proforma_items value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\ProformaItem[]|null
     */
    public function getProforma_items()
    {
        return isset($this->proforma_items) ? $this->proforma_items : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProforma_items method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProforma_items method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProforma_itemsForArrayConstraintsFromSetProforma_items(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $proformaProforma_itemsItem) {
            // validation for constraint: itemType
            if (!$proformaProforma_itemsItem instanceof \Canpar\StructType\ProformaItem) {
                $invalidValues[] = is_object($proformaProforma_itemsItem) ? get_class($proformaProforma_itemsItem) : sprintf('%s(%s)', gettype($proformaProforma_itemsItem), var_export($proformaProforma_itemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The proforma_items property can only contain items of type \Canpar\StructType\ProformaItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set proforma_items value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\StructType\ProformaItem[] $proforma_items
     * @return \Canpar\StructType\Proforma
     */
    public function setProforma_items(array $proforma_items = array())
    {
        // validation for constraint: array
        if ('' !== ($proforma_itemsArrayErrorMessage = self::validateProforma_itemsForArrayConstraintsFromSetProforma_items($proforma_items))) {
            throw new \InvalidArgumentException($proforma_itemsArrayErrorMessage, __LINE__);
        }
        if (is_null($proforma_items) || (is_array($proforma_items) && empty($proforma_items))) {
            unset($this->proforma_items);
        } else {
            $this->proforma_items = $proforma_items;
        }
        return $this;
    }
    /**
     * Add item to proforma_items value
     * @throws \InvalidArgumentException
     * @param \Canpar\StructType\ProformaItem $item
     * @return \Canpar\StructType\Proforma
     */
    public function addToProforma_items(\Canpar\StructType\ProformaItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\StructType\ProformaItem) {
            throw new \InvalidArgumentException(sprintf('The proforma_items property can only contain items of type \Canpar\StructType\ProformaItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->proforma_items[] = $item;
        return $this;
    }
    /**
     * Get reason_for_export value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReason_for_export()
    {
        return isset($this->reason_for_export) ? $this->reason_for_export : null;
    }
    /**
     * Set reason_for_export value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $reason_for_export
     * @return \Canpar\StructType\Proforma
     */
    public function setReason_for_export($reason_for_export = null)
    {
        // validation for constraint: string
        if (!is_null($reason_for_export) && !is_string($reason_for_export)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason_for_export, true), gettype($reason_for_export)), __LINE__);
        }
        if (is_null($reason_for_export) || (is_array($reason_for_export) && empty($reason_for_export))) {
            unset($this->reason_for_export);
        } else {
            $this->reason_for_export = $reason_for_export;
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
     * @return \Canpar\StructType\Proforma
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
     * Get status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }
    /**
     * Set status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $status
     * @return \Canpar\StructType\Proforma
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->status);
        } else {
            $this->status = $status;
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
     * @return \Canpar\StructType\Proforma
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
