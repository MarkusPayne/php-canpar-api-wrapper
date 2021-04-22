<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBoxesRs StructType
 * @subpackage Structs
 */
class GetBoxesRs extends AbstractStructBase
{
    /**
     * The box
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Box[]
     */
    public $box;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for GetBoxesRs
     * @uses GetBoxesRs::setBox()
     * @uses GetBoxesRs::setError()
     * @param \Canpar\Ship\StructType\Box[] $box
     * @param string $error
     */
    public function __construct(array $box = array(), $error = null)
    {
        $this
            ->setBox($box)
            ->setError($error);
    }
    /**
     * Get box value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Box[]|null
     */
    public function getBox()
    {
        return isset($this->box) ? $this->box : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBox method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBoxForArrayConstraintsFromSetBox(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBoxesRsBoxItem) {
            // validation for constraint: itemType
            if (!$getBoxesRsBoxItem instanceof \Canpar\Ship\StructType\Box) {
                $invalidValues[] = is_object($getBoxesRsBoxItem) ? get_class($getBoxesRsBoxItem) : sprintf('%s(%s)', gettype($getBoxesRsBoxItem), var_export($getBoxesRsBoxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The box property can only contain items of type \Canpar\Ship\StructType\Box, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set box value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\Box[] $box
     * @return \Canpar\Ship\StructType\GetBoxesRs
     */
    public function setBox(array $box = array())
    {
        // validation for constraint: array
        if ('' !== ($boxArrayErrorMessage = self::validateBoxForArrayConstraintsFromSetBox($box))) {
            throw new \InvalidArgumentException($boxArrayErrorMessage, __LINE__);
        }
        if (is_null($box) || (is_array($box) && empty($box))) {
            unset($this->box);
        } else {
            $this->box = $box;
        }
        return $this;
    }
    /**
     * Add item to box value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\Box $item
     * @return \Canpar\Ship\StructType\GetBoxesRs
     */
    public function addToBox(\Canpar\Ship\StructType\Box $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\Box) {
            throw new \InvalidArgumentException(sprintf('The box property can only contain items of type \Canpar\Ship\StructType\Box, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->box[] = $item;
        return $this;
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
     * @return \Canpar\Ship\StructType\GetBoxesRs
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
}
