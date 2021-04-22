<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for STOItem StructType
 * @subpackage Structs
 */
class STOItem extends AbstractStructBase
{
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
     * The key_name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $key_name;
    /**
     * The length
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $length;
    /**
     * The updated_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $updated_on;
    /**
     * Constructor method for STOItem
     * @uses STOItem::setId()
     * @uses STOItem::setInserted_on()
     * @uses STOItem::setKey_name()
     * @uses STOItem::setLength()
     * @uses STOItem::setUpdated_on()
     * @param int $id
     * @param string $inserted_on
     * @param string $key_name
     * @param int $length
     * @param string $updated_on
     */
    public function __construct($id = null, $inserted_on = null, $key_name = null, $length = null, $updated_on = null)
    {
        $this
            ->setId($id)
            ->setInserted_on($inserted_on)
            ->setKey_name($key_name)
            ->setLength($length)
            ->setUpdated_on($updated_on);
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
     * @return \Canpar\Ship\StructType\STOItem
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
     * @return \Canpar\Ship\StructType\STOItem
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
     * Get key_name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKey_name()
    {
        return isset($this->key_name) ? $this->key_name : null;
    }
    /**
     * Set key_name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $key_name
     * @return \Canpar\Ship\StructType\STOItem
     */
    public function setKey_name($key_name = null)
    {
        // validation for constraint: string
        if (!is_null($key_name) && !is_string($key_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key_name, true), gettype($key_name)), __LINE__);
        }
        if (is_null($key_name) || (is_array($key_name) && empty($key_name))) {
            unset($this->key_name);
        } else {
            $this->key_name = $key_name;
        }
        return $this;
    }
    /**
     * Get length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param int $length
     * @return \Canpar\Ship\StructType\STOItem
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !(is_int($length) || ctype_digit($length))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->length = $length;
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
     * @return \Canpar\Ship\StructType\STOItem
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
