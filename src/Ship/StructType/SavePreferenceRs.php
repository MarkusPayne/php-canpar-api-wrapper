<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePreferenceRs StructType
 * @subpackage Structs
 */
class SavePreferenceRs extends AbstractStructBase
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
     * The preference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Preference
     */
    public $preference;
    /**
     * Constructor method for SavePreferenceRs
     * @uses SavePreferenceRs::setError()
     * @uses SavePreferenceRs::setPreference()
     * @param string $error
     * @param \Canpar\Ship\StructType\Preference $preference
     */
    public function __construct($error = null, \Canpar\Ship\StructType\Preference $preference = null)
    {
        $this
            ->setError($error)
            ->setPreference($preference);
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
     * @return \Canpar\Ship\StructType\SavePreferenceRs
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
     * Get preference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Preference|null
     */
    public function getPreference()
    {
        return isset($this->preference) ? $this->preference : null;
    }
    /**
     * Set preference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\Preference $preference
     * @return \Canpar\Ship\StructType\SavePreferenceRs
     */
    public function setPreference(\Canpar\Ship\StructType\Preference $preference = null)
    {
        if (is_null($preference) || (is_array($preference) && empty($preference))) {
            unset($this->preference);
        } else {
            $this->preference = $preference;
        }
        return $this;
    }
}
