<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGlobalPreferenceAllUsersRq StructType
 * @subpackage Structs
 */
class SaveGlobalPreferenceAllUsersRq extends AbstractStructBase
{
    /**
     * The global_preference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\GlobalPreference
     */
    public $global_preference;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * Constructor method for SaveGlobalPreferenceAllUsersRq
     * @uses SaveGlobalPreferenceAllUsersRq::setGlobal_preference()
     * @uses SaveGlobalPreferenceAllUsersRq::setPassword()
     * @uses SaveGlobalPreferenceAllUsersRq::setUser_id()
     * @param \Canpar\Ship\StructType\GlobalPreference $global_preference
     * @param string $password
     * @param string $user_id
     */
    public function __construct(\Canpar\Ship\StructType\GlobalPreference $global_preference = null, $password = null, $user_id = null)
    {
        $this
            ->setGlobal_preference($global_preference)
            ->setPassword($password)
            ->setUser_id($user_id);
    }
    /**
     * Get global_preference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\GlobalPreference|null
     */
    public function getGlobal_preference()
    {
        return isset($this->global_preference) ? $this->global_preference : null;
    }
    /**
     * Set global_preference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\GlobalPreference $global_preference
     * @return \Canpar\Ship\StructType\SaveGlobalPreferenceAllUsersRq
     */
    public function setGlobal_preference(\Canpar\Ship\StructType\GlobalPreference $global_preference = null)
    {
        if (is_null($global_preference) || (is_array($global_preference) && empty($global_preference))) {
            unset($this->global_preference);
        } else {
            $this->global_preference = $global_preference;
        }
        return $this;
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
     * @return \Canpar\Ship\StructType\SaveGlobalPreferenceAllUsersRq
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
     * @return \Canpar\Ship\StructType\SaveGlobalPreferenceAllUsersRq
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
