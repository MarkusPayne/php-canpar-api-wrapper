<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessShipmentResult StructType
 * @subpackage Structs
 */
class ProcessShipmentResult extends AbstractStructBase
{
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $errors;
    /**
     * The messages
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $messages;
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\Shipment
     */
    public $shipment;
    /**
     * Constructor method for ProcessShipmentResult
     * @uses ProcessShipmentResult::setErrors()
     * @uses ProcessShipmentResult::setMessages()
     * @uses ProcessShipmentResult::setShipment()
     * @param string[] $errors
     * @param string[] $messages
     * @param \Canpar\Ship\StructType\Shipment $shipment
     */
    public function __construct(array $errors = array(), array $messages = array(), \Canpar\Ship\StructType\Shipment $shipment = null)
    {
        $this
            ->setErrors($errors)
            ->setMessages($messages)
            ->setShipment($shipment);
    }
    /**
     * Get errors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getErrors()
    {
        return isset($this->errors) ? $this->errors : null;
    }
    /**
     * This method is responsible for validating the values passed to the setErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrors method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorsForArrayConstraintsFromSetErrors(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processShipmentResultErrorsItem) {
            // validation for constraint: itemType
            if (!is_string($processShipmentResultErrorsItem)) {
                $invalidValues[] = is_object($processShipmentResultErrorsItem) ? get_class($processShipmentResultErrorsItem) : sprintf('%s(%s)', gettype($processShipmentResultErrorsItem), var_export($processShipmentResultErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errors property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set errors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $errors
     * @return \Canpar\Ship\StructType\ProcessShipmentResult
     */
    public function setErrors(array $errors = array())
    {
        // validation for constraint: array
        if ('' !== ($errorsArrayErrorMessage = self::validateErrorsForArrayConstraintsFromSetErrors($errors))) {
            throw new \InvalidArgumentException($errorsArrayErrorMessage, __LINE__);
        }
        if (is_null($errors) || (is_array($errors) && empty($errors))) {
            unset($this->errors);
        } else {
            $this->errors = $errors;
        }
        return $this;
    }
    /**
     * Add item to errors value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Canpar\Ship\StructType\ProcessShipmentResult
     */
    public function addToErrors($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The errors property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errors[] = $item;
        return $this;
    }
    /**
     * Get messages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getMessages()
    {
        return isset($this->messages) ? $this->messages : null;
    }
    /**
     * This method is responsible for validating the values passed to the setMessages method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessages method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessagesForArrayConstraintsFromSetMessages(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processShipmentResultMessagesItem) {
            // validation for constraint: itemType
            if (!is_string($processShipmentResultMessagesItem)) {
                $invalidValues[] = is_object($processShipmentResultMessagesItem) ? get_class($processShipmentResultMessagesItem) : sprintf('%s(%s)', gettype($processShipmentResultMessagesItem), var_export($processShipmentResultMessagesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The messages property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set messages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $messages
     * @return \Canpar\Ship\StructType\ProcessShipmentResult
     */
    public function setMessages(array $messages = array())
    {
        // validation for constraint: array
        if ('' !== ($messagesArrayErrorMessage = self::validateMessagesForArrayConstraintsFromSetMessages($messages))) {
            throw new \InvalidArgumentException($messagesArrayErrorMessage, __LINE__);
        }
        if (is_null($messages) || (is_array($messages) && empty($messages))) {
            unset($this->messages);
        } else {
            $this->messages = $messages;
        }
        return $this;
    }
    /**
     * Add item to messages value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Canpar\Ship\StructType\ProcessShipmentResult
     */
    public function addToMessages($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The messages property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->messages[] = $item;
        return $this;
    }
    /**
     * Get shipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\Shipment|null
     */
    public function getShipment()
    {
        return isset($this->shipment) ? $this->shipment : null;
    }
    /**
     * Set shipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Canpar\Ship\StructType\Shipment $shipment
     * @return \Canpar\Ship\StructType\ProcessShipmentResult
     */
    public function setShipment(\Canpar\Ship\StructType\Shipment $shipment = null)
    {
        if (is_null($shipment) || (is_array($shipment) && empty($shipment))) {
            unset($this->shipment);
        } else {
            $this->shipment = $shipment;
        }
        return $this;
    }
}
