<?php

namespace Canpar\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rateShipmentAllPremiums StructType
 * @subpackage Structs
 */
class RateShipmentAllPremiums extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\StructType\RateShipmentAllPremiumsRq
     */
    public $request;
    /**
     * Constructor method for rateShipmentAllPremiums
     * @uses RateShipmentAllPremiums::setRequest()
     * @param \Canpar\StructType\RateShipmentAllPremiumsRq $request
     */
    public function __construct(\Canpar\StructType\RateShipmentAllPremiumsRq $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\StructType\RateShipmentAllPremiumsRq|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\StructType\RateShipmentAllPremiumsRq $request
     * @return \Canpar\StructType\RateShipmentAllPremiums
     */
    public function setRequest(\Canpar\StructType\RateShipmentAllPremiumsRq $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
