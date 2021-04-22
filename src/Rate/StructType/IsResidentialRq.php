<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsResidentialRq StructType
 * @subpackage Structs
 */
class IsResidentialRq extends AbstractStructBase
{
    /**
     * The consignee_name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $consignee_name;
    /**
     * The postal_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $postal_code;
    /**
     * Constructor method for IsResidentialRq
     * @uses IsResidentialRq::setConsignee_name()
     * @uses IsResidentialRq::setPostal_code()
     * @param string $consignee_name
     * @param string $postal_code
     */
    public function __construct($consignee_name = null, $postal_code = null)
    {
        $this
            ->setConsignee_name($consignee_name)
            ->setPostal_code($postal_code);
    }
    /**
     * Get consignee_name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConsignee_name()
    {
        return isset($this->consignee_name) ? $this->consignee_name : null;
    }
    /**
     * Set consignee_name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $consignee_name
     * @return \Canpar\Rate\StructType\IsResidentialRq
     */
    public function setConsignee_name($consignee_name = null)
    {
        // validation for constraint: string
        if (!is_null($consignee_name) && !is_string($consignee_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consignee_name, true), gettype($consignee_name)), __LINE__);
        }
        if (is_null($consignee_name) || (is_array($consignee_name) && empty($consignee_name))) {
            unset($this->consignee_name);
        } else {
            $this->consignee_name = $consignee_name;
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
     * @return \Canpar\Rate\StructType\IsResidentialRq
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
}
