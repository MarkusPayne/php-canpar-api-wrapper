<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Service StructType
 * @subpackage Structs
 */
class Service extends AbstractStructBase
{
    /**
     * The cod_allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $cod_allowed;
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
     * The dim_factor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $dim_factor;
    /**
     * The half_kg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $half_kg;
    /**
     * The half_kg_increment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $half_kg_increment;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $id;
    /**
     * The max_cod_per_piece
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $max_cod_per_piece;
    /**
     * The max_cod_per_shipment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $max_cod_per_shipment;
    /**
     * The max_dv_per_piece
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $max_dv_per_piece;
    /**
     * The max_dv_per_shipment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $max_dv_per_shipment;
    /**
     * The max_num_of_pieces
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $max_num_of_pieces;
    /**
     * The max_weight_per_piece
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $max_weight_per_piece;
    /**
     * The max_weight_per_shipment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $max_weight_per_shipment;
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
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * Constructor method for Service
     * @uses Service::setCod_allowed()
     * @uses Service::setCos_allowed()
     * @uses Service::setDg_allowed()
     * @uses Service::setDim_factor()
     * @uses Service::setHalf_kg()
     * @uses Service::setHalf_kg_increment()
     * @uses Service::setId()
     * @uses Service::setMax_cod_per_piece()
     * @uses Service::setMax_cod_per_shipment()
     * @uses Service::setMax_dv_per_piece()
     * @uses Service::setMax_dv_per_shipment()
     * @uses Service::setMax_num_of_pieces()
     * @uses Service::setMax_weight_per_piece()
     * @uses Service::setMax_weight_per_shipment()
     * @uses Service::setNoon_allowed()
     * @uses Service::setSaturday_allowed()
     * @uses Service::setTen_am_allowed()
     * @uses Service::setType()
     * @param bool $cod_allowed
     * @param bool $cos_allowed
     * @param bool $dg_allowed
     * @param float $dim_factor
     * @param bool $half_kg
     * @param bool $half_kg_increment
     * @param int $id
     * @param float $max_cod_per_piece
     * @param float $max_cod_per_shipment
     * @param float $max_dv_per_piece
     * @param float $max_dv_per_shipment
     * @param int $max_num_of_pieces
     * @param int $max_weight_per_piece
     * @param int $max_weight_per_shipment
     * @param bool $noon_allowed
     * @param bool $saturday_allowed
     * @param bool $ten_am_allowed
     * @param string $type
     */
    public function __construct($cod_allowed = null, $cos_allowed = null, $dg_allowed = null, $dim_factor = null, $half_kg = null, $half_kg_increment = null, $id = null, $max_cod_per_piece = null, $max_cod_per_shipment = null, $max_dv_per_piece = null, $max_dv_per_shipment = null, $max_num_of_pieces = null, $max_weight_per_piece = null, $max_weight_per_shipment = null, $noon_allowed = null, $saturday_allowed = null, $ten_am_allowed = null, $type = null)
    {
        $this
            ->setCod_allowed($cod_allowed)
            ->setCos_allowed($cos_allowed)
            ->setDg_allowed($dg_allowed)
            ->setDim_factor($dim_factor)
            ->setHalf_kg($half_kg)
            ->setHalf_kg_increment($half_kg_increment)
            ->setId($id)
            ->setMax_cod_per_piece($max_cod_per_piece)
            ->setMax_cod_per_shipment($max_cod_per_shipment)
            ->setMax_dv_per_piece($max_dv_per_piece)
            ->setMax_dv_per_shipment($max_dv_per_shipment)
            ->setMax_num_of_pieces($max_num_of_pieces)
            ->setMax_weight_per_piece($max_weight_per_piece)
            ->setMax_weight_per_shipment($max_weight_per_shipment)
            ->setNoon_allowed($noon_allowed)
            ->setSaturday_allowed($saturday_allowed)
            ->setTen_am_allowed($ten_am_allowed)
            ->setType($type);
    }
    /**
     * Get cod_allowed value
     * @return bool|null
     */
    public function getCod_allowed()
    {
        return $this->cod_allowed;
    }
    /**
     * Set cod_allowed value
     * @param bool $cod_allowed
     * @return \Canpar\Rate\StructType\Service
     */
    public function setCod_allowed($cod_allowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($cod_allowed) && !is_bool($cod_allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cod_allowed, true), gettype($cod_allowed)), __LINE__);
        }
        $this->cod_allowed = $cod_allowed;
        return $this;
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
     * @return \Canpar\Rate\StructType\Service
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
     * @return \Canpar\Rate\StructType\Service
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
     * Get dim_factor value
     * @return float|null
     */
    public function getDim_factor()
    {
        return $this->dim_factor;
    }
    /**
     * Set dim_factor value
     * @param float $dim_factor
     * @return \Canpar\Rate\StructType\Service
     */
    public function setDim_factor($dim_factor = null)
    {
        // validation for constraint: float
        if (!is_null($dim_factor) && !(is_float($dim_factor) || is_numeric($dim_factor))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dim_factor, true), gettype($dim_factor)), __LINE__);
        }
        $this->dim_factor = $dim_factor;
        return $this;
    }
    /**
     * Get half_kg value
     * @return bool|null
     */
    public function getHalf_kg()
    {
        return $this->half_kg;
    }
    /**
     * Set half_kg value
     * @param bool $half_kg
     * @return \Canpar\Rate\StructType\Service
     */
    public function setHalf_kg($half_kg = null)
    {
        // validation for constraint: boolean
        if (!is_null($half_kg) && !is_bool($half_kg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($half_kg, true), gettype($half_kg)), __LINE__);
        }
        $this->half_kg = $half_kg;
        return $this;
    }
    /**
     * Get half_kg_increment value
     * @return bool|null
     */
    public function getHalf_kg_increment()
    {
        return $this->half_kg_increment;
    }
    /**
     * Set half_kg_increment value
     * @param bool $half_kg_increment
     * @return \Canpar\Rate\StructType\Service
     */
    public function setHalf_kg_increment($half_kg_increment = null)
    {
        // validation for constraint: boolean
        if (!is_null($half_kg_increment) && !is_bool($half_kg_increment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($half_kg_increment, true), gettype($half_kg_increment)), __LINE__);
        }
        $this->half_kg_increment = $half_kg_increment;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Canpar\Rate\StructType\Service
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get max_cod_per_piece value
     * @return float|null
     */
    public function getMax_cod_per_piece()
    {
        return $this->max_cod_per_piece;
    }
    /**
     * Set max_cod_per_piece value
     * @param float $max_cod_per_piece
     * @return \Canpar\Rate\StructType\Service
     */
    public function setMax_cod_per_piece($max_cod_per_piece = null)
    {
        // validation for constraint: float
        if (!is_null($max_cod_per_piece) && !(is_float($max_cod_per_piece) || is_numeric($max_cod_per_piece))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($max_cod_per_piece, true), gettype($max_cod_per_piece)), __LINE__);
        }
        $this->max_cod_per_piece = $max_cod_per_piece;
        return $this;
    }
    /**
     * Get max_cod_per_shipment value
     * @return float|null
     */
    public function getMax_cod_per_shipment()
    {
        return $this->max_cod_per_shipment;
    }
    /**
     * Set max_cod_per_shipment value
     * @param float $max_cod_per_shipment
     * @return \Canpar\Rate\StructType\Service
     */
    public function setMax_cod_per_shipment($max_cod_per_shipment = null)
    {
        // validation for constraint: float
        if (!is_null($max_cod_per_shipment) && !(is_float($max_cod_per_shipment) || is_numeric($max_cod_per_shipment))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($max_cod_per_shipment, true), gettype($max_cod_per_shipment)), __LINE__);
        }
        $this->max_cod_per_shipment = $max_cod_per_shipment;
        return $this;
    }
    /**
     * Get max_dv_per_piece value
     * @return float|null
     */
    public function getMax_dv_per_piece()
    {
        return $this->max_dv_per_piece;
    }
    /**
     * Set max_dv_per_piece value
     * @param float $max_dv_per_piece
     * @return \Canpar\Rate\StructType\Service
     */
    public function setMax_dv_per_piece($max_dv_per_piece = null)
    {
        // validation for constraint: float
        if (!is_null($max_dv_per_piece) && !(is_float($max_dv_per_piece) || is_numeric($max_dv_per_piece))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($max_dv_per_piece, true), gettype($max_dv_per_piece)), __LINE__);
        }
        $this->max_dv_per_piece = $max_dv_per_piece;
        return $this;
    }
    /**
     * Get max_dv_per_shipment value
     * @return float|null
     */
    public function getMax_dv_per_shipment()
    {
        return $this->max_dv_per_shipment;
    }
    /**
     * Set max_dv_per_shipment value
     * @param float $max_dv_per_shipment
     * @return \Canpar\Rate\StructType\Service
     */
    public function setMax_dv_per_shipment($max_dv_per_shipment = null)
    {
        // validation for constraint: float
        if (!is_null($max_dv_per_shipment) && !(is_float($max_dv_per_shipment) || is_numeric($max_dv_per_shipment))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($max_dv_per_shipment, true), gettype($max_dv_per_shipment)), __LINE__);
        }
        $this->max_dv_per_shipment = $max_dv_per_shipment;
        return $this;
    }
    /**
     * Get max_num_of_pieces value
     * @return int|null
     */
    public function getMax_num_of_pieces()
    {
        return $this->max_num_of_pieces;
    }
    /**
     * Set max_num_of_pieces value
     * @param int $max_num_of_pieces
     * @return \Canpar\Rate\StructType\Service
     */
    public function setMax_num_of_pieces($max_num_of_pieces = null)
    {
        // validation for constraint: int
        if (!is_null($max_num_of_pieces) && !(is_int($max_num_of_pieces) || ctype_digit($max_num_of_pieces))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($max_num_of_pieces, true), gettype($max_num_of_pieces)), __LINE__);
        }
        $this->max_num_of_pieces = $max_num_of_pieces;
        return $this;
    }
    /**
     * Get max_weight_per_piece value
     * @return int|null
     */
    public function getMax_weight_per_piece()
    {
        return $this->max_weight_per_piece;
    }
    /**
     * Set max_weight_per_piece value
     * @param int $max_weight_per_piece
     * @return \Canpar\Rate\StructType\Service
     */
    public function setMax_weight_per_piece($max_weight_per_piece = null)
    {
        // validation for constraint: int
        if (!is_null($max_weight_per_piece) && !(is_int($max_weight_per_piece) || ctype_digit($max_weight_per_piece))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($max_weight_per_piece, true), gettype($max_weight_per_piece)), __LINE__);
        }
        $this->max_weight_per_piece = $max_weight_per_piece;
        return $this;
    }
    /**
     * Get max_weight_per_shipment value
     * @return int|null
     */
    public function getMax_weight_per_shipment()
    {
        return $this->max_weight_per_shipment;
    }
    /**
     * Set max_weight_per_shipment value
     * @param int $max_weight_per_shipment
     * @return \Canpar\Rate\StructType\Service
     */
    public function setMax_weight_per_shipment($max_weight_per_shipment = null)
    {
        // validation for constraint: int
        if (!is_null($max_weight_per_shipment) && !(is_int($max_weight_per_shipment) || ctype_digit($max_weight_per_shipment))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($max_weight_per_shipment, true), gettype($max_weight_per_shipment)), __LINE__);
        }
        $this->max_weight_per_shipment = $max_weight_per_shipment;
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
     * @return \Canpar\Rate\StructType\Service
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
     * @return \Canpar\Rate\StructType\Service
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
     * @return \Canpar\Rate\StructType\Service
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
     * @return \Canpar\Rate\StructType\Service
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
