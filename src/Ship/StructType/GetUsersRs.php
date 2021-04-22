<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsersRs StructType
 * @subpackage Structs
 */
class GetUsersRs extends AbstractStructBase
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\CanshipUser[]
     */
    public $user;
    /**
     * Constructor method for GetUsersRs
     * @uses GetUsersRs::setError()
     * @uses GetUsersRs::setUser()
     * @param string $error
     * @param \Canpar\Ship\StructType\CanshipUser[] $user
     */
    public function __construct($error = null, array $user = array())
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
     * @return \Canpar\Ship\StructType\GetUsersRs
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
     * @return \Canpar\Ship\StructType\CanshipUser[]|null
     */
    public function getUser()
    {
        return isset($this->user) ? $this->user : null;
    }
    /**
     * This method is responsible for validating the values passed to the setUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserForArrayConstraintsFromSetUser(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUsersRsUserItem) {
            // validation for constraint: itemType
            if (!$getUsersRsUserItem instanceof \Canpar\Ship\StructType\CanshipUser) {
                $invalidValues[] = is_object($getUsersRsUserItem) ? get_class($getUsersRsUserItem) : sprintf('%s(%s)', gettype($getUsersRsUserItem), var_export($getUsersRsUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The user property can only contain items of type \Canpar\Ship\StructType\CanshipUser, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set user value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\CanshipUser[] $user
     * @return \Canpar\Ship\StructType\GetUsersRs
     */
    public function setUser(array $user = array())
    {
        // validation for constraint: array
        if ('' !== ($userArrayErrorMessage = self::validateUserForArrayConstraintsFromSetUser($user))) {
            throw new \InvalidArgumentException($userArrayErrorMessage, __LINE__);
        }
        if (is_null($user) || (is_array($user) && empty($user))) {
            unset($this->user);
        } else {
            $this->user = $user;
        }
        return $this;
    }
    /**
     * Add item to user value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\CanshipUser $item
     * @return \Canpar\Ship\StructType\GetUsersRs
     */
    public function addToUser(\Canpar\Ship\StructType\CanshipUser $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\CanshipUser) {
            throw new \InvalidArgumentException(sprintf('The user property can only contain items of type \Canpar\Ship\StructType\CanshipUser, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->user[] = $item;
        return $this;
    }
}
