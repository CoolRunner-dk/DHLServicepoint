<?php

namespace DHLServicepoints\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeatureCodeList StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FeatureCodeList
 * @subpackage Structs
 */
class FeatureCodeList extends AbstractStructBase
{
    /**
     * The FeatureCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $FeatureCode;
    /**
     * Constructor method for FeatureCodeList
     * @uses FeatureCodeList::setFeatureCode()
     * @param string[] $featureCode
     */
    public function __construct(array $featureCode = array())
    {
        $this
            ->setFeatureCode($featureCode);
    }
    /**
     * Get FeatureCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getFeatureCode()
    {
        return isset($this->FeatureCode) ? $this->FeatureCode : null;
    }
    /**
     * Set FeatureCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $featureCode
     * @return \DHLServicepoints\StructType\FeatureCodeList
     */
    public function setFeatureCode(array $featureCode = array())
    {
        foreach ($featureCode as $featureCodeListFeatureCodeItem) {
            // validation for constraint: itemType
            if (!is_string($featureCodeListFeatureCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The FeatureCode property can only contain items of string, "%s" given', is_object($featureCodeListFeatureCodeItem) ? get_class($featureCodeListFeatureCodeItem) : gettype($featureCodeListFeatureCodeItem)), __LINE__);
            }
        }
        if (is_null($featureCode) || (is_array($featureCode) && empty($featureCode))) {
            unset($this->FeatureCode);
        } else {
            $this->FeatureCode = $featureCode;
        }
        return $this;
    }
    /**
     * Add item to FeatureCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \DHLServicepoints\StructType\FeatureCodeList
     */
    public function addToFeatureCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The FeatureCode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FeatureCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLServicepoints\StructType\FeatureCodeList
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
