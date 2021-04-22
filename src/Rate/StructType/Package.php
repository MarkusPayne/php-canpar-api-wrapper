<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Package StructType
 * @subpackage Structs
 */
class Package extends AbstractStructBase
{
    /**
     * The alternative_reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $alternative_reference;
    /**
     * The barcode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $barcode;
    /**
     * The billed_weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $billed_weight;
    /**
     * The cod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Rate\StructType\COD
     */
    public $cod;
    /**
     * The cost_centre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $cost_centre;
    /**
     * The declared_value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $declared_value;
    /**
     * The dim_weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $dim_weight;
    /**
     * The dim_weight_flag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $dim_weight_flag;
    /**
     * The height
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $height;
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
     * The length
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $length;
    /**
     * The lg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $lg;
    /**
     * The min_weight_flag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $min_weight_flag;
    /**
     * The over_size
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $over_size;
    /**
     * The over_weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $over_weight;
    /**
     * The package_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $package_num;
    /**
     * The package_reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $package_reference;
    /**
     * The reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $reference;
    /**
     * The reported_weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $reported_weight;
    /**
     * The store_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $store_num;
    /**
     * The updated_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $updated_on;
    /**
     * The width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $width;
    /**
     * The xc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $xc;
    /**
     * Constructor method for Package
     * @uses Package::setAlternative_reference()
     * @uses Package::setBarcode()
     * @uses Package::setBilled_weight()
     * @uses Package::setCod()
     * @uses Package::setCost_centre()
     * @uses Package::setDeclared_value()
     * @uses Package::setDim_weight()
     * @uses Package::setDim_weight_flag()
     * @uses Package::setHeight()
     * @uses Package::setId()
     * @uses Package::setInserted_on()
     * @uses Package::setLength()
     * @uses Package::setLg()
     * @uses Package::setMin_weight_flag()
     * @uses Package::setOver_size()
     * @uses Package::setOver_weight()
     * @uses Package::setPackage_num()
     * @uses Package::setPackage_reference()
     * @uses Package::setReference()
     * @uses Package::setReported_weight()
     * @uses Package::setStore_num()
     * @uses Package::setUpdated_on()
     * @uses Package::setWidth()
     * @uses Package::setXc()
     * @param string $alternative_reference
     * @param string $barcode
     * @param float $billed_weight
     * @param \Canpar\Rate\StructType\COD $cod
     * @param string $cost_centre
     * @param float $declared_value
     * @param float $dim_weight
     * @param bool $dim_weight_flag
     * @param float $height
     * @param int $id
     * @param string $inserted_on
     * @param float $length
     * @param bool $lg
     * @param bool $min_weight_flag
     * @param bool $over_size
     * @param bool $over_weight
     * @param int $package_num
     * @param int $package_reference
     * @param string $reference
     * @param float $reported_weight
     * @param string $store_num
     * @param string $updated_on
     * @param float $width
     * @param bool $xc
     */
    public function __construct($alternative_reference = null, $barcode = null, $billed_weight = null, \Canpar\Rate\StructType\COD $cod = null, $cost_centre = null, $declared_value = null, $dim_weight = null, $dim_weight_flag = null, $height = null, $id = null, $inserted_on = null, $length = null, $lg = null, $min_weight_flag = null, $over_size = null, $over_weight = null, $package_num = null, $package_reference = null, $reference = null, $reported_weight = null, $store_num = null, $updated_on = null, $width = null, $xc = null)
    {
        $this
            ->setAlternative_reference($alternative_reference)
            ->setBarcode($barcode)
            ->setBilled_weight($billed_weight)
            ->setCod($cod)
            ->setCost_centre($cost_centre)
            ->setDeclared_value($declared_value)
            ->setDim_weight($dim_weight)
            ->setDim_weight_flag($dim_weight_flag)
            ->setHeight($height)
            ->setId($id)
            ->setInserted_on($inserted_on)
            ->setLength($length)
            ->setLg($lg)
            ->setMin_weight_flag($min_weight_flag)
            ->setOver_size($over_size)
            ->setOver_weight($over_weight)
            ->setPackage_num($package_num)
            ->setPackage_reference($package_reference)
            ->setReference($reference)
            ->setReported_weight($reported_weight)
            ->setStore_num($store_num)
            ->setUpdated_on($updated_on)
            ->setWidth($width)
            ->setXc($xc);
    }
    /**
     * Get alternative_reference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAlternative_reference()
    {
        return isset($this->alternative_reference) ? $this->alternative_reference : null;
    }
    /**
     * Set alternative_reference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $alternative_reference
     * @return \Canpar\Rate\StructType\Package
     */
    public function setAlternative_reference($alternative_reference = null)
    {
        // validation for constraint: string
        if (!is_null($alternative_reference) && !is_string($alternative_reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alternative_reference, true), gettype($alternative_reference)), __LINE__);
        }
        if (is_null($alternative_reference) || (is_array($alternative_reference) && empty($alternative_reference))) {
            unset($this->alternative_reference);
        } else {
            $this->alternative_reference = $alternative_reference;
        }
        return $this;
    }
    /**
     * Get barcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBarcode()
    {
        return isset($this->barcode) ? $this->barcode : null;
    }
    /**
     * Set barcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $barcode
     * @return \Canpar\Rate\StructType\Package
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (!is_null($barcode) && !is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcode, true), gettype($barcode)), __LINE__);
        }
        if (is_null($barcode) || (is_array($barcode) && empty($barcode))) {
            unset($this->barcode);
        } else {
            $this->barcode = $barcode;
        }
        return $this;
    }
    /**
     * Get billed_weight value
     * @return float|null
     */
    public function getBilled_weight()
    {
        return $this->billed_weight;
    }
    /**
     * Set billed_weight value
     * @param float $billed_weight
     * @return \Canpar\Rate\StructType\Package
     */
    public function setBilled_weight($billed_weight = null)
    {
        // validation for constraint: float
        if (!is_null($billed_weight) && !(is_float($billed_weight) || is_numeric($billed_weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($billed_weight, true), gettype($billed_weight)), __LINE__);
        }
        $this->billed_weight = $billed_weight;
        return $this;
    }
    /**
     * Get cod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Rate\StructType\COD|null
     */
    public function getCod()
    {
        return isset($this->cod) ? $this->cod : null;
    }
    /**
     * Set cod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Rate\StructType\COD $cod
     * @return \Canpar\Rate\StructType\Package
     */
    public function setCod(\Canpar\Rate\StructType\COD $cod = null)
    {
        if (is_null($cod) || (is_array($cod) && empty($cod))) {
            unset($this->cod);
        } else {
            $this->cod = $cod;
        }
        return $this;
    }
    /**
     * Get cost_centre value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCost_centre()
    {
        return isset($this->cost_centre) ? $this->cost_centre : null;
    }
    /**
     * Set cost_centre value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cost_centre
     * @return \Canpar\Rate\StructType\Package
     */
    public function setCost_centre($cost_centre = null)
    {
        // validation for constraint: string
        if (!is_null($cost_centre) && !is_string($cost_centre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cost_centre, true), gettype($cost_centre)), __LINE__);
        }
        if (is_null($cost_centre) || (is_array($cost_centre) && empty($cost_centre))) {
            unset($this->cost_centre);
        } else {
            $this->cost_centre = $cost_centre;
        }
        return $this;
    }
    /**
     * Get declared_value value
     * @return float|null
     */
    public function getDeclared_value()
    {
        return $this->declared_value;
    }
    /**
     * Set declared_value value
     * @param float $declared_value
     * @return \Canpar\Rate\StructType\Package
     */
    public function setDeclared_value($declared_value = null)
    {
        // validation for constraint: float
        if (!is_null($declared_value) && !(is_float($declared_value) || is_numeric($declared_value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($declared_value, true), gettype($declared_value)), __LINE__);
        }
        $this->declared_value = $declared_value;
        return $this;
    }
    /**
     * Get dim_weight value
     * @return float|null
     */
    public function getDim_weight()
    {
        return $this->dim_weight;
    }
    /**
     * Set dim_weight value
     * @param float $dim_weight
     * @return \Canpar\Rate\StructType\Package
     */
    public function setDim_weight($dim_weight = null)
    {
        // validation for constraint: float
        if (!is_null($dim_weight) && !(is_float($dim_weight) || is_numeric($dim_weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dim_weight, true), gettype($dim_weight)), __LINE__);
        }
        $this->dim_weight = $dim_weight;
        return $this;
    }
    /**
     * Get dim_weight_flag value
     * @return bool|null
     */
    public function getDim_weight_flag()
    {
        return $this->dim_weight_flag;
    }
    /**
     * Set dim_weight_flag value
     * @param bool $dim_weight_flag
     * @return \Canpar\Rate\StructType\Package
     */
    public function setDim_weight_flag($dim_weight_flag = null)
    {
        // validation for constraint: boolean
        if (!is_null($dim_weight_flag) && !is_bool($dim_weight_flag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dim_weight_flag, true), gettype($dim_weight_flag)), __LINE__);
        }
        $this->dim_weight_flag = $dim_weight_flag;
        return $this;
    }
    /**
     * Get height value
     * @return float|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param float $height
     * @return \Canpar\Rate\StructType\Package
     */
    public function setHeight($height = null)
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
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
     * @return \Canpar\Rate\StructType\Package
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
     * @return \Canpar\Rate\StructType\Package
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
     * Get length value
     * @return float|null
     */
    public function getLength()
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param float $length
     * @return \Canpar\Rate\StructType\Package
     */
    public function setLength($length = null)
    {
        // validation for constraint: float
        if (!is_null($length) && !(is_float($length) || is_numeric($length))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->length = $length;
        return $this;
    }
    /**
     * Get lg value
     * @return bool|null
     */
    public function getLg()
    {
        return $this->lg;
    }
    /**
     * Set lg value
     * @param bool $lg
     * @return \Canpar\Rate\StructType\Package
     */
    public function setLg($lg = null)
    {
        // validation for constraint: boolean
        if (!is_null($lg) && !is_bool($lg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lg, true), gettype($lg)), __LINE__);
        }
        $this->lg = $lg;
        return $this;
    }
    /**
     * Get min_weight_flag value
     * @return bool|null
     */
    public function getMin_weight_flag()
    {
        return $this->min_weight_flag;
    }
    /**
     * Set min_weight_flag value
     * @param bool $min_weight_flag
     * @return \Canpar\Rate\StructType\Package
     */
    public function setMin_weight_flag($min_weight_flag = null)
    {
        // validation for constraint: boolean
        if (!is_null($min_weight_flag) && !is_bool($min_weight_flag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($min_weight_flag, true), gettype($min_weight_flag)), __LINE__);
        }
        $this->min_weight_flag = $min_weight_flag;
        return $this;
    }
    /**
     * Get over_size value
     * @return bool|null
     */
    public function getOver_size()
    {
        return $this->over_size;
    }
    /**
     * Set over_size value
     * @param bool $over_size
     * @return \Canpar\Rate\StructType\Package
     */
    public function setOver_size($over_size = null)
    {
        // validation for constraint: boolean
        if (!is_null($over_size) && !is_bool($over_size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($over_size, true), gettype($over_size)), __LINE__);
        }
        $this->over_size = $over_size;
        return $this;
    }
    /**
     * Get over_weight value
     * @return bool|null
     */
    public function getOver_weight()
    {
        return $this->over_weight;
    }
    /**
     * Set over_weight value
     * @param bool $over_weight
     * @return \Canpar\Rate\StructType\Package
     */
    public function setOver_weight($over_weight = null)
    {
        // validation for constraint: boolean
        if (!is_null($over_weight) && !is_bool($over_weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($over_weight, true), gettype($over_weight)), __LINE__);
        }
        $this->over_weight = $over_weight;
        return $this;
    }
    /**
     * Get package_num value
     * @return int|null
     */
    public function getPackage_num()
    {
        return $this->package_num;
    }
    /**
     * Set package_num value
     * @param int $package_num
     * @return \Canpar\Rate\StructType\Package
     */
    public function setPackage_num($package_num = null)
    {
        // validation for constraint: int
        if (!is_null($package_num) && !(is_int($package_num) || ctype_digit($package_num))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($package_num, true), gettype($package_num)), __LINE__);
        }
        $this->package_num = $package_num;
        return $this;
    }
    /**
     * Get package_reference value
     * @return int|null
     */
    public function getPackage_reference()
    {
        return $this->package_reference;
    }
    /**
     * Set package_reference value
     * @param int $package_reference
     * @return \Canpar\Rate\StructType\Package
     */
    public function setPackage_reference($package_reference = null)
    {
        // validation for constraint: int
        if (!is_null($package_reference) && !(is_int($package_reference) || ctype_digit($package_reference))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($package_reference, true), gettype($package_reference)), __LINE__);
        }
        $this->package_reference = $package_reference;
        return $this;
    }
    /**
     * Get reference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReference()
    {
        return isset($this->reference) ? $this->reference : null;
    }
    /**
     * Set reference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $reference
     * @return \Canpar\Rate\StructType\Package
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        if (is_null($reference) || (is_array($reference) && empty($reference))) {
            unset($this->reference);
        } else {
            $this->reference = $reference;
        }
        return $this;
    }
    /**
     * Get reported_weight value
     * @return float|null
     */
    public function getReported_weight()
    {
        return $this->reported_weight;
    }
    /**
     * Set reported_weight value
     * @param float $reported_weight
     * @return \Canpar\Rate\StructType\Package
     */
    public function setReported_weight($reported_weight = null)
    {
        // validation for constraint: float
        if (!is_null($reported_weight) && !(is_float($reported_weight) || is_numeric($reported_weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($reported_weight, true), gettype($reported_weight)), __LINE__);
        }
        $this->reported_weight = $reported_weight;
        return $this;
    }
    /**
     * Get store_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStore_num()
    {
        return isset($this->store_num) ? $this->store_num : null;
    }
    /**
     * Set store_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $store_num
     * @return \Canpar\Rate\StructType\Package
     */
    public function setStore_num($store_num = null)
    {
        // validation for constraint: string
        if (!is_null($store_num) && !is_string($store_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($store_num, true), gettype($store_num)), __LINE__);
        }
        if (is_null($store_num) || (is_array($store_num) && empty($store_num))) {
            unset($this->store_num);
        } else {
            $this->store_num = $store_num;
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
     * @return \Canpar\Rate\StructType\Package
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
     * Get width value
     * @return float|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param float $width
     * @return \Canpar\Rate\StructType\Package
     */
    public function setWidth($width = null)
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        return $this;
    }
    /**
     * Get xc value
     * @return bool|null
     */
    public function getXc()
    {
        return $this->xc;
    }
    /**
     * Set xc value
     * @param bool $xc
     * @return \Canpar\Rate\StructType\Package
     */
    public function setXc($xc = null)
    {
        // validation for constraint: boolean
        if (!is_null($xc) && !is_bool($xc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($xc, true), gettype($xc)), __LINE__);
        }
        $this->xc = $xc;
        return $this;
    }
}
