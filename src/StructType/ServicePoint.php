<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServicePoint StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ServicePoint
 * @subpackage Structs
 */
class ServicePoint extends AbstractStructBase
{
    /**
     * The Identity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ServicePointRef
     */
    public $Identity;
    /**
     * The ServiceAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ServiceAddress
     */
    public $ServiceAddress;
    /**
     * The FeatureCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FeatureCodeList
     */
    public $FeatureCodes;
    /**
     * Constructor method for ServicePoint
     * @uses ServicePoint::setIdentity()
     * @uses ServicePoint::setServiceAddress()
     * @uses ServicePoint::setFeatureCodes()
     * @param \StructType\ServicePointRef $identity
     * @param \StructType\ServiceAddress $serviceAddress
     * @param \StructType\FeatureCodeList $featureCodes
     */
    public function __construct(\StructType\ServicePointRef $identity = null, \StructType\ServiceAddress $serviceAddress = null, \StructType\FeatureCodeList $featureCodes = null)
    {
        $this
            ->setIdentity($identity)
            ->setServiceAddress($serviceAddress)
            ->setFeatureCodes($featureCodes);
    }
    /**
     * Get Identity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ServicePointRef|null
     */
    public function getIdentity()
    {
        return isset($this->Identity) ? $this->Identity : null;
    }
    /**
     * Set Identity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ServicePointRef $identity
     * @return \StructType\ServicePoint
     */
    public function setIdentity(\StructType\ServicePointRef $identity = null)
    {
        if (is_null($identity) || (is_array($identity) && empty($identity))) {
            unset($this->Identity);
        } else {
            $this->Identity = $identity;
        }
        return $this;
    }
    /**
     * Get ServiceAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ServiceAddress|null
     */
    public function getServiceAddress()
    {
        return isset($this->ServiceAddress) ? $this->ServiceAddress : null;
    }
    /**
     * Set ServiceAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ServiceAddress $serviceAddress
     * @return \StructType\ServicePoint
     */
    public function setServiceAddress(\StructType\ServiceAddress $serviceAddress = null)
    {
        if (is_null($serviceAddress) || (is_array($serviceAddress) && empty($serviceAddress))) {
            unset($this->ServiceAddress);
        } else {
            $this->ServiceAddress = $serviceAddress;
        }
        return $this;
    }
    /**
     * Get FeatureCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FeatureCodeList|null
     */
    public function getFeatureCodes()
    {
        return isset($this->FeatureCodes) ? $this->FeatureCodes : null;
    }
    /**
     * Set FeatureCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\FeatureCodeList $featureCodes
     * @return \StructType\ServicePoint
     */
    public function setFeatureCodes(\StructType\FeatureCodeList $featureCodes = null)
    {
        if (is_null($featureCodes) || (is_array($featureCodes) && empty($featureCodes))) {
            unset($this->FeatureCodes);
        } else {
            $this->FeatureCodes = $featureCodes;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ServicePoint
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
