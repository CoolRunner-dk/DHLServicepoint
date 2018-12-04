<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NearbyServicePoint StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:NearbyServicePoint
 * @subpackage Structs
 */
class NearbyServicePoint extends AbstractStructBase
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
     * The Distance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Distance;
    /**
     * The StreetName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StreetName;
    /**
     * The PostCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostCode;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $City;
    /**
     * The FeatureCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FeatureCodeList
     */
    public $FeatureCodes;
    /**
     * The RouteDistance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RouteDistance;
    /**
     * Constructor method for NearbyServicePoint
     * @uses NearbyServicePoint::setIdentity()
     * @uses NearbyServicePoint::setDistance()
     * @uses NearbyServicePoint::setStreetName()
     * @uses NearbyServicePoint::setPostCode()
     * @uses NearbyServicePoint::setCity()
     * @uses NearbyServicePoint::setFeatureCodes()
     * @uses NearbyServicePoint::setRouteDistance()
     * @param \StructType\ServicePointRef $identity
     * @param float $distance
     * @param string $streetName
     * @param string $postCode
     * @param string $city
     * @param \StructType\FeatureCodeList $featureCodes
     * @param float $routeDistance
     */
    public function __construct(\StructType\ServicePointRef $identity = null, $distance = null, $streetName = null, $postCode = null, $city = null, \StructType\FeatureCodeList $featureCodes = null, $routeDistance = null)
    {
        $this
            ->setIdentity($identity)
            ->setDistance($distance)
            ->setStreetName($streetName)
            ->setPostCode($postCode)
            ->setCity($city)
            ->setFeatureCodes($featureCodes)
            ->setRouteDistance($routeDistance);
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
     * @return \StructType\NearbyServicePoint
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
     * Get Distance value
     * @return float|null
     */
    public function getDistance()
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param float $distance
     * @return \StructType\NearbyServicePoint
     */
    public function setDistance($distance = null)
    {
        $this->Distance = $distance;
        return $this;
    }
    /**
     * Get StreetName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreetName()
    {
        return isset($this->StreetName) ? $this->StreetName : null;
    }
    /**
     * Set StreetName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $streetName
     * @return \StructType\NearbyServicePoint
     */
    public function setStreetName($streetName = null)
    {
        // validation for constraint: string
        if (!is_null($streetName) && !is_string($streetName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetName)), __LINE__);
        }
        if (is_null($streetName) || (is_array($streetName) && empty($streetName))) {
            unset($this->StreetName);
        } else {
            $this->StreetName = $streetName;
        }
        return $this;
    }
    /**
     * Get PostCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostCode()
    {
        return isset($this->PostCode) ? $this->PostCode : null;
    }
    /**
     * Set PostCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postCode
     * @return \StructType\NearbyServicePoint
     */
    public function setPostCode($postCode = null)
    {
        // validation for constraint: string
        if (!is_null($postCode) && !is_string($postCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postCode)), __LINE__);
        }
        if (is_null($postCode) || (is_array($postCode) && empty($postCode))) {
            unset($this->PostCode);
        } else {
            $this->PostCode = $postCode;
        }
        return $this;
    }
    /**
     * Get City value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity()
    {
        return isset($this->City) ? $this->City : null;
    }
    /**
     * Set City value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \StructType\NearbyServicePoint
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->City);
        } else {
            $this->City = $city;
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
     * @return \StructType\NearbyServicePoint
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
     * Get RouteDistance value
     * @return float|null
     */
    public function getRouteDistance()
    {
        return $this->RouteDistance;
    }
    /**
     * Set RouteDistance value
     * @param float $routeDistance
     * @return \StructType\NearbyServicePoint
     */
    public function setRouteDistance($routeDistance = null)
    {
        $this->RouteDistance = $routeDistance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\NearbyServicePoint
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
