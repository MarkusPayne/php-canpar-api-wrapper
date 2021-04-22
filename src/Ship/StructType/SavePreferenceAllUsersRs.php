<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePreferenceAllUsersRs StructType
 * @subpackage Structs
 */
class SavePreferenceAllUsersRs extends AbstractStructBase
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Preference[]
     */
    public $preference;
    /**
     * Constructor method for SavePreferenceAllUsersRs
     * @uses SavePreferenceAllUsersRs::setError()
     * @uses SavePreferenceAllUsersRs::setPreference()
     * @param string $error
     * @param \Canpar\Ship\StructType\Preference[] $preference
     */
    public function __construct($error = null, array $preference = array())
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
     * @return \Canpar\Ship\StructType\SavePreferenceAllUsersRs
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
     * @return \Canpar\Ship\StructType\Preference[]|null
     */
    public function getPreference()
    {
        return isset($this->preference) ? $this->preference : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPreference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPreference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePreferenceForArrayConstraintsFromSetPreference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $savePreferenceAllUsersRsPreferenceItem) {
            // validation for constraint: itemType
            if (!$savePreferenceAllUsersRsPreferenceItem instanceof \Canpar\Ship\StructType\Preference) {
                $invalidValues[] = is_object($savePreferenceAllUsersRsPreferenceItem) ? get_class($savePreferenceAllUsersRsPreferenceItem) : sprintf('%s(%s)', gettype($savePreferenceAllUsersRsPreferenceItem), var_export($savePreferenceAllUsersRsPreferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The preference property can only contain items of type \Canpar\Ship\StructType\Preference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set preference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\Preference[] $preference
     * @return \Canpar\Ship\StructType\SavePreferenceAllUsersRs
     */
    public function setPreference(array $preference = array())
    {
        // validation for constraint: array
        if ('' !== ($preferenceArrayErrorMessage = self::validatePreferenceForArrayConstraintsFromSetPreference($preference))) {
            throw new \InvalidArgumentException($preferenceArrayErrorMessage, __LINE__);
        }
        if (is_null($preference) || (is_array($preference) && empty($preference))) {
            unset($this->preference);
        } else {
            $this->preference = $preference;
        }
        return $this;
    }
    /**
     * Add item to preference value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\Preference $item
     * @return \Canpar\Ship\StructType\SavePreferenceAllUsersRs
     */
    public function addToPreference(\Canpar\Ship\StructType\Preference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\Preference) {
            throw new \InvalidArgumentException(sprintf('The preference property can only contain items of type \Canpar\Ship\StructType\Preference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->preference[] = $item;
        return $this;
    }
}
