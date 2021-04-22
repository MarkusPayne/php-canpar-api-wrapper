<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAddressBookRs StructType
 * @subpackage Structs
 */
class SaveAddressBookRs extends AbstractStructBase
{
    /**
     * The address_book
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\AddressBook
     */
    public $address_book;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for SaveAddressBookRs
     * @uses SaveAddressBookRs::setAddress_book()
     * @uses SaveAddressBookRs::setError()
     * @param \Canpar\Ship\StructType\AddressBook $address_book
     * @param string $error
     */
    public function __construct(\Canpar\Ship\StructType\AddressBook $address_book = null, $error = null)
    {
        $this
            ->setAddress_book($address_book)
            ->setError($error);
    }
    /**
     * Get address_book value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\AddressBook|null
     */
    public function getAddress_book()
    {
        return isset($this->address_book) ? $this->address_book : null;
    }
    /**
     * Set address_book value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\AddressBook $address_book
     * @return \Canpar\Ship\StructType\SaveAddressBookRs
     */
    public function setAddress_book(\Canpar\Ship\StructType\AddressBook $address_book = null)
    {
        if (is_null($address_book) || (is_array($address_book) && empty($address_book))) {
            unset($this->address_book);
        } else {
            $this->address_book = $address_book;
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
     * @return \Canpar\Ship\StructType\SaveAddressBookRs
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
