<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCommodityRs StructType
 * @subpackage Structs
 */
class SaveCommodityRs extends AbstractStructBase
{
    /**
     * The commodity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Commodity
     */
    public $commodity;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for SaveCommodityRs
     * @uses SaveCommodityRs::setCommodity()
     * @uses SaveCommodityRs::setError()
     * @param \Canpar\Ship\StructType\Commodity $commodity
     * @param string $error
     */
    public function __construct(\Canpar\Ship\StructType\Commodity $commodity = null, $error = null)
    {
        $this
            ->setCommodity($commodity)
            ->setError($error);
    }
    /**
     * Get commodity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Commodity|null
     */
    public function getCommodity()
    {
        return isset($this->commodity) ? $this->commodity : null;
    }
    /**
     * Set commodity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\Commodity $commodity
     * @return \Canpar\Ship\StructType\SaveCommodityRs
     */
    public function setCommodity(\Canpar\Ship\StructType\Commodity $commodity = null)
    {
        if (is_null($commodity) || (is_array($commodity) && empty($commodity))) {
            unset($this->commodity);
        } else {
            $this->commodity = $commodity;
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
     * @return \Canpar\Ship\StructType\SaveCommodityRs
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
