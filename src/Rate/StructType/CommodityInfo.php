<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommodityInfo StructType
 * @subpackage Structs
 */
class CommodityInfo extends AbstractStructBase
{
    /**
     * The country_of_origin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $country_of_origin;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The hs_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $hs_code;
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
     * The province_of_origin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $province_of_origin;
    /**
     * The updated_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $updated_on;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $value;
    /**
     * Constructor method for CommodityInfo
     * @uses CommodityInfo::setCountry_of_origin()
     * @uses CommodityInfo::setDescription()
     * @uses CommodityInfo::setHs_code()
     * @uses CommodityInfo::setId()
     * @uses CommodityInfo::setInserted_on()
     * @uses CommodityInfo::setProvince_of_origin()
     * @uses CommodityInfo::setUpdated_on()
     * @uses CommodityInfo::setValue()
     * @param string $country_of_origin
     * @param string $description
     * @param string $hs_code
     * @param int $id
     * @param string $inserted_on
     * @param string $province_of_origin
     * @param string $updated_on
     * @param float $value
     */
    public function __construct($country_of_origin = null, $description = null, $hs_code = null, $id = null, $inserted_on = null, $province_of_origin = null, $updated_on = null, $value = null)
    {
        $this
            ->setCountry_of_origin($country_of_origin)
            ->setDescription($description)
            ->setHs_code($hs_code)
            ->setId($id)
            ->setInserted_on($inserted_on)
            ->setProvince_of_origin($province_of_origin)
            ->setUpdated_on($updated_on)
            ->setValue($value);
    }
    /**
     * Get country_of_origin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry_of_origin()
    {
        return isset($this->country_of_origin) ? $this->country_of_origin : null;
    }
    /**
     * Set country_of_origin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country_of_origin
     * @return \Canpar\Rate\StructType\CommodityInfo
     */
    public function setCountry_of_origin($country_of_origin = null)
    {
        // validation for constraint: string
        if (!is_null($country_of_origin) && !is_string($country_of_origin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country_of_origin, true), gettype($country_of_origin)), __LINE__);
        }
        if (is_null($country_of_origin) || (is_array($country_of_origin) && empty($country_of_origin))) {
            unset($this->country_of_origin);
        } else {
            $this->country_of_origin = $country_of_origin;
        }
        return $this;
    }
    /**
     * Get description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : null;
    }
    /**
     * Set description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Canpar\Rate\StructType\CommodityInfo
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->description);
        } else {
            $this->description = $description;
        }
        return $this;
    }
    /**
     * Get hs_code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHs_code()
    {
        return isset($this->hs_code) ? $this->hs_code : null;
    }
    /**
     * Set hs_code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $hs_code
     * @return \Canpar\Rate\StructType\CommodityInfo
     */
    public function setHs_code($hs_code = null)
    {
        // validation for constraint: string
        if (!is_null($hs_code) && !is_string($hs_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hs_code, true), gettype($hs_code)), __LINE__);
        }
        if (is_null($hs_code) || (is_array($hs_code) && empty($hs_code))) {
            unset($this->hs_code);
        } else {
            $this->hs_code = $hs_code;
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
     * @return \Canpar\Rate\StructType\CommodityInfo
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
     * @return \Canpar\Rate\StructType\CommodityInfo
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
     * Get province_of_origin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProvince_of_origin()
    {
        return isset($this->province_of_origin) ? $this->province_of_origin : null;
    }
    /**
     * Set province_of_origin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $province_of_origin
     * @return \Canpar\Rate\StructType\CommodityInfo
     */
    public function setProvince_of_origin($province_of_origin = null)
    {
        // validation for constraint: string
        if (!is_null($province_of_origin) && !is_string($province_of_origin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($province_of_origin, true), gettype($province_of_origin)), __LINE__);
        }
        if (is_null($province_of_origin) || (is_array($province_of_origin) && empty($province_of_origin))) {
            unset($this->province_of_origin);
        } else {
            $this->province_of_origin = $province_of_origin;
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
     * @return \Canpar\Rate\StructType\CommodityInfo
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
     * Get value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Canpar\Rate\StructType\CommodityInfo
     */
    public function setValue($value = null)
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
}
