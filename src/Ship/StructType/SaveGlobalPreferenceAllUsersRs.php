<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGlobalPreferenceAllUsersRs StructType
 * @subpackage Structs
 */
class SaveGlobalPreferenceAllUsersRs extends AbstractStructBase
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\GlobalPreference[]
     */
    public $global_preference;
    /**
     * Constructor method for SaveGlobalPreferenceAllUsersRs
     * @uses SaveGlobalPreferenceAllUsersRs::setError()
     * @uses SaveGlobalPreferenceAllUsersRs::setGlobal_preference()
     * @param string $error
     * @param \Canpar\Ship\StructType\GlobalPreference[] $global_preference
     */
    public function __construct($error = null, array $global_preference = array())
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
     * @return \Canpar\Ship\StructType\SaveGlobalPreferenceAllUsersRs
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
     * @return \Canpar\Ship\StructType\GlobalPreference[]|null
     */
    public function getGlobal_preference()
    {
        return isset($this->global_preference) ? $this->global_preference : null;
    }
    /**
     * This method is responsible for validating the values passed to the setGlobal_preference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGlobal_preference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGlobal_preferenceForArrayConstraintsFromSetGlobal_preference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveGlobalPreferenceAllUsersRsGlobal_preferenceItem) {
            // validation for constraint: itemType
            if (!$saveGlobalPreferenceAllUsersRsGlobal_preferenceItem instanceof \Canpar\Ship\StructType\GlobalPreference) {
                $invalidValues[] = is_object($saveGlobalPreferenceAllUsersRsGlobal_preferenceItem) ? get_class($saveGlobalPreferenceAllUsersRsGlobal_preferenceItem) : sprintf('%s(%s)', gettype($saveGlobalPreferenceAllUsersRsGlobal_preferenceItem), var_export($saveGlobalPreferenceAllUsersRsGlobal_preferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The global_preference property can only contain items of type \Canpar\Ship\StructType\GlobalPreference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set global_preference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\GlobalPreference[] $global_preference
     * @return \Canpar\Ship\StructType\SaveGlobalPreferenceAllUsersRs
     */
    public function setGlobal_preference(array $global_preference = array())
    {
        // validation for constraint: array
        if ('' !== ($global_preferenceArrayErrorMessage = self::validateGlobal_preferenceForArrayConstraintsFromSetGlobal_preference($global_preference))) {
            throw new \InvalidArgumentException($global_preferenceArrayErrorMessage, __LINE__);
        }
        if (is_null($global_preference) || (is_array($global_preference) && empty($global_preference))) {
            unset($this->global_preference);
        } else {
            $this->global_preference = $global_preference;
        }
        return $this;
    }
    /**
     * Add item to global_preference value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\GlobalPreference $item
     * @return \Canpar\Ship\StructType\SaveGlobalPreferenceAllUsersRs
     */
    public function addToGlobal_preference(\Canpar\Ship\StructType\GlobalPreference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\GlobalPreference) {
            throw new \InvalidArgumentException(sprintf('The global_preference property can only contain items of type \Canpar\Ship\StructType\GlobalPreference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->global_preference[] = $item;
        return $this;
    }
}
