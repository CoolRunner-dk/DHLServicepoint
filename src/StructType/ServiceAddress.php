<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceAddress StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ServiceAddress
 * @subpackage Structs
 */
class ServiceAddress extends AbstractStructBase
{
    /**
     * The ContactPersonName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ContactPersonName;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PhysicalAddress
     */
    public $Address;
    /**
     * The Telecom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TelecomInfo
     */
    public $Telecom;
    /**
     * Constructor method for ServiceAddress
     * @uses ServiceAddress::setContactPersonName()
     * @uses ServiceAddress::setAddress()
     * @uses ServiceAddress::setTelecom()
     * @param string $contactPersonName
     * @param \StructType\PhysicalAddress $address
     * @param \StructType\TelecomInfo $telecom
     */
    public function __construct($contactPersonName = null, \StructType\PhysicalAddress $address = null, \StructType\TelecomInfo $telecom = null)
    {
        $this
            ->setContactPersonName($contactPersonName)
            ->setAddress($address)
            ->setTelecom($telecom);
    }
    /**
     * Get ContactPersonName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContactPersonName()
    {
        return isset($this->ContactPersonName) ? $this->ContactPersonName : null;
    }
    /**
     * Set ContactPersonName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contactPersonName
     * @return \StructType\ServiceAddress
     */
    public function setContactPersonName($contactPersonName = null)
    {
        // validation for constraint: string
        if (!is_null($contactPersonName) && !is_string($contactPersonName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactPersonName)), __LINE__);
        }
        if (is_null($contactPersonName) || (is_array($contactPersonName) && empty($contactPersonName))) {
            unset($this->ContactPersonName);
        } else {
            $this->ContactPersonName = $contactPersonName;
        }
        return $this;
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PhysicalAddress|null
     */
    public function getAddress()
    {
        return isset($this->Address) ? $this->Address : null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PhysicalAddress $address
     * @return \StructType\ServiceAddress
     */
    public function setAddress(\StructType\PhysicalAddress $address = null)
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }
        return $this;
    }
    /**
     * Get Telecom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TelecomInfo|null
     */
    public function getTelecom()
    {
        return isset($this->Telecom) ? $this->Telecom : null;
    }
    /**
     * Set Telecom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TelecomInfo $telecom
     * @return \StructType\ServiceAddress
     */
    public function setTelecom(\StructType\TelecomInfo $telecom = null)
    {
        if (is_null($telecom) || (is_array($telecom) && empty($telecom))) {
            unset($this->Telecom);
        } else {
            $this->Telecom = $telecom;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ServiceAddress
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
