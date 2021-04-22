<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCostCentresRs StructType
 * @subpackage Structs
 */
class GetCostCentresRs extends AbstractStructBase
{
    /**
     * The cost_centre
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\CostCentre[]
     */
    public $cost_centre;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for GetCostCentresRs
     * @uses GetCostCentresRs::setCost_centre()
     * @uses GetCostCentresRs::setError()
     * @param \Canpar\Ship\StructType\CostCentre[] $cost_centre
     * @param string $error
     */
    public function __construct(array $cost_centre = array(), $error = null)
    {
        $this
            ->setCost_centre($cost_centre)
            ->setError($error);
    }
    /**
     * Get cost_centre value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\CostCentre[]|null
     */
    public function getCost_centre()
    {
        return isset($this->cost_centre) ? $this->cost_centre : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCost_centre method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCost_centre method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCost_centreForArrayConstraintsFromSetCost_centre(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCostCentresRsCost_centreItem) {
            // validation for constraint: itemType
            if (!$getCostCentresRsCost_centreItem instanceof \Canpar\Ship\StructType\CostCentre) {
                $invalidValues[] = is_object($getCostCentresRsCost_centreItem) ? get_class($getCostCentresRsCost_centreItem) : sprintf('%s(%s)', gettype($getCostCentresRsCost_centreItem), var_export($getCostCentresRsCost_centreItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cost_centre property can only contain items of type \Canpar\Ship\StructType\CostCentre, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set cost_centre value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\CostCentre[] $cost_centre
     * @return \Canpar\Ship\StructType\GetCostCentresRs
     */
    public function setCost_centre(array $cost_centre = array())
    {
        // validation for constraint: array
        if ('' !== ($cost_centreArrayErrorMessage = self::validateCost_centreForArrayConstraintsFromSetCost_centre($cost_centre))) {
            throw new \InvalidArgumentException($cost_centreArrayErrorMessage, __LINE__);
        }
        if (is_null($cost_centre) || (is_array($cost_centre) && empty($cost_centre))) {
            unset($this->cost_centre);
        } else {
            $this->cost_centre = $cost_centre;
        }
        return $this;
    }
    /**
     * Add item to cost_centre value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\CostCentre $item
     * @return \Canpar\Ship\StructType\GetCostCentresRs
     */
    public function addToCost_centre(\Canpar\Ship\StructType\CostCentre $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\CostCentre) {
            throw new \InvalidArgumentException(sprintf('The cost_centre property can only contain items of type \Canpar\Ship\StructType\CostCentre, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cost_centre[] = $item;
        return $this;
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
     * @return \Canpar\Ship\StructType\GetCostCentresRs
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
}
