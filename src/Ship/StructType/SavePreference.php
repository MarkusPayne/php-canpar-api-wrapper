<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for savePreference StructType
 * @subpackage Structs
 */
class SavePreference extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\SavePreferenceRq
     */
    public $request;
    /**
     * Constructor method for savePreference
     * @uses SavePreference::setRequest()
     * @param \Canpar\Ship\StructType\SavePreferenceRq $request
     */
    public function __construct(\Canpar\Ship\StructType\SavePreferenceRq $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\SavePreferenceRq|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\SavePreferenceRq $request
     * @return \Canpar\Ship\StructType\SavePreference
     */
    public function setRequest(\Canpar\Ship\StructType\SavePreferenceRq $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
