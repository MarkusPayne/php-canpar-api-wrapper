<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommoditiesRs StructType
 * @subpackage Structs
 */
class GetCommoditiesRs extends AbstractStructBase
{
    /**
     * The commodity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Commodity[]
     */
    public $commodity;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * Constructor method for GetCommoditiesRs
     * @uses GetCommoditiesRs::setCommodity()
     * @uses GetCommoditiesRs::setError()
     * @param \Canpar\Ship\StructType\Commodity[] $commodity
     * @param string $error
     */
    public function __construct(array $commodity = array(), $error = null)
    {
        $this
            ->setCommodity($commodity)
            ->setError($error);
    }
    /**
     * Get commodity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Commodity[]|null
     */
    public function getCommodity()
    {
        return isset($this->commodity) ? $this->commodity : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCommodity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommodity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommodityForArrayConstraintsFromSetCommodity(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCommoditiesRsCommodityItem) {
            // validation for constraint: itemType
            if (!$getCommoditiesRsCommodityItem instanceof \Canpar\Ship\StructType\Commodity) {
                $invalidValues[] = is_object($getCommoditiesRsCommodityItem) ? get_class($getCommoditiesRsCommodityItem) : sprintf('%s(%s)', gettype($getCommoditiesRsCommodityItem), var_export($getCommoditiesRsCommodityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The commodity property can only contain items of type \Canpar\Ship\StructType\Commodity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set commodity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\Commodity[] $commodity
     * @return \Canpar\Ship\StructType\GetCommoditiesRs
     */
    public function setCommodity(array $commodity = array())
    {
        // validation for constraint: array
        if ('' !== ($commodityArrayErrorMessage = self::validateCommodityForArrayConstraintsFromSetCommodity($commodity))) {
            throw new \InvalidArgumentException($commodityArrayErrorMessage, __LINE__);
        }
        if (is_null($commodity) || (is_array($commodity) && empty($commodity))) {
            unset($this->commodity);
        } else {
            $this->commodity = $commodity;
        }
        return $this;
    }
    /**
     * Add item to commodity value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\Commodity $item
     * @return \Canpar\Ship\StructType\GetCommoditiesRs
     */
    public function addToCommodity(\Canpar\Ship\StructType\Commodity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\Commodity) {
            throw new \InvalidArgumentException(sprintf('The commodity property can only contain items of type \Canpar\Ship\StructType\Commodity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->commodity[] = $item;
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
     * @return \Canpar\Ship\StructType\GetCommoditiesRs
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
