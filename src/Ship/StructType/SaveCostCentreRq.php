<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCostCentreRq StructType
 * @subpackage Structs
 */
class SaveCostCentreRq extends AbstractStructBase
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
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * Constructor method for SaveCostCentreRq
     * @uses SaveCostCentreRq::setCost_centre()
     * @uses SaveCostCentreRq::setPassword()
     * @uses SaveCostCentreRq::setUser_id()
     * @param \Canpar\Ship\StructType\CostCentre $cost_centre
     * @param string $password
     * @param string $user_id
     */
    public function __construct(\Canpar\Ship\StructType\CostCentre $cost_centre = null, $password = null, $user_id = null)
    {
        $this
            ->setCost_centre($cost_centre)
            ->setPassword($password)
            ->setUser_id($user_id);
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
     * @return \Canpar\Ship\StructType\SaveCostCentreRq
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
     * Get password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->password) ? $this->password : null;
    }
    /**
     * Set password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Canpar\Ship\StructType\SaveCostCentreRq
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->password);
        } else {
            $this->password = $password;
        }
        return $this;
    }
    /**
     * Get user_id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUser_id()
    {
        return isset($this->user_id) ? $this->user_id : null;
    }
    /**
     * Set user_id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $user_id
     * @return \Canpar\Ship\StructType\SaveCostCentreRq
     */
    public function setUser_id($user_id = null)
    {
        // validation for constraint: string
        if (!is_null($user_id) && !is_string($user_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user_id, true), gettype($user_id)), __LINE__);
        }
        if (is_null($user_id) || (is_array($user_id) && empty($user_id))) {
            unset($this->user_id);
        } else {
            $this->user_id = $user_id;
        }
        return $this;
    }
}
