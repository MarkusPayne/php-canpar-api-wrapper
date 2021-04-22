<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProfilesResponse StructType
 * @subpackage Structs
 */
class GetProfilesResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Rate\StructType\GetProfilesRs
     */
    public $return;
    /**
     * Constructor method for getProfilesResponse
     * @uses GetProfilesResponse::setReturn()
     * @param \Canpar\Rate\StructType\GetProfilesRs $return
     */
    public function __construct(\Canpar\Rate\StructType\GetProfilesRs $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Rate\StructType\GetProfilesRs|null
     */
    public function getReturn()
    {
        return isset($this->return) ? $this->return : null;
    }
    /**
     * Set return value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Rate\StructType\GetProfilesRs $return
     * @return \Canpar\Rate\StructType\GetProfilesResponse
     */
    public function setReturn(\Canpar\Rate\StructType\GetProfilesRs $return = null)
    {
        if (is_null($return) || (is_array($return) && empty($return))) {
            unset($this->return);
        } else {
            $this->return = $return;
        }
        return $this;
    }
}