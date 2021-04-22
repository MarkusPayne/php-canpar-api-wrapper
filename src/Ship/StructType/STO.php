<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for STO StructType
 * @subpackage Structs
 */
class STO extends AbstractStructBase
{
    /**
     * The delimited_symbol
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $delimited_symbol;
    /**
     * The detailed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $detailed;
    /**
     * The ignore_header
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ignore_header;
    /**
     * The inserted_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $inserted_on;
    /**
     * The last_imported_file
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $last_imported_file;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipper_num;
    /**
     * The sto_items
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\STOItem[]
     */
    public $sto_items;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The updated_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $updated_on;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $version;
    /**
     * Constructor method for STO
     * @uses STO::setDelimited_symbol()
     * @uses STO::setDetailed()
     * @uses STO::setIgnore_header()
     * @uses STO::setInserted_on()
     * @uses STO::setLast_imported_file()
     * @uses STO::setName()
     * @uses STO::setShipper_num()
     * @uses STO::setSto_items()
     * @uses STO::setType()
     * @uses STO::setUpdated_on()
     * @uses STO::setVersion()
     * @param string $delimited_symbol
     * @param bool $detailed
     * @param bool $ignore_header
     * @param string $inserted_on
     * @param string $last_imported_file
     * @param string $name
     * @param string $shipper_num
     * @param \Canpar\Ship\StructType\STOItem[] $sto_items
     * @param string $type
     * @param string $updated_on
     * @param string $version
     */
    public function __construct($delimited_symbol = null, $detailed = null, $ignore_header = null, $inserted_on = null, $last_imported_file = null, $name = null, $shipper_num = null, array $sto_items = array(), $type = null, $updated_on = null, $version = null)
    {
        $this
            ->setDelimited_symbol($delimited_symbol)
            ->setDetailed($detailed)
            ->setIgnore_header($ignore_header)
            ->setInserted_on($inserted_on)
            ->setLast_imported_file($last_imported_file)
            ->setName($name)
            ->setShipper_num($shipper_num)
            ->setSto_items($sto_items)
            ->setType($type)
            ->setUpdated_on($updated_on)
            ->setVersion($version);
    }
    /**
     * Get delimited_symbol value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDelimited_symbol()
    {
        return isset($this->delimited_symbol) ? $this->delimited_symbol : null;
    }
    /**
     * Set delimited_symbol value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $delimited_symbol
     * @return \Canpar\Ship\StructType\STO
     */
    public function setDelimited_symbol($delimited_symbol = null)
    {
        // validation for constraint: string
        if (!is_null($delimited_symbol) && !is_string($delimited_symbol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delimited_symbol, true), gettype($delimited_symbol)), __LINE__);
        }
        if (is_null($delimited_symbol) || (is_array($delimited_symbol) && empty($delimited_symbol))) {
            unset($this->delimited_symbol);
        } else {
            $this->delimited_symbol = $delimited_symbol;
        }
        return $this;
    }
    /**
     * Get detailed value
     * @return bool|null
     */
    public function getDetailed()
    {
        return $this->detailed;
    }
    /**
     * Set detailed value
     * @param bool $detailed
     * @return \Canpar\Ship\StructType\STO
     */
    public function setDetailed($detailed = null)
    {
        // validation for constraint: boolean
        if (!is_null($detailed) && !is_bool($detailed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($detailed, true), gettype($detailed)), __LINE__);
        }
        $this->detailed = $detailed;
        return $this;
    }
    /**
     * Get ignore_header value
     * @return bool|null
     */
    public function getIgnore_header()
    {
        return $this->ignore_header;
    }
    /**
     * Set ignore_header value
     * @param bool $ignore_header
     * @return \Canpar\Ship\StructType\STO
     */
    public function setIgnore_header($ignore_header = null)
    {
        // validation for constraint: boolean
        if (!is_null($ignore_header) && !is_bool($ignore_header)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignore_header, true), gettype($ignore_header)), __LINE__);
        }
        $this->ignore_header = $ignore_header;
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
     * @return \Canpar\Ship\StructType\STO
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
     * Get last_imported_file value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLast_imported_file()
    {
        return isset($this->last_imported_file) ? $this->last_imported_file : null;
    }
    /**
     * Set last_imported_file value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $last_imported_file
     * @return \Canpar\Ship\StructType\STO
     */
    public function setLast_imported_file($last_imported_file = null)
    {
        // validation for constraint: string
        if (!is_null($last_imported_file) && !is_string($last_imported_file)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_imported_file, true), gettype($last_imported_file)), __LINE__);
        }
        if (is_null($last_imported_file) || (is_array($last_imported_file) && empty($last_imported_file))) {
            unset($this->last_imported_file);
        } else {
            $this->last_imported_file = $last_imported_file;
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
     * @return \Canpar\Ship\StructType\STO
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
     * @return \Canpar\Ship\StructType\STO
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
     * Get sto_items value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\STOItem[]|null
     */
    public function getSto_items()
    {
        return isset($this->sto_items) ? $this->sto_items : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSto_items method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSto_items method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSto_itemsForArrayConstraintsFromSetSto_items(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sTOSto_itemsItem) {
            // validation for constraint: itemType
            if (!$sTOSto_itemsItem instanceof \Canpar\Ship\StructType\STOItem) {
                $invalidValues[] = is_object($sTOSto_itemsItem) ? get_class($sTOSto_itemsItem) : sprintf('%s(%s)', gettype($sTOSto_itemsItem), var_export($sTOSto_itemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sto_items property can only contain items of type \Canpar\Ship\StructType\STOItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set sto_items value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\STOItem[] $sto_items
     * @return \Canpar\Ship\StructType\STO
     */
    public function setSto_items(array $sto_items = array())
    {
        // validation for constraint: array
        if ('' !== ($sto_itemsArrayErrorMessage = self::validateSto_itemsForArrayConstraintsFromSetSto_items($sto_items))) {
            throw new \InvalidArgumentException($sto_itemsArrayErrorMessage, __LINE__);
        }
        if (is_null($sto_items) || (is_array($sto_items) && empty($sto_items))) {
            unset($this->sto_items);
        } else {
            $this->sto_items = $sto_items;
        }
        return $this;
    }
    /**
     * Add item to sto_items value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\STOItem $item
     * @return \Canpar\Ship\StructType\STO
     */
    public function addToSto_items(\Canpar\Ship\StructType\STOItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\STOItem) {
            throw new \InvalidArgumentException(sprintf('The sto_items property can only contain items of type \Canpar\Ship\StructType\STOItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sto_items[] = $item;
        return $this;
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \Canpar\Ship\StructType\STO
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
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
     * @return \Canpar\Ship\StructType\STO
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
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Canpar\Ship\StructType\STO
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
}
