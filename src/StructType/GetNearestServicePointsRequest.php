<?php

namespace DHLServicepoints\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNearestServicePointsRequest StructType
 * @subpackage Structs
 */
class GetNearestServicePointsRequest extends AbstractStructBase
{
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CountryCode;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Street;
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
     * @var \DHLServicepoints\StructType\FeatureCodeList
     */
    public $FeatureCodes;
    /**
     * The MaxNumberOfItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxNumberOfItems;
    /**
     * The BitCatCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \DHLServicepoints\StructType\BitCatCodeList
     */
    public $BitCatCodes;
    /**
     * Constructor method for GetNearestServicePointsRequest
     * @uses GetNearestServicePointsRequest::setCountryCode()
     * @uses GetNearestServicePointsRequest::setStreet()
     * @uses GetNearestServicePointsRequest::setPostCode()
     * @uses GetNearestServicePointsRequest::setCity()
     * @uses GetNearestServicePointsRequest::setFeatureCodes()
     * @uses GetNearestServicePointsRequest::setMaxNumberOfItems()
     * @uses GetNearestServicePointsRequest::setBitCatCodes()
     * @param string $countryCode
     * @param string $street
     * @param string $postCode
     * @param string $city
     * @param \DHLServicepoints\StructType\FeatureCodeList $featureCodes
     * @param int $maxNumberOfItems
     * @param \DHLServicepoints\StructType\BitCatCodeList $bitCatCodes
     */
    public function __construct($countryCode = null, $street = null, $postCode = null, $city = null, \DHLServicepoints\StructType\FeatureCodeList $featureCodes = null, $maxNumberOfItems = null, \DHLServicepoints\StructType\BitCatCodeList $bitCatCodes = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setStreet($street)
            ->setPostCode($postCode)
            ->setCity($city)
            ->setFeatureCodes($featureCodes)
            ->setMaxNumberOfItems($maxNumberOfItems)
            ->setBitCatCodes($bitCatCodes);
    }
    /**
     * Get CountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryCode()
    {
        return isset($this->CountryCode) ? $this->CountryCode : null;
    }
    /**
     * Set CountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryCode
     * @return \DHLServicepoints\StructType\GetNearestServicePointsRequest
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->CountryCode);
        } else {
            $this->CountryCode = $countryCode;
        }
        return $this;
    }
    /**
     * Get Street value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet()
    {
        return isset($this->Street) ? $this->Street : null;
    }
    /**
     * Set Street value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street
     * @return \DHLServicepoints\StructType\GetNearestServicePointsRequest
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        if (is_null($street) || (is_array($street) && empty($street))) {
            unset($this->Street);
        } else {
            $this->Street = $street;
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
     * @return \DHLServicepoints\StructType\GetNearestServicePointsRequest
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
     * @return \DHLServicepoints\StructType\GetNearestServicePointsRequest
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
     * @return \DHLServicepoints\StructType\FeatureCodeList|null
     */
    public function getFeatureCodes()
    {
        return isset($this->FeatureCodes) ? $this->FeatureCodes : null;
    }
    /**
     * Set FeatureCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \DHLServicepoints\StructType\FeatureCodeList $featureCodes
     * @return \DHLServicepoints\StructType\GetNearestServicePointsRequest
     */
    public function setFeatureCodes(\DHLServicepoints\StructType\FeatureCodeList $featureCodes = null)
    {
        if (is_null($featureCodes) || (is_array($featureCodes) && empty($featureCodes))) {
            unset($this->FeatureCodes);
        } else {
            $this->FeatureCodes = $featureCodes;
        }
        return $this;
    }
    /**
     * Get MaxNumberOfItems value
     * @return int|null
     */
    public function getMaxNumberOfItems()
    {
        return $this->MaxNumberOfItems;
    }
    /**
     * Set MaxNumberOfItems value
     * @param int $maxNumberOfItems
     * @return \DHLServicepoints\StructType\GetNearestServicePointsRequest
     */
    public function setMaxNumberOfItems($maxNumberOfItems = null)
    {
        // validation for constraint: int
        if (!is_null($maxNumberOfItems) && !is_numeric($maxNumberOfItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxNumberOfItems)), __LINE__);
        }
        $this->MaxNumberOfItems = $maxNumberOfItems;
        return $this;
    }
    /**
     * Get BitCatCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \DHLServicepoints\StructType\BitCatCodeList|null
     */
    public function getBitCatCodes()
    {
        return isset($this->BitCatCodes) ? $this->BitCatCodes : null;
    }
    /**
     * Set BitCatCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \DHLServicepoints\StructType\BitCatCodeList $bitCatCodes
     * @return \DHLServicepoints\StructType\GetNearestServicePointsRequest
     */
    public function setBitCatCodes(\DHLServicepoints\StructType\BitCatCodeList $bitCatCodes = null)
    {
        if (is_null($bitCatCodes) || (is_array($bitCatCodes) && empty($bitCatCodes))) {
            unset($this->BitCatCodes);
        } else {
            $this->BitCatCodes = $bitCatCodes;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLServicepoints\StructType\GetNearestServicePointsRequest
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
