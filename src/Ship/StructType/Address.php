<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address StructType
 * @subpackage Structs
 */
class Address extends AbstractStructBase
{
    /**
     * The address_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $address_id;
    /**
     * The address_line_1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $address_line_1;
    /**
     * The address_line_2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $address_line_2;
    /**
     * The address_line_3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $address_line_3;
    /**
     * The attention
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $attention;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $email;
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
     * The phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $phone;
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
     * The residential
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $residential;
    /**
     * The updated_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $updated_on;
    /**
     * Constructor method for Address
     * @uses Address::setAddress_id()
     * @uses Address::setAddress_line_1()
     * @uses Address::setAddress_line_2()
     * @uses Address::setAddress_line_3()
     * @uses Address::setAttention()
     * @uses Address::setCity()
     * @uses Address::setCountry()
     * @uses Address::setEmail()
     * @uses Address::setExtension()
     * @uses Address::setId()
     * @uses Address::setInserted_on()
     * @uses Address::setName()
     * @uses Address::setPhone()
     * @uses Address::setPostal_code()
     * @uses Address::setProvince()
     * @uses Address::setResidential()
     * @uses Address::setUpdated_on()
     * @param string $address_id
     * @param string $address_line_1
     * @param string $address_line_2
     * @param string $address_line_3
     * @param string $attention
     * @param string $city
     * @param string $country
     * @param string $email
     * @param string $extension
     * @param int $id
     * @param string $inserted_on
     * @param string $name
     * @param string $phone
     * @param string $postal_code
     * @param string $province
     * @param bool $residential
     * @param string $updated_on
     */
    public function __construct($address_id = null, $address_line_1 = null, $address_line_2 = null, $address_line_3 = null, $attention = null, $city = null, $country = null, $email = null, $extension = null, $id = null, $inserted_on = null, $name = null, $phone = null, $postal_code = null, $province = null, $residential = null, $updated_on = null)
    {
        $this
            ->setAddress_id($address_id)
            ->setAddress_line_1($address_line_1)
            ->setAddress_line_2($address_line_2)
            ->setAddress_line_3($address_line_3)
            ->setAttention($attention)
            ->setCity($city)
            ->setCountry($country)
            ->setEmail($email)
            ->setExtension($extension)
            ->setId($id)
            ->setInserted_on($inserted_on)
            ->setName($name)
            ->setPhone($phone)
            ->setPostal_code($postal_code)
            ->setProvince($province)
            ->setResidential($residential)
            ->setUpdated_on($updated_on);
    }
    /**
     * Get address_id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddress_id()
    {
        return isset($this->address_id) ? $this->address_id : null;
    }
    /**
     * Set address_id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $address_id
     * @return \Canpar\Ship\StructType\Address
     */
    public function setAddress_id($address_id = null)
    {
        // validation for constraint: string
        if (!is_null($address_id) && !is_string($address_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_id, true), gettype($address_id)), __LINE__);
        }
        if (is_null($address_id) || (is_array($address_id) && empty($address_id))) {
            unset($this->address_id);
        } else {
            $this->address_id = $address_id;
        }
        return $this;
    }
    /**
     * Get address_line value
     * @return address_line
     */
    public function getAddress_line_1()
    {
        return isset($this->address_line_1) ? $this->address_line_1 : null;
    }
    /**
     * Set address_line value
     * @param address_line $address_line
     * @return \Canpar\Ship\StructType\Address
     */
    public function setAddress_line_1($address_line_1 = null)
    {
        // validation for constraint: string
        if (!is_null($address_line_1) && !is_string($address_line_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_line_1, true), gettype($address_line_1)), __LINE__);
        }
        if (is_null($address_line_1) || (is_array($address_line_1) && empty($address_line_1))) {
            unset($this->address_line_1);
        } else {
            $this->address_line_1 = $address_line_1;
        }
        return $this;
    }
    /**
     * Get address_line value
     * @return address_line
     */
    public function getAddress_line_2()
    {
        return isset($this->address_line_2) ? $this->address_line_2 : null;
    }
    /**
     * Set address_line value
     * @param address_line $address_line
     * @return \Canpar\Ship\StructType\Address
     */
    public function setAddress_line_2($address_line_2 = null)
    {
        // validation for constraint: string
        if (!is_null($address_line_2) && !is_string($address_line_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_line_2, true), gettype($address_line_2)), __LINE__);
        }
        if (is_null($address_line_2) || (is_array($address_line_2) && empty($address_line_2))) {
            unset($this->address_line_2);
        } else {
            $this->address_line_2 = $address_line_2;
        }
        return $this;
    }
    /**
     * Get address_line value
     * @return address_line
     */
    public function getAddress_line_3()
    {
        return isset($this->address_line_3) ? $this->address_line_3 : null;
    }
    /**
     * Set address_line value
     * @param address_line $address_line
     * @return \Canpar\Ship\StructType\Address
     */
    public function setAddress_line_3($address_line_3 = null)
    {
        // validation for constraint: string
        if (!is_null($address_line_3) && !is_string($address_line_3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_line_3, true), gettype($address_line_3)), __LINE__);
        }
        if (is_null($address_line_3) || (is_array($address_line_3) && empty($address_line_3))) {
            unset($this->address_line_3);
        } else {
            $this->address_line_3 = $address_line_3;
        }
        return $this;
    }
    /**
     * Get attention value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAttention()
    {
        return isset($this->attention) ? $this->attention : null;
    }
    /**
     * Set attention value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $attention
     * @return \Canpar\Ship\StructType\Address
     */
    public function setAttention($attention = null)
    {
        // validation for constraint: string
        if (!is_null($attention) && !is_string($attention)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attention, true), gettype($attention)), __LINE__);
        }
        if (is_null($attention) || (is_array($attention) && empty($attention))) {
            unset($this->attention);
        } else {
            $this->attention = $attention;
        }
        return $this;
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
     * @return \Canpar\Ship\StructType\Address
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
     * Get country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry()
    {
        return isset($this->country) ? $this->country : null;
    }
    /**
     * Set country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \Canpar\Ship\StructType\Address
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->country);
        } else {
            $this->country = $country;
        }
        return $this;
    }
    /**
     * Get email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmail()
    {
        return isset($this->email) ? $this->email : null;
    }
    /**
     * Set email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $email
     * @return \Canpar\Ship\StructType\Address
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->email);
        } else {
            $this->email = $email;
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
     * @return \Canpar\Ship\StructType\Address
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
     * @return \Canpar\Ship\StructType\Address
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
     * @return \Canpar\Ship\StructType\Address
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
     * @return \Canpar\Ship\StructType\Address
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
     * @return \Canpar\Ship\StructType\Address
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
     * @return \Canpar\Ship\StructType\Address
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
     * @return \Canpar\Ship\StructType\Address
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
     * Get residential value
     * @return bool|null
     */
    public function getResidential()
    {
        return $this->residential;
    }
    /**
     * Set residential value
     * @param bool $residential
     * @return \Canpar\Ship\StructType\Address
     */
    public function setResidential($residential = null)
    {
        // validation for constraint: boolean
        if (!is_null($residential) && !is_bool($residential)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($residential, true), gettype($residential)), __LINE__);
        }
        $this->residential = $residential;
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
     * @return \Canpar\Ship\StructType\Address
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
