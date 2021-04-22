<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCanadaPostRq StructType
 * @subpackage Structs
 */
class SearchCanadaPostRq extends AbstractStructBase
{
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The postal_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $postal_code;
    /**
     * The province
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $province;
    /**
     * The street_direction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $street_direction;
    /**
     * The street_name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $street_name;
    /**
     * The street_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $street_num;
    /**
     * The street_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $street_type;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * The validate_only
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $validate_only;
    /**
     * Constructor method for SearchCanadaPostRq
     * @uses SearchCanadaPostRq::setCity()
     * @uses SearchCanadaPostRq::setPassword()
     * @uses SearchCanadaPostRq::setPostal_code()
     * @uses SearchCanadaPostRq::setProvince()
     * @uses SearchCanadaPostRq::setStreet_direction()
     * @uses SearchCanadaPostRq::setStreet_name()
     * @uses SearchCanadaPostRq::setStreet_num()
     * @uses SearchCanadaPostRq::setStreet_type()
     * @uses SearchCanadaPostRq::setUser_id()
     * @uses SearchCanadaPostRq::setValidate_only()
     * @param string $city
     * @param string $password
     * @param string $postal_code
     * @param string $province
     * @param string $street_direction
     * @param string $street_name
     * @param string $street_num
     * @param string $street_type
     * @param string $user_id
     * @param bool $validate_only
     */
    public function __construct($city = null, $password = null, $postal_code = null, $province = null, $street_direction = null, $street_name = null, $street_num = null, $street_type = null, $user_id = null, $validate_only = null)
    {
        $this
            ->setCity($city)
            ->setPassword($password)
            ->setPostal_code($postal_code)
            ->setProvince($province)
            ->setStreet_direction($street_direction)
            ->setStreet_name($street_name)
            ->setStreet_num($street_num)
            ->setStreet_type($street_type)
            ->setUser_id($user_id)
            ->setValidate_only($validate_only);
    }
    /**
     * Get city value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity()
    {
        return isset($this->city) ? $this->city : null;
    }
    /**
     * Set city value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \Canpar\Rate\StructType\SearchCanadaPostRq
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->city);
        } else {
            $this->city = $city;
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
     * @return \Canpar\Rate\StructType\SearchCanadaPostRq
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
     * Get postal_code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostal_code()
    {
        return isset($this->postal_code) ? $this->postal_code : null;
    }
    /**
     * Set postal_code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postal_code
     * @return \Canpar\Rate\StructType\SearchCanadaPostRq
     */
    public function setPostal_code($postal_code = null)
    {
        // validation for constraint: string
        if (!is_null($postal_code) && !is_string($postal_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postal_code, true), gettype($postal_code)), __LINE__);
        }
        if (is_null($postal_code) || (is_array($postal_code) && empty($postal_code))) {
            unset($this->postal_code);
        } else {
            $this->postal_code = $postal_code;
        }
        return $this;
    }
    /**
     * Get province value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProvince()
    {
        return isset($this->province) ? $this->province : null;
    }
    /**
     * Set province value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $province
     * @return \Canpar\Rate\StructType\SearchCanadaPostRq
     */
    public function setProvince($province = null)
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($province, true), gettype($province)), __LINE__);
        }
        if (is_null($province) || (is_array($province) && empty($province))) {
            unset($this->province);
        } else {
            $this->province = $province;
        }
        return $this;
    }
    /**
     * Get street_direction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet_direction()
    {
        return isset($this->street_direction) ? $this->street_direction : null;
    }
    /**
     * Set street_direction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street_direction
     * @return \Canpar\Rate\StructType\SearchCanadaPostRq
     */
    public function setStreet_direction($street_direction = null)
    {
        // validation for constraint: string
        if (!is_null($street_direction) && !is_string($street_direction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street_direction, true), gettype($street_direction)), __LINE__);
        }
        if (is_null($street_direction) || (is_array($street_direction) && empty($street_direction))) {
            unset($this->street_direction);
        } else {
            $this->street_direction = $street_direction;
        }
        return $this;
    }
    /**
     * Get street_name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet_name()
    {
        return isset($this->street_name) ? $this->street_name : null;
    }
    /**
     * Set street_name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street_name
     * @return \Canpar\Rate\StructType\SearchCanadaPostRq
     */
    public function setStreet_name($street_name = null)
    {
        // validation for constraint: string
        if (!is_null($street_name) && !is_string($street_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street_name, true), gettype($street_name)), __LINE__);
        }
        if (is_null($street_name) || (is_array($street_name) && empty($street_name))) {
            unset($this->street_name);
        } else {
            $this->street_name = $street_name;
        }
        return $this;
    }
    /**
     * Get street_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet_num()
    {
        return isset($this->street_num) ? $this->street_num : null;
    }
    /**
     * Set street_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street_num
     * @return \Canpar\Rate\StructType\SearchCanadaPostRq
     */
    public function setStreet_num($street_num = null)
    {
        // validation for constraint: string
        if (!is_null($street_num) && !is_string($street_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street_num, true), gettype($street_num)), __LINE__);
        }
        if (is_null($street_num) || (is_array($street_num) && empty($street_num))) {
            unset($this->street_num);
        } else {
            $this->street_num = $street_num;
        }
        return $this;
    }
    /**
     * Get street_type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet_type()
    {
        return isset($this->street_type) ? $this->street_type : null;
    }
    /**
     * Set street_type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street_type
     * @return \Canpar\Rate\StructType\SearchCanadaPostRq
     */
    public function setStreet_type($street_type = null)
    {
        // validation for constraint: string
        if (!is_null($street_type) && !is_string($street_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street_type, true), gettype($street_type)), __LINE__);
        }
        if (is_null($street_type) || (is_array($street_type) && empty($street_type))) {
            unset($this->street_type);
        } else {
            $this->street_type = $street_type;
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
     * @return \Canpar\Rate\StructType\SearchCanadaPostRq
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
    /**
     * Get validate_only value
     * @return bool|null
     */
    public function getValidate_only()
    {
        return $this->validate_only;
    }
    /**
     * Set validate_only value
     * @param bool $validate_only
     * @return \Canpar\Rate\StructType\SearchCanadaPostRq
     */
    public function setValidate_only($validate_only = null)
    {
        // validation for constraint: boolean
        if (!is_null($validate_only) && !is_bool($validate_only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validate_only, true), gettype($validate_only)), __LINE__);
        }
        $this->validate_only = $validate_only;
        return $this;
    }
}
