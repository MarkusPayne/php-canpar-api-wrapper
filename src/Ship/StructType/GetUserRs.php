<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserRs StructType
 * @subpackage Structs
 */
class GetUserRs extends AbstractStructBase
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
     * The user
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\CanshipUser
     */
    public $user;
    /**
     * Constructor method for GetUserRs
     * @uses GetUserRs::setError()
     * @uses GetUserRs::setUser()
     * @param string $error
     * @param \Canpar\Ship\StructType\CanshipUser $user
     */
    public function __construct($error = null, \Canpar\Ship\StructType\CanshipUser $user = null)
    {
        $this
            ->setError($error)
            ->setUser($user);
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
     * @return \Canpar\Ship\StructType\GetUserRs
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
     * Get user value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\CanshipUser|null
     */
    public function getUser()
    {
        return isset($this->user) ? $this->user : null;
    }
    /**
     * Set user value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\CanshipUser $user
     * @return \Canpar\Ship\StructType\GetUserRs
     */
    public function setUser(\Canpar\Ship\StructType\CanshipUser $user = null)
    {
        if (is_null($user) || (is_array($user) && empty($user))) {
            unset($this->user);
        } else {
            $this->user = $user;
        }
        return $this;
    }
}
