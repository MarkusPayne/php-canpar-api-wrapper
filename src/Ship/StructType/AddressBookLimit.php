<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressBookLimit StructType
 * @subpackage Structs
 */
class AddressBookLimit extends AbstractStructBase
{
    /**
     * The allowed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $allowed;
    /**
     * The used
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $used;
    /**
     * Constructor method for AddressBookLimit
     * @uses AddressBookLimit::setAllowed()
     * @uses AddressBookLimit::setUsed()
     * @param int $allowed
     * @param int $used
     */
    public function __construct($allowed = null, $used = null)
    {
        $this
            ->setAllowed($allowed)
            ->setUsed($used);
    }
    /**
     * Get allowed value
     * @return int|null
     */
    public function getAllowed()
    {
        return $this->allowed;
    }
    /**
     * Set allowed value
     * @param int $allowed
     * @return \Canpar\Ship\StructType\AddressBookLimit
     */
    public function setAllowed($allowed = null)
    {
        // validation for constraint: int
        if (!is_null($allowed) && !(is_int($allowed) || ctype_digit($allowed))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($allowed, true), gettype($allowed)), __LINE__);
        }
        $this->allowed = $allowed;
        return $this;
    }
    /**
     * Get used value
     * @return int|null
     */
    public function getUsed()
    {
        return $this->used;
    }
    /**
     * Set used value
     * @param int $used
     * @return \Canpar\Ship\StructType\AddressBookLimit
     */
    public function setUsed($used = null)
    {
        // validation for constraint: int
        if (!is_null($used) && !(is_int($used) || ctype_digit($used))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($used, true), gettype($used)), __LINE__);
        }
        $this->used = $used;
        return $this;
    }
}
