<?php

namespace DHLServicepoints\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServicePointRef StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ServicePointRef
 * @subpackage Structs
 */
class ServicePointRef extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Id;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DisplayName;
    /**
     * Constructor method for ServicePointRef
     * @uses ServicePointRef::setId()
     * @uses ServicePointRef::setDisplayName()
     * @param string $id
     * @param string $displayName
     */
    public function __construct($id = null, $displayName = null)
    {
        $this
            ->setId($id)
            ->setDisplayName($displayName);
    }
    /**
     * Get Id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId()
    {
        return isset($this->Id) ? $this->Id : null;
    }
    /**
     * Set Id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \DHLServicepoints\StructType\ServicePointRef
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->Id);
        } else {
            $this->Id = $id;
        }
        return $this;
    }
    /**
     * Get DisplayName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDisplayName()
    {
        return isset($this->DisplayName) ? $this->DisplayName : null;
    }
    /**
     * Set DisplayName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $displayName
     * @return \DHLServicepoints\StructType\ServicePointRef
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        if (is_null($displayName) || (is_array($displayName) && empty($displayName))) {
            unset($this->DisplayName);
        } else {
            $this->DisplayName = $displayName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLServicepoints\StructType\ServicePointRef
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
