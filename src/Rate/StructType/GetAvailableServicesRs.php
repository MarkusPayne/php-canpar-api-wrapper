<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableServicesRs StructType
 * @subpackage Structs
 */
class GetAvailableServicesRs extends AbstractStructBase
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
     * The getAvailableServicesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Rate\StructType\GetAvailableServicesResult[]
     */
    public $getAvailableServicesResult;
    /**
     * Constructor method for GetAvailableServicesRs
     * @uses GetAvailableServicesRs::setError()
     * @uses GetAvailableServicesRs::setGetAvailableServicesResult()
     * @param string $error
     * @param \Canpar\Rate\StructType\GetAvailableServicesResult[] $getAvailableServicesResult
     */
    public function __construct($error = null, array $getAvailableServicesResult = array())
    {
        $this
            ->setError($error)
            ->setGetAvailableServicesResult($getAvailableServicesResult);
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
     * @return \Canpar\Rate\StructType\GetAvailableServicesRs
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
     * Get getAvailableServicesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Rate\StructType\GetAvailableServicesResult[]|null
     */
    public function getGetAvailableServicesResult()
    {
        return isset($this->getAvailableServicesResult) ? $this->getAvailableServicesResult : null;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAvailableServicesResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAvailableServicesResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAvailableServicesResultForArrayConstraintsFromSetGetAvailableServicesResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableServicesRsGetAvailableServicesResultItem) {
            // validation for constraint: itemType
            if (!$getAvailableServicesRsGetAvailableServicesResultItem instanceof \Canpar\Rate\StructType\GetAvailableServicesResult) {
                $invalidValues[] = is_object($getAvailableServicesRsGetAvailableServicesResultItem) ? get_class($getAvailableServicesRsGetAvailableServicesResultItem) : sprintf('%s(%s)', gettype($getAvailableServicesRsGetAvailableServicesResultItem), var_export($getAvailableServicesRsGetAvailableServicesResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAvailableServicesResult property can only contain items of type \Canpar\Rate\StructType\GetAvailableServicesResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAvailableServicesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Rate\StructType\GetAvailableServicesResult[] $getAvailableServicesResult
     * @return \Canpar\Rate\StructType\GetAvailableServicesRs
     */
    public function setGetAvailableServicesResult(array $getAvailableServicesResult = array())
    {
        // validation for constraint: array
        if ('' !== ($getAvailableServicesResultArrayErrorMessage = self::validateGetAvailableServicesResultForArrayConstraintsFromSetGetAvailableServicesResult($getAvailableServicesResult))) {
            throw new \InvalidArgumentException($getAvailableServicesResultArrayErrorMessage, __LINE__);
        }
        if (is_null($getAvailableServicesResult) || (is_array($getAvailableServicesResult) && empty($getAvailableServicesResult))) {
            unset($this->getAvailableServicesResult);
        } else {
            $this->getAvailableServicesResult = $getAvailableServicesResult;
        }
        return $this;
    }
    /**
     * Add item to getAvailableServicesResult value
     * @throws \InvalidArgumentException
     * @param \Canpar\Rate\StructType\GetAvailableServicesResult $item
     * @return \Canpar\Rate\StructType\GetAvailableServicesRs
     */
    public function addToGetAvailableServicesResult(\Canpar\Rate\StructType\GetAvailableServicesResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Rate\StructType\GetAvailableServicesResult) {
            throw new \InvalidArgumentException(sprintf('The getAvailableServicesResult property can only contain items of type \Canpar\Rate\StructType\GetAvailableServicesResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAvailableServicesResult[] = $item;
        return $this;
    }
}
