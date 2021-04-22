<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateShipmentPublicRs StructType
 * @subpackage Structs
 */
class RateShipmentPublicRs extends AbstractStructBase
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
     * The processShipmentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Rate\StructType\ProcessShipmentResult
     */
    public $processShipmentResult;
    /**
     * Constructor method for RateShipmentPublicRs
     * @uses RateShipmentPublicRs::setError()
     * @uses RateShipmentPublicRs::setProcessShipmentResult()
     * @param string $error
     * @param \Canpar\Rate\StructType\ProcessShipmentResult $processShipmentResult
     */
    public function __construct($error = null, \Canpar\Rate\StructType\ProcessShipmentResult $processShipmentResult = null)
    {
        $this
            ->setError($error)
            ->setProcessShipmentResult($processShipmentResult);
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
     * @return \Canpar\Rate\StructType\RateShipmentPublicRs
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
     * Get processShipmentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Rate\StructType\ProcessShipmentResult|null
     */
    public function getProcessShipmentResult()
    {
        return isset($this->processShipmentResult) ? $this->processShipmentResult : null;
    }
    /**
     * Set processShipmentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Rate\StructType\ProcessShipmentResult $processShipmentResult
     * @return \Canpar\Rate\StructType\RateShipmentPublicRs
     */
    public function setProcessShipmentResult(\Canpar\Rate\StructType\ProcessShipmentResult $processShipmentResult = null)
    {
        if (is_null($processShipmentResult) || (is_array($processShipmentResult) && empty($processShipmentResult))) {
            unset($this->processShipmentResult);
        } else {
            $this->processShipmentResult = $processShipmentResult;
        }
        return $this;
    }
}
