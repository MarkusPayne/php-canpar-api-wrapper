<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteProformaResponse StructType
 * @subpackage Structs
 */
class DeleteProformaResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\DeleteProformaRs
     */
    public $return;
    /**
     * Constructor method for deleteProformaResponse
     * @uses DeleteProformaResponse::setReturn()
     * @param \Canpar\Ship\StructType\DeleteProformaRs $return
     */
    public function __construct(\Canpar\Ship\StructType\DeleteProformaRs $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\DeleteProformaRs|null
     */
    public function getReturn()
    {
        return isset($this->return) ? $this->return : null;
    }
    /**
     * Set return value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\DeleteProformaRs $return
     * @return \Canpar\Ship\StructType\DeleteProformaResponse
     */
    public function setReturn(\Canpar\Ship\StructType\DeleteProformaRs $return = null)
    {
        if (is_null($return) || (is_array($return) && empty($return))) {
            unset($this->return);
        } else {
            $this->return = $return;
        }
        return $this;
    }
}
