<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BitCatCodeList StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BitCatCodeList
 * @subpackage Structs
 */
class BitCatCodeList extends AbstractStructBase
{
    /**
     * The BitCatCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $BitCatCode;
    /**
     * Constructor method for BitCatCodeList
     * @uses BitCatCodeList::setBitCatCode()
     * @param string[] $bitCatCode
     */
    public function __construct(array $bitCatCode = array())
    {
        $this
            ->setBitCatCode($bitCatCode);
    }
    /**
     * Get BitCatCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getBitCatCode()
    {
        return isset($this->BitCatCode) ? $this->BitCatCode : null;
    }
    /**
     * Set BitCatCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $bitCatCode
     * @return \StructType\BitCatCodeList
     */
    public function setBitCatCode(array $bitCatCode = array())
    {
        foreach ($bitCatCode as $bitCatCodeListBitCatCodeItem) {
            // validation for constraint: itemType
            if (!is_string($bitCatCodeListBitCatCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The BitCatCode property can only contain items of string, "%s" given', is_object($bitCatCodeListBitCatCodeItem) ? get_class($bitCatCodeListBitCatCodeItem) : gettype($bitCatCodeListBitCatCodeItem)), __LINE__);
            }
        }
        if (is_null($bitCatCode) || (is_array($bitCatCode) && empty($bitCatCode))) {
            unset($this->BitCatCode);
        } else {
            $this->BitCatCode = $bitCatCode;
        }
        return $this;
    }
    /**
     * Add item to BitCatCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\BitCatCodeList
     */
    public function addToBitCatCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The BitCatCode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BitCatCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BitCatCodeList
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
