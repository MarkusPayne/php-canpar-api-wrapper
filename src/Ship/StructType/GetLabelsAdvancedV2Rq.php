<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelsAdvancedV2Rq StructType
 * @subpackage Structs
 */
class GetLabelsAdvancedV2Rq extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $id;
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Canpar\Ship\StructType\FunctionParameter[]
     */
    public $parameters;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The user_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $user_id;
    /**
     * Constructor method for GetLabelsAdvancedV2Rq
     * @uses GetLabelsAdvancedV2Rq::setId()
     * @uses GetLabelsAdvancedV2Rq::setParameters()
     * @uses GetLabelsAdvancedV2Rq::setPassword()
     * @uses GetLabelsAdvancedV2Rq::setUser_id()
     * @param int $id
     * @param \Canpar\Ship\StructType\FunctionParameter[] $parameters
     * @param string $password
     * @param string $user_id
     */
    public function __construct($id = null, array $parameters = array(), $password = null, $user_id = null)
    {
        $this
            ->setId($id)
            ->setParameters($parameters)
            ->setPassword($password)
            ->setUser_id($user_id);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Canpar\Ship\StructType\GetLabelsAdvancedV2Rq
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get parameters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Canpar\Ship\StructType\FunctionParameter[]|null
     */
    public function getParameters()
    {
        return isset($this->parameters) ? $this->parameters : null;
    }
    /**
     * This method is responsible for validating the values passed to the setParameters method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParameters method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParametersForArrayConstraintsFromSetParameters(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLabelsAdvancedV2RqParametersItem) {
            // validation for constraint: itemType
            if (!$getLabelsAdvancedV2RqParametersItem instanceof \Canpar\Ship\StructType\FunctionParameter) {
                $invalidValues[] = is_object($getLabelsAdvancedV2RqParametersItem) ? get_class($getLabelsAdvancedV2RqParametersItem) : sprintf('%s(%s)', gettype($getLabelsAdvancedV2RqParametersItem), var_export($getLabelsAdvancedV2RqParametersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The parameters property can only contain items of type \Canpar\Ship\StructType\FunctionParameter, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set parameters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\FunctionParameter[] $parameters
     * @return \Canpar\Ship\StructType\GetLabelsAdvancedV2Rq
     */
    public function setParameters(array $parameters = array())
    {
        // validation for constraint: array
        if ('' !== ($parametersArrayErrorMessage = self::validateParametersForArrayConstraintsFromSetParameters($parameters))) {
            throw new \InvalidArgumentException($parametersArrayErrorMessage, __LINE__);
        }
        if (is_null($parameters) || (is_array($parameters) && empty($parameters))) {
            unset($this->parameters);
        } else {
            $this->parameters = $parameters;
        }
        return $this;
    }
    /**
     * Add item to parameters value
     * @throws \InvalidArgumentException
     * @param \Canpar\Ship\StructType\FunctionParameter $item
     * @return \Canpar\Ship\StructType\GetLabelsAdvancedV2Rq
     */
    public function addToParameters(\Canpar\Ship\StructType\FunctionParameter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Canpar\Ship\StructType\FunctionParameter) {
            throw new \InvalidArgumentException(sprintf('The parameters property can only contain items of type \Canpar\Ship\StructType\FunctionParameter, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->parameters[] = $item;
        return $this;
    }
    /**
     * Get password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->password) ? $this->password : null;
    }
    /**
     * Set password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \Canpar\Ship\StructType\GetLabelsAdvancedV2Rq
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->password);
        } else {
            $this->password = $password;
        }
        return $this;
    }
    /**
     * Get user_id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUser_id()
    {
        return isset($this->user_id) ? $this->user_id : null;
    }
    /**
     * Set user_id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $user_id
     * @return \Canpar\Ship\StructType\GetLabelsAdvancedV2Rq
     */
    public function setUser_id($user_id = null)
    {
        // validation for constraint: string
        if (!is_null($user_id) && !is_string($user_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user_id, true), gettype($user_id)), __LINE__);
        }
        if (is_null($user_id) || (is_array($user_id) && empty($user_id))) {
            unset($this->user_id);
        } else {
            $this->user_id = $user_id;
        }
        return $this;
    }
}
