<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsPostalCodeValidRs StructType
 * @subpackage Structs
 */
class IsPostalCodeValidRs extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * The result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $result;
    /**
     * Constructor method for IsPostalCodeValidRs
     * @uses IsPostalCodeValidRs::setError()
     * @uses IsPostalCodeValidRs::setResult()
     * @param string $error
     * @param bool $result
     */
    public function __construct($error = null, $result = null)
    {
        $this
            ->setError($error)
            ->setResult($result);
    }
    /**
     * Get error value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getError()
    {
        return isset($this->error) ? $this->error : null;
    }
    /**
     * Set error value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $error
     * @return \Canpar\Rate\StructType\IsPostalCodeValidRs
     */
    public function setError($error = null)
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        if (is_null($error) || (is_array($error) && empty($error))) {
            unset($this->error);
        } else {
            $this->error = $error;
        }
        return $this;
    }
    /**
     * Get result value
     * @return bool|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param bool $result
     * @return \Canpar\Rate\StructType\IsPostalCodeValidRs
     */
    public function setResult($result = null)
    {
        // validation for constraint: boolean
        if (!is_null($result) && !is_bool($result)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        return $this;
    }
}
