<?php

namespace Canpar\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isAlternativeService StructType
 * @subpackage Structs
 */
class IsAlternativeService extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\IsAlternativeServiceRq
     */
    public $request;
    /**
     * Constructor method for isAlternativeService
     * @uses IsAlternativeService::setRequest()
     * @param \Canpar\StructType\IsAlternativeServiceRq $request
     */
    public function __construct(\Canpar\StructType\IsAlternativeServiceRq $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\IsAlternativeServiceRq|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\StructType\IsAlternativeServiceRq $request
     * @return \Canpar\StructType\IsAlternativeService
     */
    public function setRequest(\Canpar\StructType\IsAlternativeServiceRq $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
