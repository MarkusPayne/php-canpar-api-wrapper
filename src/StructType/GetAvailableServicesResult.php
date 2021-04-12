<?php

namespace Canpar\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableServicesResult StructType
 * @subpackage Structs
 */
class GetAvailableServicesResult extends AbstractStructBase
{
    /**
     * The cos_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $cos_allowed;
    /**
     * The dg_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $dg_allowed;
    /**
     * The estimated_delivery_date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $estimated_delivery_date;
    /**
     * The noon_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $noon_allowed;
    /**
     * The saturday_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $saturday_allowed;
    /**
     * The ten_am_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ten_am_allowed;
    /**
     * The transit_time_guaranteed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $transit_time_guaranteed;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * Constructor method for GetAvailableServicesResult
     * @uses GetAvailableServicesResult::setCos_allowed()
     * @uses GetAvailableServicesResult::setDg_allowed()
     * @uses GetAvailableServicesResult::setEstimated_delivery_date()
     * @uses GetAvailableServicesResult::setNoon_allowed()
     * @uses GetAvailableServicesResult::setSaturday_allowed()
     * @uses GetAvailableServicesResult::setTen_am_allowed()
     * @uses GetAvailableServicesResult::setTransit_time_guaranteed()
     * @uses GetAvailableServicesResult::setType()
     * @param bool $cos_allowed
     * @param bool $dg_allowed
     * @param string $estimated_delivery_date
     * @param bool $noon_allowed
     * @param bool $saturday_allowed
     * @param bool $ten_am_allowed
     * @param bool $transit_time_guaranteed
     * @param string $type
     */
    public function __construct($cos_allowed = null, $dg_allowed = null, $estimated_delivery_date = null, $noon_allowed = null, $saturday_allowed = null, $ten_am_allowed = null, $transit_time_guaranteed = null, $type = null)
    {
        $this
            ->setCos_allowed($cos_allowed)
            ->setDg_allowed($dg_allowed)
            ->setEstimated_delivery_date($estimated_delivery_date)
            ->setNoon_allowed($noon_allowed)
            ->setSaturday_allowed($saturday_allowed)
            ->setTen_am_allowed($ten_am_allowed)
            ->setTransit_time_guaranteed($transit_time_guaranteed)
            ->setType($type);
    }
    /**
     * Get cos_allowed value
     * @return bool|null
     */
    public function getCos_allowed()
    {
        return $this->cos_allowed;
    }
    /**
     * Set cos_allowed value
     * @param bool $cos_allowed
     * @return \Canpar\StructType\GetAvailableServicesResult
     */
    public function setCos_allowed($cos_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($cos_allowed) && !is_bool($cos_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cos_allowed, true), gettype($cos_allowed)), __LINE__);
        }
        $this->cos_allowed = $cos_allowed;
        return $this;
    }
    /**
     * Get dg_allowed value
     * @return bool|null
     */
    public function getDg_allowed()
    {
        return $this->dg_allowed;
    }
    /**
     * Set dg_allowed value
     * @param bool $dg_allowed
     * @return \Canpar\StructType\GetAvailableServicesResult
     */
    public function setDg_allowed($dg_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($dg_allowed) && !is_bool($dg_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dg_allowed, true), gettype($dg_allowed)), __LINE__);
        }
        $this->dg_allowed = $dg_allowed;
        return $this;
    }
    /**
     * Get estimated_delivery_date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEstimated_delivery_date()
    {
        return isset($this->estimated_delivery_date) ? $this->estimated_delivery_date : null;
    }
    /**
     * Set estimated_delivery_date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $estimated_delivery_date
     * @return \Canpar\StructType\GetAvailableServicesResult
     */
    public function setEstimated_delivery_date($estimated_delivery_date = null)
    {
        // validation for constraint: string
        if (!is_null($estimated_delivery_date) && !is_string($estimated_delivery_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimated_delivery_date, true), gettype($estimated_delivery_date)), __LINE__);
        }
        if (is_null($estimated_delivery_date) || (is_array($estimated_delivery_date) && empty($estimated_delivery_date))) {
            unset($this->estimated_delivery_date);
        } else {
            $this->estimated_delivery_date = $estimated_delivery_date;
        }
        return $this;
    }
    /**
     * Get noon_allowed value
     * @return bool|null
     */
    public function getNoon_allowed()
    {
        return $this->noon_allowed;
    }
    /**
     * Set noon_allowed value
     * @param bool $noon_allowed
     * @return \Canpar\StructType\GetAvailableServicesResult
     */
    public function setNoon_allowed($noon_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($noon_allowed) && !is_bool($noon_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noon_allowed, true), gettype($noon_allowed)), __LINE__);
        }
        $this->noon_allowed = $noon_allowed;
        return $this;
    }
    /**
     * Get saturday_allowed value
     * @return bool|null
     */
    public function getSaturday_allowed()
    {
        return $this->saturday_allowed;
    }
    /**
     * Set saturday_allowed value
     * @param bool $saturday_allowed
     * @return \Canpar\StructType\GetAvailableServicesResult
     */
    public function setSaturday_allowed($saturday_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($saturday_allowed) && !is_bool($saturday_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saturday_allowed, true), gettype($saturday_allowed)), __LINE__);
        }
        $this->saturday_allowed = $saturday_allowed;
        return $this;
    }
    /**
     * Get ten_am_allowed value
     * @return bool|null
     */
    public function getTen_am_allowed()
    {
        return $this->ten_am_allowed;
    }
    /**
     * Set ten_am_allowed value
     * @param bool $ten_am_allowed
     * @return \Canpar\StructType\GetAvailableServicesResult
     */
    public function setTen_am_allowed($ten_am_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($ten_am_allowed) && !is_bool($ten_am_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ten_am_allowed, true), gettype($ten_am_allowed)), __LINE__);
        }
        $this->ten_am_allowed = $ten_am_allowed;
        return $this;
    }
    /**
     * Get transit_time_guaranteed value
     * @return bool|null
     */
    public function getTransit_time_guaranteed()
    {
        return $this->transit_time_guaranteed;
    }
    /**
     * Set transit_time_guaranteed value
     * @param bool $transit_time_guaranteed
     * @return \Canpar\StructType\GetAvailableServicesResult
     */
    public function setTransit_time_guaranteed($transit_time_guaranteed = null)
    {
        // validation for constraint: boolean
        if (!is_null($transit_time_guaranteed) && !is_bool($transit_time_guaranteed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($transit_time_guaranteed, true), gettype($transit_time_guaranteed)), __LINE__);
        }
        $this->transit_time_guaranteed = $transit_time_guaranteed;
        return $this;
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \Canpar\StructType\GetAvailableServicesResult
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
        }
        return $this;
    }
}
