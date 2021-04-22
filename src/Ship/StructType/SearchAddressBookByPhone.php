<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchAddressBookByPhone StructType
 * @subpackage Structs
 */
class SearchAddressBookByPhone extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\SearchAddressBookByPhoneRq
     */
    public $request;
    /**
     * Constructor method for searchAddressBookByPhone
     * @uses SearchAddressBookByPhone::setRequest()
     * @param \Canpar\Ship\StructType\SearchAddressBookByPhoneRq $request
     */
    public function __construct(\Canpar\Ship\StructType\SearchAddressBookByPhoneRq $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\SearchAddressBookByPhoneRq|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\SearchAddressBookByPhoneRq $request
     * @return \Canpar\Ship\StructType\SearchAddressBookByPhone
     */
    public function setRequest(\Canpar\Ship\StructType\SearchAddressBookByPhoneRq $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}