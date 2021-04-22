<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSTORs StructType
 * @subpackage Structs
 */
class SaveSTORs extends AbstractStructBase
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
     * The sto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\STO
     */
    public $sto;
    /**
     * Constructor method for SaveSTORs
     * @uses SaveSTORs::setError()
     * @uses SaveSTORs::setSto()
     * @param string $error
     * @param \Canpar\Ship\StructType\STO $sto
     */
    public function __construct($error = null, \Canpar\Ship\StructType\STO $sto = null)
    {
        $this
            ->setError($error)
            ->setSto($sto);
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
     * @return \Canpar\Ship\StructType\SaveSTORs
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
     * Get sto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\STO|null
     */
    public function getSto()
    {
        return isset($this->sto) ? $this->sto : null;
    }
    /**
     * Set sto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\STO $sto
     * @return \Canpar\Ship\StructType\SaveSTORs
     */
    public function setSto(\Canpar\Ship\StructType\STO $sto = null)
    {
        if (is_null($sto) || (is_array($sto) && empty($sto))) {
            unset($this->sto);
        } else {
            $this->sto = $sto;
        }
        return $this;
    }
}
