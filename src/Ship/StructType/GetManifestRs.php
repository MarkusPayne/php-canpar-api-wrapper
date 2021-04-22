<?php

namespace Canpar\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetManifestRs StructType
 * @subpackage Structs
 */
class GetManifestRs extends AbstractStructBase
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
     * The manifest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $manifest;
    /**
     * Constructor method for GetManifestRs
     * @uses GetManifestRs::setError()
     * @uses GetManifestRs::setManifest()
     * @param string $error
     * @param string $manifest
     */
    public function __construct($error = null, $manifest = null)
    {
        $this
            ->setError($error)
            ->setManifest($manifest);
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
     * @return \Canpar\Ship\StructType\GetManifestRs
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
     * Get manifest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getManifest()
    {
        return isset($this->manifest) ? $this->manifest : null;
    }
    /**
     * Set manifest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $manifest
     * @return \Canpar\Ship\StructType\GetManifestRs
     */
    public function setManifest($manifest = null)
    {
        // validation for constraint: string
        if (!is_null($manifest) && !is_string($manifest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manifest, true), gettype($manifest)), __LINE__);
        }
        if (is_null($manifest) || (is_array($manifest) && empty($manifest))) {
            unset($this->manifest);
        } else {
            $this->manifest = $manifest;
        }
        return $this;
    }
}
