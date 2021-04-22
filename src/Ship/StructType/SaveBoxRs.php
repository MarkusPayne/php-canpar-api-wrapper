<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBoxRs StructType
 * @subpackage Structs
 */
class SaveBoxRs extends AbstractStructBase
{
    /**
     * The box
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Box
     */
    public $box;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for SaveBoxRs
     * @uses SaveBoxRs::setBox()
     * @uses SaveBoxRs::setError()
     * @param \Canpar\Ship\StructType\Box $box
     * @param string $error
     */
    public function __construct(\Canpar\Ship\StructType\Box $box = null, $error = null)
    {
        $this
            ->setBox($box)
            ->setError($error);
    }
    /**
     * Get box value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Box|null
     */
    public function getBox()
    {
        return isset($this->box) ? $this->box : null;
    }
    /**
     * Set box value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\Box $box
     * @return \Canpar\Ship\StructType\SaveBoxRs
     */
    public function setBox(\Canpar\Ship\StructType\Box $box = null)
    {
        if (is_null($box) || (is_array($box) && empty($box))) {
            unset($this->box);
        } else {
            $this->box = $box;
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
     * @return \Canpar\Ship\StructType\SaveBoxRs
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
