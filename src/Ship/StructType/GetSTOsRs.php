<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSTOsRs StructType
 * @subpackage Structs
 */
class GetSTOsRs extends AbstractStructBase
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\STO[]
     */
    public $sto;
    /**
     * Constructor method for GetSTOsRs
     * @uses GetSTOsRs::setError()
     * @uses GetSTOsRs::setSto()
     * @param string $error
     * @param \Canpar\Ship\StructType\STO[] $sto
     */
    public function __construct($error = null, array $sto = array())
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
     * @return \Canpar\Ship\StructType\GetSTOsRs
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
     * @return \Canpar\Ship\StructType\STO[]|null
     */
    public function getSto()
    {
        return isset($this->sto) ? $this->sto : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSto method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStoForArrayConstraintsFromSetSto(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSTOsRsStoItem) {
            // validation for constraint: itemType
            if (!$getSTOsRsStoItem instanceof \Canpar\Ship\StructType\STO) {
                $invalidValues[] = is_object($getSTOsRsStoItem) ? get_class($getSTOsRsStoItem) : sprintf('%s(%s)', gettype($getSTOsRsStoItem), var_export($getSTOsRsStoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sto property can only contain items of type \Canpar\Ship\StructType\STO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set sto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\STO[] $sto
     * @return \Canpar\Ship\StructType\GetSTOsRs
     */
    public function setSto(array $sto = array())
    {
        // validation for constraint: array
        if ('' !== ($stoArrayErrorMessage = self::validateStoForArrayConstraintsFromSetSto($sto))) {
            throw new \InvalidArgumentException($stoArrayErrorMessage, __LINE__);
        }
        if (is_null($sto) || (is_array($sto) && empty($sto))) {
            unset($this->sto);
        } else {
            $this->sto = $sto;
        }
        return $this;
    }
    /**
     * Add item to sto value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\STO $item
     * @return \Canpar\Ship\StructType\GetSTOsRs
     */
    public function addToSto(\Canpar\Ship\StructType\STO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\STO) {
            throw new \InvalidArgumentException(sprintf('The sto property can only contain items of type \Canpar\Ship\StructType\STO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sto[] = $item;
        return $this;
    }
}
