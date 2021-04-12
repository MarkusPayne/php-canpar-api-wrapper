<?php

namespace Canpar\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for submitManifestResponse StructType
 * @subpackage Structs
 */
class SubmitManifestResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\SubmitManifestRs
     */
    public $return;
    /**
     * Constructor method for submitManifestResponse
     * @uses SubmitManifestResponse::setReturn()
     * @param \Canpar\StructType\SubmitManifestRs $return
     */
    public function __construct(\Canpar\StructType\SubmitManifestRs $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\SubmitManifestRs|null
     */
    public function getReturn()
    {
        return isset($this->return) ? $this->return : null;
    }
    /**
     * Set return value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\StructType\SubmitManifestRs $return
     * @return \Canpar\StructType\SubmitManifestResponse
     */
    public function setReturn(\Canpar\StructType\SubmitManifestRs $return = null)
    {
        if (is_null($return) || (is_array($return) && empty($return))) {
            unset($this->return);
        } else {
            $this->return = $return;
        }
        return $this;
    }
}
