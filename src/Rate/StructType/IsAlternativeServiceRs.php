<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsAlternativeServiceRs StructType
 * @subpackage Structs
 */
class IsAlternativeServiceRs extends AbstractStructBase
{
    /**
     * The alternative_service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $alternative_service;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for IsAlternativeServiceRs
     * @uses IsAlternativeServiceRs::setAlternative_service()
     * @uses IsAlternativeServiceRs::setError()
     * @param bool $alternative_service
     * @param string $error
     */
    public function __construct($alternative_service = null, $error = null)
    {
        $this
            ->setAlternative_service($alternative_service)
            ->setError($error);
    }
    /**
     * Get alternative_service value
     * @return bool|null
     */
    public function getAlternative_service()
    {
        return $this->alternative_service;
    }
    /**
     * Set alternative_service value
     * @param bool $alternative_service
     * @return \Canpar\Rate\StructType\IsAlternativeServiceRs
     */
    public function setAlternative_service($alternative_service = null)
    {
        // validation for constraint: boolean
        if (!is_null($alternative_service) && !is_bool($alternative_service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($alternative_service, true), gettype($alternative_service)), __LINE__);
        }
        $this->alternative_service = $alternative_service;
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
     * @return \Canpar\Rate\StructType\IsAlternativeServiceRs
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
