<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastManifestNumberRs StructType
 * @subpackage Structs
 */
class GetLastManifestNumberRs extends AbstractStructBase
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
     * The manifest_num
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $manifest_num;
    /**
     * Constructor method for GetLastManifestNumberRs
     * @uses GetLastManifestNumberRs::setError()
     * @uses GetLastManifestNumberRs::setManifest_num()
     * @param string $error
     * @param string $manifest_num
     */
    public function __construct($error = null, $manifest_num = null)
    {
        $this
            ->setError($error)
            ->setManifest_num($manifest_num);
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
     * @return \Canpar\Ship\StructType\GetLastManifestNumberRs
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
     * Get manifest_num value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getManifest_num()
    {
        return isset($this->manifest_num) ? $this->manifest_num : null;
    }
    /**
     * Set manifest_num value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $manifest_num
     * @return \Canpar\Ship\StructType\GetLastManifestNumberRs
     */
    public function setManifest_num($manifest_num = null)
    {
        // validation for constraint: string
        if (!is_null($manifest_num) && !is_string($manifest_num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manifest_num, true), gettype($manifest_num)), __LINE__);
        }
        if (is_null($manifest_num) || (is_array($manifest_num) && empty($manifest_num))) {
            unset($this->manifest_num);
        } else {
            $this->manifest_num = $manifest_num;
        }
        return $this;
    }
}
