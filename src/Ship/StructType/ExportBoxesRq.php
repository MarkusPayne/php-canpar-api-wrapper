<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportBoxesRq StructType
 * @subpackage Structs
 */
class ExportBoxesRq extends AbstractStructBase
{
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipper_num;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $type;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * Constructor method for ExportBoxesRq
     * @uses ExportBoxesRq::setPassword()
     * @uses ExportBoxesRq::setShipper_num()
     * @uses ExportBoxesRq::setType()
     * @uses ExportBoxesRq::setUser_id()
     * @param string $password
     * @param string $shipper_num
     * @param int $type
     * @param string $user_id
     */
    public function __construct($password = null, $shipper_num = null, $type = null, $user_id = null)
    {
        $this
            ->setPassword($password)
            ->setShipper_num($shipper_num)
            ->setType($type)
            ->setUser_id($user_id);
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
     * @return \Canpar\Ship\StructType\ExportBoxesRq
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
     * @return \Canpar\Ship\StructType\ExportBoxesRq
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
     * Get type value
     * @return int|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Canpar\Ship\StructType\ExportBoxesRq
     */
    public function setType($type = null)
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
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
     * @return \Canpar\Ship\StructType\ExportBoxesRq
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