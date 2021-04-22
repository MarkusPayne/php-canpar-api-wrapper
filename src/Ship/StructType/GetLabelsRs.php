<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelsRs StructType
 * @subpackage Structs
 */
class GetLabelsRs extends AbstractStructBase
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
     * The labels
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $labels;
    /**
     * Constructor method for GetLabelsRs
     * @uses GetLabelsRs::setError()
     * @uses GetLabelsRs::setLabels()
     * @param string $error
     * @param string[] $labels
     */
    public function __construct($error = null, array $labels = array())
    {
        $this
            ->setError($error)
            ->setLabels($labels);
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
     * @return \Canpar\Ship\StructType\GetLabelsRs
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
     * Get labels value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getLabels()
    {
        return isset($this->labels) ? $this->labels : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLabels method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLabels method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLabelsForArrayConstraintsFromSetLabels(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLabelsRsLabelsItem) {
            // validation for constraint: itemType
            if (!is_string($getLabelsRsLabelsItem)) {
                $invalidValues[] = is_object($getLabelsRsLabelsItem) ? get_class($getLabelsRsLabelsItem) : sprintf('%s(%s)', gettype($getLabelsRsLabelsItem), var_export($getLabelsRsLabelsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The labels property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set labels value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $labels
     * @return \Canpar\Ship\StructType\GetLabelsRs
     */
    public function setLabels(array $labels = array())
    {
        // validation for constraint: array
        if ('' !== ($labelsArrayErrorMessage = self::validateLabelsForArrayConstraintsFromSetLabels($labels))) {
            throw new \InvalidArgumentException($labelsArrayErrorMessage, __LINE__);
        }
        if (is_null($labels) || (is_array($labels) && empty($labels))) {
            unset($this->labels);
        } else {
            $this->labels = $labels;
        }
        return $this;
    }
    /**
     * Add item to labels value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Canpar\Ship\StructType\GetLabelsRs
     */
    public function addToLabels($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The labels property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->labels[] = $item;
        return $this;
    }
}
