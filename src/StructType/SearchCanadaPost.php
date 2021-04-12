<?php

namespace Canpar\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchCanadaPost StructType
 * @subpackage Structs
 */
class SearchCanadaPost extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\SearchCanadaPostRq
     */
    public $request;
    /**
     * Constructor method for searchCanadaPost
     * @uses SearchCanadaPost::setRequest()
     * @param \Canpar\StructType\SearchCanadaPostRq $request
     */
    public function __construct(\Canpar\StructType\SearchCanadaPostRq $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\SearchCanadaPostRq|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\StructType\SearchCanadaPostRq $request
     * @return \Canpar\StructType\SearchCanadaPost
     */
    public function setRequest(\Canpar\StructType\SearchCanadaPostRq $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
