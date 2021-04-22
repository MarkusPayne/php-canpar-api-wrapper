<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAddressBookByCostCentreRs StructType
 * @subpackage Structs
 */
class SearchAddressBookByCostCentreRs extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\AddressBook[]
     */
    public $address;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for SearchAddressBookByCostCentreRs
     * @uses SearchAddressBookByCostCentreRs::setAddress()
     * @uses SearchAddressBookByCostCentreRs::setError()
     * @param \Canpar\Ship\StructType\AddressBook[] $address
     * @param string $error
     */
    public function __construct(array $address = array(), $error = null)
    {
        $this
            ->setAddress($address)
            ->setError($error);
    }
    /**
     * Get address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\AddressBook[]|null
     */
    public function getAddress()
    {
        return isset($this->address) ? $this->address : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressForArrayConstraintsFromSetAddress(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAddressBookByCostCentreRsAddressItem) {
            // validation for constraint: itemType
            if (!$searchAddressBookByCostCentreRsAddressItem instanceof \Canpar\Ship\StructType\AddressBook) {
                $invalidValues[] = is_object($searchAddressBookByCostCentreRsAddressItem) ? get_class($searchAddressBookByCostCentreRsAddressItem) : sprintf('%s(%s)', gettype($searchAddressBookByCostCentreRsAddressItem), var_export($searchAddressBookByCostCentreRsAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The address property can only contain items of type \Canpar\Ship\StructType\AddressBook, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\AddressBook[] $address
     * @return \Canpar\Ship\StructType\SearchAddressBookByCostCentreRs
     */
    public function setAddress(array $address = array())
    {
        // validation for constraint: array
        if ('' !== ($addressArrayErrorMessage = self::validateAddressForArrayConstraintsFromSetAddress($address))) {
            throw new \InvalidArgumentException($addressArrayErrorMessage, __LINE__);
        }
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
        }
        return $this;
    }
    /**
     * Add item to address value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\AddressBook $item
     * @return \Canpar\Ship\StructType\SearchAddressBookByCostCentreRs
     */
    public function addToAddress(\Canpar\Ship\StructType\AddressBook $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\AddressBook) {
            throw new \InvalidArgumentException(sprintf('The address property can only contain items of type \Canpar\Ship\StructType\AddressBook, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->address[] = $item;
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
     * @return \Canpar\Ship\StructType\SearchAddressBookByCostCentreRs
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
