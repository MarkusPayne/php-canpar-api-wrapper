<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAddressBookLimitRs StructType
 * @subpackage Structs
 */
class GetAddressBookLimitRs extends AbstractStructBase
{
    /**
     * The addressBookLimit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\AddressBookLimit
     */
    public $addressBookLimit;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for GetAddressBookLimitRs
     * @uses GetAddressBookLimitRs::setAddressBookLimit()
     * @uses GetAddressBookLimitRs::setError()
     * @param \Canpar\Ship\StructType\AddressBookLimit $addressBookLimit
     * @param string $error
     */
    public function __construct(\Canpar\Ship\StructType\AddressBookLimit $addressBookLimit = null, $error = null)
    {
        $this
            ->setAddressBookLimit($addressBookLimit)
            ->setError($error);
    }
    /**
     * Get addressBookLimit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\AddressBookLimit|null
     */
    public function getAddressBookLimit()
    {
        return isset($this->addressBookLimit) ? $this->addressBookLimit : null;
    }
    /**
     * Set addressBookLimit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\AddressBookLimit $addressBookLimit
     * @return \Canpar\Ship\StructType\GetAddressBookLimitRs
     */
    public function setAddressBookLimit(\Canpar\Ship\StructType\AddressBookLimit $addressBookLimit = null)
    {
        if (is_null($addressBookLimit) || (is_array($addressBookLimit) && empty($addressBookLimit))) {
            unset($this->addressBookLimit);
        } else {
            $this->addressBookLimit = $addressBookLimit;
        }
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
     * @return \Canpar\Ship\StructType\GetAddressBookLimitRs
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
