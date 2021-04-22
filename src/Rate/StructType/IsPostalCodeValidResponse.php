<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isPostalCodeValidResponse StructType
 * @subpackage Structs
 */
class IsPostalCodeValidResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Rate\StructType\IsPostalCodeValidRs
     */
    public $return;
    /**
     * Constructor method for isPostalCodeValidResponse
     * @uses IsPostalCodeValidResponse::setReturn()
     * @param \Canpar\Rate\StructType\IsPostalCodeValidRs $return
     */
    public function __construct(\Canpar\Rate\StructType\IsPostalCodeValidRs $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Rate\StructType\IsPostalCodeValidRs|null
     */
    public function getReturn()
    {
        return isset($this->return) ? $this->return : null;
    }
    /**
     * Set return value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Rate\StructType\IsPostalCodeValidRs $return
     * @return \Canpar\Rate\StructType\IsPostalCodeValidResponse
     */
    public function setReturn(\Canpar\Rate\StructType\IsPostalCodeValidRs $return = null)
    {
        if (is_null($return) || (is_array($return) && empty($return))) {
            unset($this->return);
        } else {
            $this->return = $return;
        }
        return $this;
    }
}
