<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGlobalPreferenceRs StructType
 * @subpackage Structs
 */
class GetGlobalPreferenceRs extends AbstractStructBase
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
     * The global_preference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\GlobalPreference
     */
    public $global_preference;
    /**
     * Constructor method for GetGlobalPreferenceRs
     * @uses GetGlobalPreferenceRs::setError()
     * @uses GetGlobalPreferenceRs::setGlobal_preference()
     * @param string $error
     * @param \Canpar\Ship\StructType\GlobalPreference $global_preference
     */
    public function __construct($error = null, \Canpar\Ship\StructType\GlobalPreference $global_preference = null)
    {
        $this
            ->setError($error)
            ->setGlobal_preference($global_preference);
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
     * @return \Canpar\Ship\StructType\GetGlobalPreferenceRs
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
     * Get global_preference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\GlobalPreference|null
     */
    public function getGlobal_preference()
    {
        return isset($this->global_preference) ? $this->global_preference : null;
    }
    /**
     * Set global_preference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\GlobalPreference $global_preference
     * @return \Canpar\Ship\StructType\GetGlobalPreferenceRs
     */
    public function setGlobal_preference(\Canpar\Ship\StructType\GlobalPreference $global_preference = null)
    {
        if (is_null($global_preference) || (is_array($global_preference) && empty($global_preference))) {
            unset($this->global_preference);
        } else {
            $this->global_preference = $global_preference;
        }
        return $this;
    }
}
