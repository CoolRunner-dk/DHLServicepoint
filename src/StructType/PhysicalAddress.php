<?php

namespace DHLServicepoints\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhysicalAddress StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PhysicalAddress
 * @subpackage Structs
 */
class PhysicalAddress extends AbstractStructBase
{
    /**
     * The AddresseeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AddresseeName;
    /**
     * The Street1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Street1;
    /**
     * The Street2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Street2;
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
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CountryCode;
    /**
     * Constructor method for PhysicalAddress
     * @uses PhysicalAddress::setAddresseeName()
     * @uses PhysicalAddress::setStreet1()
     * @uses PhysicalAddress::setStreet2()
     * @uses PhysicalAddress::setPostCode()
     * @uses PhysicalAddress::setCity()
     * @uses PhysicalAddress::setCountryCode()
     * @param string $addresseeName
     * @param string $street1
     * @param string $street2
     * @param string $postCode
     * @param string $city
     * @param string $countryCode
     */
    public function __construct($addresseeName = null, $street1 = null, $street2 = null, $postCode = null, $city = null, $countryCode = null)
    {
        $this
            ->setAddresseeName($addresseeName)
            ->setStreet1($street1)
            ->setStreet2($street2)
            ->setPostCode($postCode)
            ->setCity($city)
            ->setCountryCode($countryCode);
    }
    /**
     * Get AddresseeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddresseeName()
    {
        return isset($this->AddresseeName) ? $this->AddresseeName : null;
    }
    /**
     * Set AddresseeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addresseeName
     * @return \DHLServicepoints\StructType\PhysicalAddress
     */
    public function setAddresseeName($addresseeName = null)
    {
        // validation for constraint: string
        if (!is_null($addresseeName) && !is_string($addresseeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addresseeName)), __LINE__);
        }
        if (is_null($addresseeName) || (is_array($addresseeName) && empty($addresseeName))) {
            unset($this->AddresseeName);
        } else {
            $this->AddresseeName = $addresseeName;
        }
        return $this;
    }
    /**
     * Get Street1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet1()
    {
        return isset($this->Street1) ? $this->Street1 : null;
    }
    /**
     * Set Street1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street1
     * @return \DHLServicepoints\StructType\PhysicalAddress
     */
    public function setStreet1($street1 = null)
    {
        // validation for constraint: string
        if (!is_null($street1) && !is_string($street1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street1)), __LINE__);
        }
        if (is_null($street1) || (is_array($street1) && empty($street1))) {
            unset($this->Street1);
        } else {
            $this->Street1 = $street1;
        }
        return $this;
    }
    /**
     * Get Street2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet2()
    {
        return isset($this->Street2) ? $this->Street2 : null;
    }
    /**
     * Set Street2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street2
     * @return \DHLServicepoints\StructType\PhysicalAddress
     */
    public function setStreet2($street2 = null)
    {
        // validation for constraint: string
        if (!is_null($street2) && !is_string($street2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street2)), __LINE__);
        }
        if (is_null($street2) || (is_array($street2) && empty($street2))) {
            unset($this->Street2);
        } else {
            $this->Street2 = $street2;
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
     * @return \DHLServicepoints\StructType\PhysicalAddress
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
     * @return \DHLServicepoints\StructType\PhysicalAddress
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
     * @return \DHLServicepoints\StructType\PhysicalAddress
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLServicepoints\StructType\PhysicalAddress
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
