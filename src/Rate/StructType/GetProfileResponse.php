<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProfileResponse StructType
 * @subpackage Structs
 */
class GetProfileResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Rate\StructType\GetProfileRs
     */
    public $return;
    /**
     * Constructor method for getProfileResponse
     * @uses GetProfileResponse::setReturn()
     * @param \Canpar\Rate\StructType\GetProfileRs $return
     */
    public function __construct(\Canpar\Rate\StructType\GetProfileRs $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Rate\StructType\GetProfileRs|null
     */
    public function getReturn()
    {
        return isset($this->return) ? $this->return : null;
    }
    /**
     * Set return value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Rate\StructType\GetProfileRs $return
     * @return \Canpar\Rate\StructType\GetProfileResponse
     */
    public function setReturn(\Canpar\Rate\StructType\GetProfileRs $return = null)
    {
        if (is_null($return) || (is_array($return) && empty($return))) {
            unset($this->return);
        } else {
            $this->return = $return;
        }
        return $this;
    }
}
