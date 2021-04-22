<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateShipmentAllServicesRs StructType
 * @subpackage Structs
 */
class RateShipmentAllServicesRs extends AbstractStructBase
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Rate\StructType\ProcessShipmentResult[]
     */
    public $processShipmentResult;
    /**
     * Constructor method for RateShipmentAllServicesRs
     * @uses RateShipmentAllServicesRs::setError()
     * @uses RateShipmentAllServicesRs::setProcessShipmentResult()
     * @param string $error
     * @param \Canpar\Rate\StructType\ProcessShipmentResult[] $processShipmentResult
     */
    public function __construct($error = null, array $processShipmentResult = array())
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
     * @return \Canpar\Rate\StructType\RateShipmentAllServicesRs
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
     * @return \Canpar\Rate\StructType\ProcessShipmentResult[]|null
     */
    public function getProcessShipmentResult()
    {
        return isset($this->processShipmentResult) ? $this->processShipmentResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProcessShipmentResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProcessShipmentResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProcessShipmentResultForArrayConstraintsFromSetProcessShipmentResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $rateShipmentAllServicesRsProcessShipmentResultItem) {
            // validation for constraint: itemType
            if (!$rateShipmentAllServicesRsProcessShipmentResultItem instanceof \Canpar\Rate\StructType\ProcessShipmentResult) {
                $invalidValues[] = is_object($rateShipmentAllServicesRsProcessShipmentResultItem) ? get_class($rateShipmentAllServicesRsProcessShipmentResultItem) : sprintf('%s(%s)', gettype($rateShipmentAllServicesRsProcessShipmentResultItem), var_export($rateShipmentAllServicesRsProcessShipmentResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The processShipmentResult property can only contain items of type \Canpar\Rate\StructType\ProcessShipmentResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set processShipmentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Rate\StructType\ProcessShipmentResult[] $processShipmentResult
     * @return \Canpar\Rate\StructType\RateShipmentAllServicesRs
     */
    public function setProcessShipmentResult(array $processShipmentResult = array())
    {
        // validation for constraint: array
        if ('' !== ($processShipmentResultArrayErrorMessage = self::validateProcessShipmentResultForArrayConstraintsFromSetProcessShipmentResult($processShipmentResult))) {
            throw new \InvalidArgumentException($processShipmentResultArrayErrorMessage, __LINE__);
        }
        if (is_null($processShipmentResult) || (is_array($processShipmentResult) && empty($processShipmentResult))) {
            unset($this->processShipmentResult);
        } else {
            $this->processShipmentResult = $processShipmentResult;
        }
        return $this;
    }
    /**
     * Add item to processShipmentResult value
     * @throws \InvalidArgumentException
     * @param \Canpar\Rate\StructType\ProcessShipmentResult $item
     * @return \Canpar\Rate\StructType\RateShipmentAllServicesRs
     */
    public function addToProcessShipmentResult(\Canpar\Rate\StructType\ProcessShipmentResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Rate\StructType\ProcessShipmentResult) {
            throw new \InvalidArgumentException(sprintf('The processShipmentResult property can only contain items of type \Canpar\Rate\StructType\ProcessShipmentResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->processShipmentResult[] = $item;
        return $this;
    }
}
