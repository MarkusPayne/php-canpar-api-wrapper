<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentInfo StructType
 * @subpackage Structs
 */
class PaymentInfo extends AbstractStructBase
{
    /**
     * The authorization_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $authorization_num;
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
     * Constructor method for PaymentInfo
     * @uses PaymentInfo::setAuthorization_num()
     * @uses PaymentInfo::setId()
     * @uses PaymentInfo::setInserted_on()
     * @uses PaymentInfo::setType()
     * @uses PaymentInfo::setUpdated_on()
     * @param string $authorization_num
     * @param int $id
     * @param string $inserted_on
     * @param string $type
     * @param string $updated_on
     */
    public function __construct($authorization_num = null, $id = null, $inserted_on = null, $type = null, $updated_on = null)
    {
        $this
            ->setAuthorization_num($authorization_num)
            ->setId($id)
            ->setInserted_on($inserted_on)
            ->setType($type)
            ->setUpdated_on($updated_on);
    }
    /**
     * Get authorization_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuthorization_num()
    {
        return isset($this->authorization_num) ? $this->authorization_num : null;
    }
    /**
     * Set authorization_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $authorization_num
     * @return \Canpar\Ship\StructType\PaymentInfo
     */
    public function setAuthorization_num($authorization_num = null)
    {
        // validation for constraint: string
        if (!is_null($authorization_num) && !is_string($authorization_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorization_num, true), gettype($authorization_num)), __LINE__);
        }
        if (is_null($authorization_num) || (is_array($authorization_num) && empty($authorization_num))) {
            unset($this->authorization_num);
        } else {
            $this->authorization_num = $authorization_num;
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
     * @return \Canpar\Ship\StructType\PaymentInfo
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
     * @return \Canpar\Ship\StructType\PaymentInfo
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
     * @return \Canpar\Ship\StructType\PaymentInfo
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
     * @return \Canpar\Ship\StructType\PaymentInfo
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
