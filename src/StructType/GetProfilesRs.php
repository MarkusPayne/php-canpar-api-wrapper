<?php

namespace Canpar\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProfilesRs StructType
 * @subpackage Structs
 */
class GetProfilesRs extends AbstractStructBase
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\Profile[]
     */
    public $profile;
    /**
     * Constructor method for GetProfilesRs
     * @uses GetProfilesRs::setError()
     * @uses GetProfilesRs::setProfile()
     * @param string $error
     * @param \Canpar\StructType\Profile[] $profile
     */
    public function __construct($error = null, array $profile = array())
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
     * @return \Canpar\StructType\GetProfilesRs
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
     * @return \Canpar\StructType\Profile[]|null
     */
    public function getProfile()
    {
        return isset($this->profile) ? $this->profile : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfile method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfileForArrayConstraintsFromSetProfile(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getProfilesRsProfileItem) {
            // validation for constraint: itemType
            if (!$getProfilesRsProfileItem instanceof \Canpar\StructType\Profile) {
                $invalidValues[] = is_object($getProfilesRsProfileItem) ? get_class($getProfilesRsProfileItem) : sprintf('%s(%s)', gettype($getProfilesRsProfileItem), var_export($getProfilesRsProfileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The profile property can only contain items of type \Canpar\StructType\Profile, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set profile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\StructType\Profile[] $profile
     * @return \Canpar\StructType\GetProfilesRs
     */
    public function setProfile(array $profile = array())
    {
        // validation for constraint: array
        if ('' !== ($profileArrayErrorMessage = self::validateProfileForArrayConstraintsFromSetProfile($profile))) {
            throw new \InvalidArgumentException($profileArrayErrorMessage, __LINE__);
        }
        if (is_null($profile) || (is_array($profile) && empty($profile))) {
            unset($this->profile);
        } else {
            $this->profile = $profile;
        }
        return $this;
    }
    /**
     * Add item to profile value
     * @throws \InvalidArgumentException
     * @param \Canpar\StructType\Profile $item
     * @return \Canpar\StructType\GetProfilesRs
     */
    public function addToProfile(\Canpar\StructType\Profile $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\StructType\Profile) {
            throw new \InvalidArgumentException(sprintf('The profile property can only contain items of type \Canpar\StructType\Profile, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->profile[] = $item;
        return $this;
    }
}
