<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CostCentre StructType
 * @subpackage Structs
 */
class CostCentre extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The division
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $division;
    /**
     * The handling
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $handling;
    /**
     * The handling_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $handling_type;
    /**
     * The inserted_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $inserted_on;
    /**
     * The shipper_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipper_num;
    /**
     * The updated_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $updated_on;
    /**
     * Constructor method for CostCentre
     * @uses CostCentre::setDescription()
     * @uses CostCentre::setDivision()
     * @uses CostCentre::setHandling()
     * @uses CostCentre::setHandling_type()
     * @uses CostCentre::setInserted_on()
     * @uses CostCentre::setShipper_num()
     * @uses CostCentre::setUpdated_on()
     * @param string $description
     * @param string $division
     * @param float $handling
     * @param string $handling_type
     * @param string $inserted_on
     * @param string $shipper_num
     * @param string $updated_on
     */
    public function __construct($description = null, $division = null, $handling = null, $handling_type = null, $inserted_on = null, $shipper_num = null, $updated_on = null)
    {
        $this
            ->setDescription($description)
            ->setDivision($division)
            ->setHandling($handling)
            ->setHandling_type($handling_type)
            ->setInserted_on($inserted_on)
            ->setShipper_num($shipper_num)
            ->setUpdated_on($updated_on);
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
     * @return \Canpar\Ship\StructType\CostCentre
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
     * Get division value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDivision()
    {
        return isset($this->division) ? $this->division : null;
    }
    /**
     * Set division value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $division
     * @return \Canpar\Ship\StructType\CostCentre
     */
    public function setDivision($division = null)
    {
        // validation for constraint: string
        if (!is_null($division) && !is_string($division)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($division, true), gettype($division)), __LINE__);
        }
        if (is_null($division) || (is_array($division) && empty($division))) {
            unset($this->division);
        } else {
            $this->division = $division;
        }
        return $this;
    }
    /**
     * Get handling value
     * @return float|null
     */
    public function getHandling()
    {
        return $this->handling;
    }
    /**
     * Set handling value
     * @param float $handling
     * @return \Canpar\Ship\StructType\CostCentre
     */
    public function setHandling($handling = null)
    {
        // validation for constraint: float
        if (!is_null($handling) && !(is_float($handling) || is_numeric($handling))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($handling, true), gettype($handling)), __LINE__);
        }
        $this->handling = $handling;
        return $this;
    }
    /**
     * Get handling_type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHandling_type()
    {
        return isset($this->handling_type) ? $this->handling_type : null;
    }
    /**
     * Set handling_type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $handling_type
     * @return \Canpar\Ship\StructType\CostCentre
     */
    public function setHandling_type($handling_type = null)
    {
        // validation for constraint: string
        if (!is_null($handling_type) && !is_string($handling_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handling_type, true), gettype($handling_type)), __LINE__);
        }
        if (is_null($handling_type) || (is_array($handling_type) && empty($handling_type))) {
            unset($this->handling_type);
        } else {
            $this->handling_type = $handling_type;
        }
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
     * @return \Canpar\Ship\StructType\CostCentre
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
     * Get shipper_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipper_num()
    {
        return isset($this->shipper_num) ? $this->shipper_num : null;
    }
    /**
     * Set shipper_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipper_num
     * @return \Canpar\Ship\StructType\CostCentre
     */
    public function setShipper_num($shipper_num = null)
    {
        // validation for constraint: string
        if (!is_null($shipper_num) && !is_string($shipper_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipper_num, true), gettype($shipper_num)), __LINE__);
        }
        if (is_null($shipper_num) || (is_array($shipper_num) && empty($shipper_num))) {
            unset($this->shipper_num);
        } else {
            $this->shipper_num = $shipper_num;
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
     * @return \Canpar\Ship\StructType\CostCentre
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
}
