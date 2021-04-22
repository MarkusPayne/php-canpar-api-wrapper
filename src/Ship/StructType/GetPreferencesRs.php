<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPreferencesRs StructType
 * @subpackage Structs
 */
class GetPreferencesRs extends AbstractStructBase
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
     * The preferences
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Preference[]
     */
    public $preferences;
    /**
     * Constructor method for GetPreferencesRs
     * @uses GetPreferencesRs::setError()
     * @uses GetPreferencesRs::setPreferences()
     * @param string $error
     * @param \Canpar\Ship\StructType\Preference[] $preferences
     */
    public function __construct($error = null, array $preferences = array())
    {
        $this
            ->setError($error)
            ->setPreferences($preferences);
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
     * @return \Canpar\Ship\StructType\GetPreferencesRs
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
     * Get preferences value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Preference[]|null
     */
    public function getPreferences()
    {
        return isset($this->preferences) ? $this->preferences : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPreferences method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPreferences method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePreferencesForArrayConstraintsFromSetPreferences(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPreferencesRsPreferencesItem) {
            // validation for constraint: itemType
            if (!$getPreferencesRsPreferencesItem instanceof \Canpar\Ship\StructType\Preference) {
                $invalidValues[] = is_object($getPreferencesRsPreferencesItem) ? get_class($getPreferencesRsPreferencesItem) : sprintf('%s(%s)', gettype($getPreferencesRsPreferencesItem), var_export($getPreferencesRsPreferencesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The preferences property can only contain items of type \Canpar\Ship\StructType\Preference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set preferences value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\Preference[] $preferences
     * @return \Canpar\Ship\StructType\GetPreferencesRs
     */
    public function setPreferences(array $preferences = array())
    {
        // validation for constraint: array
        if ('' !== ($preferencesArrayErrorMessage = self::validatePreferencesForArrayConstraintsFromSetPreferences($preferences))) {
            throw new \InvalidArgumentException($preferencesArrayErrorMessage, __LINE__);
        }
        if (is_null($preferences) || (is_array($preferences) && empty($preferences))) {
            unset($this->preferences);
        } else {
            $this->preferences = $preferences;
        }
        return $this;
    }
    /**
     * Add item to preferences value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\Preference $item
     * @return \Canpar\Ship\StructType\GetPreferencesRs
     */
    public function addToPreferences(\Canpar\Ship\StructType\Preference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\Preference) {
            throw new \InvalidArgumentException(sprintf('The preferences property can only contain items of type \Canpar\Ship\StructType\Preference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->preferences[] = $item;
        return $this;
    }
}
