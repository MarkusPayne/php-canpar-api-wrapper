<?php

namespace Canpar\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for COD StructType
 * @subpackage Structs
 */
class COD extends AbstractStructBase
{
    /**
     * The amount_1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amount_1;
    /**
     * The amount_2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amount_2;
    /**
     * The amount_3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amount_3;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $id;
    /**
     * The inserted_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $inserted_on;
    /**
     * The post_dated_cheque_1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $post_dated_cheque_1;
    /**
     * The post_dated_cheque_2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $post_dated_cheque_2;
    /**
     * The post_dated_cheque_3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $post_dated_cheque_3;
    /**
     * The updated_on
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $updated_on;
    /**
     * Constructor method for COD
     * @uses COD::setAmount_1()
     * @uses COD::setAmount_2()
     * @uses COD::setAmount_3()
     * @uses COD::setId()
     * @uses COD::setInserted_on()
     * @uses COD::setPost_dated_cheque_1()
     * @uses COD::setPost_dated_cheque_2()
     * @uses COD::setPost_dated_cheque_3()
     * @uses COD::setUpdated_on()
     * @param float $amount_1
     * @param float $amount_2
     * @param float $amount_3
     * @param int $id
     * @param string $inserted_on
     * @param string $post_dated_cheque_1
     * @param string $post_dated_cheque_2
     * @param string $post_dated_cheque_3
     * @param string $updated_on
     */
    public function __construct($amount_1 = null, $amount_2 = null, $amount_3 = null, $id = null, $inserted_on = null, $post_dated_cheque_1 = null, $post_dated_cheque_2 = null, $post_dated_cheque_3 = null, $updated_on = null)
    {
        $this
            ->setAmount_1($amount_1)
            ->setAmount_2($amount_2)
            ->setAmount_3($amount_3)
            ->setId($id)
            ->setInserted_on($inserted_on)
            ->setPost_dated_cheque_1($post_dated_cheque_1)
            ->setPost_dated_cheque_2($post_dated_cheque_2)
            ->setPost_dated_cheque_3($post_dated_cheque_3)
            ->setUpdated_on($updated_on);
    }
    /**
     * Get amount value
     * @return amount
     */
    public function getAmount_1()
    {
        return $this->amount_1;
    }
    /**
     * Set amount value
     * @param amount $amount
     * @return \Canpar\Rate\StructType\COD
     */
    public function setAmount_1($amount_1 = null)
    {
        // validation for constraint: float
        if (!is_null($amount_1) && !(is_float($amount_1) || is_numeric($amount_1))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount_1, true), gettype($amount_1)), __LINE__);
        }
        $this->amount_1 = $amount_1;
        return $this;
    }
    /**
     * Get amount value
     * @return amount
     */
    public function getAmount_2()
    {
        return $this->amount_2;
    }
    /**
     * Set amount value
     * @param amount $amount
     * @return \Canpar\Rate\StructType\COD
     */
    public function setAmount_2($amount_2 = null)
    {
        // validation for constraint: float
        if (!is_null($amount_2) && !(is_float($amount_2) || is_numeric($amount_2))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount_2, true), gettype($amount_2)), __LINE__);
        }
        $this->amount_2 = $amount_2;
        return $this;
    }
    /**
     * Get amount value
     * @return amount
     */
    public function getAmount_3()
    {
        return $this->amount_3;
    }
    /**
     * Set amount value
     * @param amount $amount
     * @return \Canpar\Rate\StructType\COD
     */
    public function setAmount_3($amount_3 = null)
    {
        // validation for constraint: float
        if (!is_null($amount_3) && !(is_float($amount_3) || is_numeric($amount_3))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount_3, true), gettype($amount_3)), __LINE__);
        }
        $this->amount_3 = $amount_3;
        return $this;
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
     * @return \Canpar\Rate\StructType\COD
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
     * Get inserted_on value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInserted_on()
    {
        return isset($this->inserted_on) ? $this->inserted_on : null;
    }
    /**
     * Set inserted_on value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inserted_on
     * @return \Canpar\Rate\StructType\COD
     */
    public function setInserted_on($inserted_on = null)
    {
        // validation for constraint: string
        if (!is_null($inserted_on) && !is_string($inserted_on)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inserted_on, true), gettype($inserted_on)), __LINE__);
        }
        if (is_null($inserted_on) || (is_array($inserted_on) && empty($inserted_on))) {
            unset($this->inserted_on);
        } else {
            $this->inserted_on = $inserted_on;
        }
        return $this;
    }
    /**
     * Get post_dated_cheque value
     * @return post_dated_cheque
     */
    public function getPost_dated_cheque_1()
    {
        return isset($this->post_dated_cheque_1) ? $this->post_dated_cheque_1 : null;
    }
    /**
     * Set post_dated_cheque value
     * @param post_dated_cheque $post_dated_cheque
     * @return \Canpar\Rate\StructType\COD
     */
    public function setPost_dated_cheque_1($post_dated_cheque_1 = null)
    {
        // validation for constraint: string
        if (!is_null($post_dated_cheque_1) && !is_string($post_dated_cheque_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($post_dated_cheque_1, true), gettype($post_dated_cheque_1)), __LINE__);
        }
        if (is_null($post_dated_cheque_1) || (is_array($post_dated_cheque_1) && empty($post_dated_cheque_1))) {
            unset($this->post_dated_cheque_1);
        } else {
            $this->post_dated_cheque_1 = $post_dated_cheque_1;
        }
        return $this;
    }
    /**
     * Get post_dated_cheque value
     * @return post_dated_cheque
     */
    public function getPost_dated_cheque_2()
    {
        return isset($this->post_dated_cheque_2) ? $this->post_dated_cheque_2 : null;
    }
    /**
     * Set post_dated_cheque value
     * @param post_dated_cheque $post_dated_cheque
     * @return \Canpar\Rate\StructType\COD
     */
    public function setPost_dated_cheque_2($post_dated_cheque_2 = null)
    {
        // validation for constraint: string
        if (!is_null($post_dated_cheque_2) && !is_string($post_dated_cheque_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($post_dated_cheque_2, true), gettype($post_dated_cheque_2)), __LINE__);
        }
        if (is_null($post_dated_cheque_2) || (is_array($post_dated_cheque_2) && empty($post_dated_cheque_2))) {
            unset($this->post_dated_cheque_2);
        } else {
            $this->post_dated_cheque_2 = $post_dated_cheque_2;
        }
        return $this;
    }
    /**
     * Get post_dated_cheque value
     * @return post_dated_cheque
     */
    public function getPost_dated_cheque_3()
    {
        return isset($this->post_dated_cheque_3) ? $this->post_dated_cheque_3 : null;
    }
    /**
     * Set post_dated_cheque value
     * @param post_dated_cheque $post_dated_cheque
     * @return \Canpar\Rate\StructType\COD
     */
    public function setPost_dated_cheque_3($post_dated_cheque_3 = null)
    {
        // validation for constraint: string
        if (!is_null($post_dated_cheque_3) && !is_string($post_dated_cheque_3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($post_dated_cheque_3, true), gettype($post_dated_cheque_3)), __LINE__);
        }
        if (is_null($post_dated_cheque_3) || (is_array($post_dated_cheque_3) && empty($post_dated_cheque_3))) {
            unset($this->post_dated_cheque_3);
        } else {
            $this->post_dated_cheque_3 = $post_dated_cheque_3;
        }
        return $this;
    }
    /**
     * Get updated_on value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUpdated_on()
    {
        return isset($this->updated_on) ? $this->updated_on : null;
    }
    /**
     * Set updated_on value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $updated_on
     * @return \Canpar\Rate\StructType\COD
     */
    public function setUpdated_on($updated_on = null)
    {
        // validation for constraint: string
        if (!is_null($updated_on) && !is_string($updated_on)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updated_on, true), gettype($updated_on)), __LINE__);
        }
        if (is_null($updated_on) || (is_array($updated_on) && empty($updated_on))) {
            unset($this->updated_on);
        } else {
            $this->updated_on = $updated_on;
        }
        return $this;
    }
}
