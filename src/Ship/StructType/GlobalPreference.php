<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GlobalPreference StructType
 * @subpackage Structs
 */
class GlobalPreference extends AbstractStructBase
{
    /**
     * The address_book_save_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $address_book_save_allowed;
    /**
     * The default_shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $default_shipper_num;
    /**
     * The inserted_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $inserted_on;
    /**
     * The lock_shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $lock_shipper_num;
    /**
     * The preference_save_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $preference_save_allowed;
    /**
     * The prompt_dropoff
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $prompt_dropoff;
    /**
     * The ship_to_address_book_address_only
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ship_to_address_book_address_only;
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
     * Constructor method for GlobalPreference
     * @uses GlobalPreference::setAddress_book_save_allowed()
     * @uses GlobalPreference::setDefault_shipper_num()
     * @uses GlobalPreference::setInserted_on()
     * @uses GlobalPreference::setLock_shipper_num()
     * @uses GlobalPreference::setPreference_save_allowed()
     * @uses GlobalPreference::setPrompt_dropoff()
     * @uses GlobalPreference::setShip_to_address_book_address_only()
     * @uses GlobalPreference::setUpdated_on()
     * @uses GlobalPreference::setUser_id()
     * @param bool $address_book_save_allowed
     * @param string $default_shipper_num
     * @param string $inserted_on
     * @param bool $lock_shipper_num
     * @param bool $preference_save_allowed
     * @param bool $prompt_dropoff
     * @param bool $ship_to_address_book_address_only
     * @param string $updated_on
     * @param string $user_id
     */
    public function __construct($address_book_save_allowed = null, $default_shipper_num = null, $inserted_on = null, $lock_shipper_num = null, $preference_save_allowed = null, $prompt_dropoff = null, $ship_to_address_book_address_only = null, $updated_on = null, $user_id = null)
    {
        $this
            ->setAddress_book_save_allowed($address_book_save_allowed)
            ->setDefault_shipper_num($default_shipper_num)
            ->setInserted_on($inserted_on)
            ->setLock_shipper_num($lock_shipper_num)
            ->setPreference_save_allowed($preference_save_allowed)
            ->setPrompt_dropoff($prompt_dropoff)
            ->setShip_to_address_book_address_only($ship_to_address_book_address_only)
            ->setUpdated_on($updated_on)
            ->setUser_id($user_id);
    }
    /**
     * Get address_book_save_allowed value
     * @return bool|null
     */
    public function getAddress_book_save_allowed()
    {
        return $this->address_book_save_allowed;
    }
    /**
     * Set address_book_save_allowed value
     * @param bool $address_book_save_allowed
     * @return \Canpar\Ship\StructType\GlobalPreference
     */
    public function setAddress_book_save_allowed($address_book_save_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($address_book_save_allowed) && !is_bool($address_book_save_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($address_book_save_allowed, true), gettype($address_book_save_allowed)), __LINE__);
        }
        $this->address_book_save_allowed = $address_book_save_allowed;
        return $this;
    }
    /**
     * Get default_shipper_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefault_shipper_num()
    {
        return isset($this->default_shipper_num) ? $this->default_shipper_num : null;
    }
    /**
     * Set default_shipper_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $default_shipper_num
     * @return \Canpar\Ship\StructType\GlobalPreference
     */
    public function setDefault_shipper_num($default_shipper_num = null)
    {
        // validation for constraint: string
        if (!is_null($default_shipper_num) && !is_string($default_shipper_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($default_shipper_num, true), gettype($default_shipper_num)), __LINE__);
        }
        if (is_null($default_shipper_num) || (is_array($default_shipper_num) && empty($default_shipper_num))) {
            unset($this->default_shipper_num);
        } else {
            $this->default_shipper_num = $default_shipper_num;
        }
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
     * @return \Canpar\Ship\StructType\GlobalPreference
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
     * Get lock_shipper_num value
     * @return bool|null
     */
    public function getLock_shipper_num()
    {
        return $this->lock_shipper_num;
    }
    /**
     * Set lock_shipper_num value
     * @param bool $lock_shipper_num
     * @return \Canpar\Ship\StructType\GlobalPreference
     */
    public function setLock_shipper_num($lock_shipper_num = null)
    {
        // validation for constraint: boolean
        if (!is_null($lock_shipper_num) && !is_bool($lock_shipper_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lock_shipper_num, true), gettype($lock_shipper_num)), __LINE__);
        }
        $this->lock_shipper_num = $lock_shipper_num;
        return $this;
    }
    /**
     * Get preference_save_allowed value
     * @return bool|null
     */
    public function getPreference_save_allowed()
    {
        return $this->preference_save_allowed;
    }
    /**
     * Set preference_save_allowed value
     * @param bool $preference_save_allowed
     * @return \Canpar\Ship\StructType\GlobalPreference
     */
    public function setPreference_save_allowed($preference_save_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($preference_save_allowed) && !is_bool($preference_save_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preference_save_allowed, true), gettype($preference_save_allowed)), __LINE__);
        }
        $this->preference_save_allowed = $preference_save_allowed;
        return $this;
    }
    /**
     * Get prompt_dropoff value
     * @return bool|null
     */
    public function getPrompt_dropoff()
    {
        return $this->prompt_dropoff;
    }
    /**
     * Set prompt_dropoff value
     * @param bool $prompt_dropoff
     * @return \Canpar\Ship\StructType\GlobalPreference
     */
    public function setPrompt_dropoff($prompt_dropoff = null)
    {
        // validation for constraint: boolean
        if (!is_null($prompt_dropoff) && !is_bool($prompt_dropoff)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prompt_dropoff, true), gettype($prompt_dropoff)), __LINE__);
        }
        $this->prompt_dropoff = $prompt_dropoff;
        return $this;
    }
    /**
     * Get ship_to_address_book_address_only value
     * @return bool|null
     */
    public function getShip_to_address_book_address_only()
    {
        return $this->ship_to_address_book_address_only;
    }
    /**
     * Set ship_to_address_book_address_only value
     * @param bool $ship_to_address_book_address_only
     * @return \Canpar\Ship\StructType\GlobalPreference
     */
    public function setShip_to_address_book_address_only($ship_to_address_book_address_only = null)
    {
        // validation for constraint: boolean
        if (!is_null($ship_to_address_book_address_only) && !is_bool($ship_to_address_book_address_only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ship_to_address_book_address_only, true), gettype($ship_to_address_book_address_only)), __LINE__);
        }
        $this->ship_to_address_book_address_only = $ship_to_address_book_address_only;
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
     * @return \Canpar\Ship\StructType\GlobalPreference
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
     * @return \Canpar\Ship\StructType\GlobalPreference
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
