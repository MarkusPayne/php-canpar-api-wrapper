<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAvailableServices StructType
 * @subpackage Structs
 */
class GetAvailableServices extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Rate\StructType\GetAvailableServicesRq
     */
    public $request;
    /**
     * Constructor method for getAvailableServices
     * @uses GetAvailableServices::setRequest()
     * @param \Canpar\Rate\StructType\GetAvailableServicesRq $request
     */
    public function __construct(\Canpar\Rate\StructType\GetAvailableServicesRq $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Rate\StructType\GetAvailableServicesRq|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Rate\StructType\GetAvailableServicesRq $request
     * @return \Canpar\Rate\StructType\GetAvailableServices
     */
    public function setRequest(\Canpar\Rate\StructType\GetAvailableServicesRq $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
