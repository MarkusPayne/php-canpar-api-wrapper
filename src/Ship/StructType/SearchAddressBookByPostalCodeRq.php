<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAddressBookByPostalCodeRq StructType
 * @subpackage Structs
 */
class SearchAddressBookByPostalCodeRq extends AbstractStructBase
{
    /**
     * The page_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $page_num;
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
     * The shipper_num
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $shipper_num;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * Constructor method for SearchAddressBookByPostalCodeRq
     * @uses SearchAddressBookByPostalCodeRq::setPage_num()
     * @uses SearchAddressBookByPostalCodeRq::setPassword()
     * @uses SearchAddressBookByPostalCodeRq::setPostal_code()
     * @uses SearchAddressBookByPostalCodeRq::setShipper_num()
     * @uses SearchAddressBookByPostalCodeRq::setUser_id()
     * @param int $page_num
     * @param string $password
     * @param string $postal_code
     * @param string[] $shipper_num
     * @param string $user_id
     */
    public function __construct($page_num = null, $password = null, $postal_code = null, array $shipper_num = array(), $user_id = null)
    {
        $this
            ->setPage_num($page_num)
            ->setPassword($password)
            ->setPostal_code($postal_code)
            ->setShipper_num($shipper_num)
            ->setUser_id($user_id);
    }
    /**
     * Get page_num value
     * @return int|null
     */
    public function getPage_num()
    {
        return $this->page_num;
    }
    /**
     * Set page_num value
     * @param int $page_num
     * @return \Canpar\Ship\StructType\SearchAddressBookByPostalCodeRq
     */
    public function setPage_num($page_num = null)
    {
        // validation for constraint: int
        if (!is_null($page_num) && !(is_int($page_num) || ctype_digit($page_num))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($page_num, true), gettype($page_num)), __LINE__);
        }
        $this->page_num = $page_num;
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
     * @return \Canpar\Ship\StructType\SearchAddressBookByPostalCodeRq
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
     * @return \Canpar\Ship\StructType\SearchAddressBookByPostalCodeRq
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
     * Get shipper_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getShipper_num()
    {
        return isset($this->shipper_num) ? $this->shipper_num : null;
    }
    /**
     * This method is responsible for validating the values passed to the setShipper_num method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipper_num method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipper_numForArrayConstraintsFromSetShipper_num(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAddressBookByPostalCodeRqShipper_numItem) {
            // validation for constraint: itemType
            if (!is_string($searchAddressBookByPostalCodeRqShipper_numItem)) {
                $invalidValues[] = is_object($searchAddressBookByPostalCodeRqShipper_numItem) ? get_class($searchAddressBookByPostalCodeRqShipper_numItem) : sprintf('%s(%s)', gettype($searchAddressBookByPostalCodeRqShipper_numItem), var_export($searchAddressBookByPostalCodeRqShipper_numItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shipper_num property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set shipper_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $shipper_num
     * @return \Canpar\Ship\StructType\SearchAddressBookByPostalCodeRq
     */
    public function setShipper_num(array $shipper_num = array())
    {
        // validation for constraint: array
        if ('' !== ($shipper_numArrayErrorMessage = self::validateShipper_numForArrayConstraintsFromSetShipper_num($shipper_num))) {
            throw new \InvalidArgumentException($shipper_numArrayErrorMessage, __LINE__);
        }
        if (is_null($shipper_num) || (is_array($shipper_num) && empty($shipper_num))) {
            unset($this->shipper_num);
        } else {
            $this->shipper_num = $shipper_num;
        }
        return $this;
    }
    /**
     * Add item to shipper_num value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Canpar\Ship\StructType\SearchAddressBookByPostalCodeRq
     */
    public function addToShipper_num($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The shipper_num property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shipper_num[] = $item;
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
     * @return \Canpar\Ship\StructType\SearchAddressBookByPostalCodeRq
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
