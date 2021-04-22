<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProformaRs StructType
 * @subpackage Structs
 */
class SaveProformaRs extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * The proforma
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Proforma
     */
    public $proforma;
    /**
     * Constructor method for SaveProformaRs
     * @uses SaveProformaRs::setError()
     * @uses SaveProformaRs::setProforma()
     * @param string $error
     * @param \Canpar\Ship\StructType\Proforma $proforma
     */
    public function __construct($error = null, \Canpar\Ship\StructType\Proforma $proforma = null)
    {
        $this
            ->setError($error)
            ->setProforma($proforma);
    }
    /**
     * Get error value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getError()
    {
        return isset($this->error) ? $this->error : null;
    }
    /**
     * Set error value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $error
     * @return \Canpar\Ship\StructType\SaveProformaRs
     */
    public function setError($error = null)
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        if (is_null($error) || (is_array($error) && empty($error))) {
            unset($this->error);
        } else {
            $this->error = $error;
        }
        return $this;
    }
    /**
     * Get proforma value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Proforma|null
     */
    public function getProforma()
    {
        return isset($this->proforma) ? $this->proforma : null;
    }
    /**
     * Set proforma value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\Proforma $proforma
     * @return \Canpar\Ship\StructType\SaveProformaRs
     */
    public function setProforma(\Canpar\Ship\StructType\Proforma $proforma = null)
    {
        if (is_null($proforma) || (is_array($proforma) && empty($proforma))) {
            unset($this->proforma);
        } else {
            $this->proforma = $proforma;
        }
        return $this;
    }
}
