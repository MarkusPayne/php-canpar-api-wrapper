<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCostCentreRs StructType
 * @subpackage Structs
 */
class SaveCostCentreRs extends AbstractStructBase
{
    /**
     * The cost_centre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\CostCentre
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
     * Constructor method for SaveCostCentreRs
     * @uses SaveCostCentreRs::setCost_centre()
     * @uses SaveCostCentreRs::setError()
     * @param \Canpar\Ship\StructType\CostCentre $cost_centre
     * @param string $error
     */
    public function __construct(\Canpar\Ship\StructType\CostCentre $cost_centre = null, $error = null)
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
     * @return \Canpar\Ship\StructType\CostCentre|null
     */
    public function getCost_centre()
    {
        return isset($this->cost_centre) ? $this->cost_centre : null;
    }
    /**
     * Set cost_centre value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\CostCentre $cost_centre
     * @return \Canpar\Ship\StructType\SaveCostCentreRs
     */
    public function setCost_centre(\Canpar\Ship\StructType\CostCentre $cost_centre = null)
    {
        if (is_null($cost_centre) || (is_array($cost_centre) && empty($cost_centre))) {
            unset($this->cost_centre);
        } else {
            $this->cost_centre = $cost_centre;
        }
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
     * @return \Canpar\Ship\StructType\SaveCostCentreRs
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
