<?php

namespace Canpar\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProfileRs StructType
 * @subpackage Structs
 */
class GetProfileRs extends AbstractStructBase
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
     * The profile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\Profile
     */
    public $profile;
    /**
     * Constructor method for GetProfileRs
     * @uses GetProfileRs::setError()
     * @uses GetProfileRs::setProfile()
     * @param string $error
     * @param \Canpar\StructType\Profile $profile
     */
    public function __construct($error = null, \Canpar\StructType\Profile $profile = null)
    {
        $this
            ->setError($error)
            ->setProfile($profile);
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
     * @return \Canpar\StructType\GetProfileRs
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
     * Get profile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\Profile|null
     */
    public function getProfile()
    {
        return isset($this->profile) ? $this->profile : null;
    }
    /**
     * Set profile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\StructType\Profile $profile
     * @return \Canpar\StructType\GetProfileRs
     */
    public function setProfile(\Canpar\StructType\Profile $profile = null)
    {
        if (is_null($profile) || (is_array($profile) && empty($profile))) {
            unset($this->profile);
        } else {
            $this->profile = $profile;
        }
        return $this;
    }
}
