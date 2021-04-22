<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePreferenceRq StructType
 * @subpackage Structs
 */
class DeletePreferenceRq extends AbstractStructBase
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
     * The preference_shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $preference_shipper_num;
    /**
     * The preference_user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $preference_user_id;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * Constructor method for DeletePreferenceRq
     * @uses DeletePreferenceRq::setPassword()
     * @uses DeletePreferenceRq::setPreference_shipper_num()
     * @uses DeletePreferenceRq::setPreference_user_id()
     * @uses DeletePreferenceRq::setUser_id()
     * @param string $password
     * @param string $preference_shipper_num
     * @param string $preference_user_id
     * @param string $user_id
     */
    public function __construct($password = null, $preference_shipper_num = null, $preference_user_id = null, $user_id = null)
    {
        $this
            ->setPassword($password)
            ->setPreference_shipper_num($preference_shipper_num)
            ->setPreference_user_id($preference_user_id)
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
     * @return \Canpar\Ship\StructType\DeletePreferenceRq
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
     * Get preference_shipper_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPreference_shipper_num()
    {
        return isset($this->preference_shipper_num) ? $this->preference_shipper_num : null;
    }
    /**
     * Set preference_shipper_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $preference_shipper_num
     * @return \Canpar\Ship\StructType\DeletePreferenceRq
     */
    public function setPreference_shipper_num($preference_shipper_num = null)
    {
        // validation for constraint: string
        if (!is_null($preference_shipper_num) && !is_string($preference_shipper_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preference_shipper_num, true), gettype($preference_shipper_num)), __LINE__);
        }
        if (is_null($preference_shipper_num) || (is_array($preference_shipper_num) && empty($preference_shipper_num))) {
            unset($this->preference_shipper_num);
        } else {
            $this->preference_shipper_num = $preference_shipper_num;
        }
        return $this;
    }
    /**
     * Get preference_user_id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPreference_user_id()
    {
        return isset($this->preference_user_id) ? $this->preference_user_id : null;
    }
    /**
     * Set preference_user_id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $preference_user_id
     * @return \Canpar\Ship\StructType\DeletePreferenceRq
     */
    public function setPreference_user_id($preference_user_id = null)
    {
        // validation for constraint: string
        if (!is_null($preference_user_id) && !is_string($preference_user_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preference_user_id, true), gettype($preference_user_id)), __LINE__);
        }
        if (is_null($preference_user_id) || (is_array($preference_user_id) && empty($preference_user_id))) {
            unset($this->preference_user_id);
        } else {
            $this->preference_user_id = $preference_user_id;
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
     * @return \Canpar\Ship\StructType\DeletePreferenceRq
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
