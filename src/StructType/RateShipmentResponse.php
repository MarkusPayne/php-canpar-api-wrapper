<?php

namespace Canpar\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rateShipmentResponse StructType
 * @subpackage Structs
 */
class RateShipmentResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\RateShipmentRs
     */
    public $return;
    /**
     * Constructor method for rateShipmentResponse
     * @uses RateShipmentResponse::setReturn()
     * @param \Canpar\StructType\RateShipmentRs $return
     */
    public function __construct(\Canpar\StructType\RateShipmentRs $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\RateShipmentRs|null
     */
    public function getReturn()
    {
        return isset($this->return) ? $this->return : null;
    }
    /**
     * Set return value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\StructType\RateShipmentRs $return
     * @return \Canpar\StructType\RateShipmentResponse
     */
    public function setReturn(\Canpar\StructType\RateShipmentRs $return = null)
    {
        if (is_null($return) || (is_array($return) && empty($return))) {
            unset($this->return);
        } else {
            $this->return = $return;
        }
        return $this;
    }
}
