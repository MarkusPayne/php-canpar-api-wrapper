<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsResidentialRs StructType
 * @subpackage Structs
 */
class IsResidentialRs extends AbstractStructBase
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
     * The residential
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $residential;
    /**
     * Constructor method for IsResidentialRs
     * @uses IsResidentialRs::setError()
     * @uses IsResidentialRs::setResidential()
     * @param string $error
     * @param bool $residential
     */
    public function __construct($error = null, $residential = null)
    {
        $this
            ->setError($error)
            ->setResidential($residential);
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
     * @return \Canpar\Rate\StructType\IsResidentialRs
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
     * Get residential value
     * @return bool|null
     */
    public function getResidential()
    {
        return $this->residential;
    }
    /**
     * Set residential value
     * @param bool $residential
     * @return \Canpar\Rate\StructType\IsResidentialRs
     */
    public function setResidential($residential = null)
    {
        // validation for constraint: boolean
        if (!is_null($residential) && !is_bool($residential)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($residential, true), gettype($residential)), __LINE__);
        }
        $this->residential = $residential;
        return $this;
    }
}
