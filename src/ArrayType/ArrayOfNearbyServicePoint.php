<?php

namespace DHLServicepoints\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNearbyServicePoint ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfNearbyServicePoint
 * @subpackage Arrays
 */
class ArrayOfNearbyServicePoint extends AbstractStructArrayBase
{
    /**
     * The NearbyServicePoint
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \DHLServicepoints\StructType\NearbyServicePoint[]
     */
    public $NearbyServicePoint;
    /**
     * Constructor method for ArrayOfNearbyServicePoint
     * @uses ArrayOfNearbyServicePoint::setNearbyServicePoint()
     * @param \DHLServicepoints\StructType\NearbyServicePoint[] $nearbyServicePoint
     */
    public function __construct(array $nearbyServicePoint = array())
    {
        $this
            ->setNearbyServicePoint($nearbyServicePoint);
    }
    /**
     * Get NearbyServicePoint value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \DHLServicepoints\StructType\NearbyServicePoint[]|null
     */
    public function getNearbyServicePoint()
    {
        return isset($this->NearbyServicePoint) ? $this->NearbyServicePoint : null;
    }
    /**
     * Set NearbyServicePoint value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \DHLServicepoints\StructType\NearbyServicePoint[] $nearbyServicePoint
     * @return \DHLServicepoints\ArrayType\ArrayOfNearbyServicePoint
     */
    public function setNearbyServicePoint(array $nearbyServicePoint = array())
    {
        foreach ($nearbyServicePoint as $arrayOfNearbyServicePointNearbyServicePointItem) {
            // validation for constraint: itemType
            if (!$arrayOfNearbyServicePointNearbyServicePointItem instanceof \DHLServicepoints\StructType\NearbyServicePoint) {
                throw new \InvalidArgumentException(sprintf('The NearbyServicePoint property can only contain items of \DHLServicepoints\StructType\NearbyServicePoint, "%s" given', is_object($arrayOfNearbyServicePointNearbyServicePointItem) ? get_class($arrayOfNearbyServicePointNearbyServicePointItem) : gettype($arrayOfNearbyServicePointNearbyServicePointItem)), __LINE__);
            }
        }
        if (is_null($nearbyServicePoint) || (is_array($nearbyServicePoint) && empty($nearbyServicePoint))) {
            unset($this->NearbyServicePoint);
        } else {
            $this->NearbyServicePoint = $nearbyServicePoint;
        }
        return $this;
    }
    /**
     * Add item to NearbyServicePoint value
     * @throws \InvalidArgumentException
     * @param \DHLServicepoints\StructType\NearbyServicePoint $item
     * @return \DHLServicepoints\ArrayType\ArrayOfNearbyServicePoint
     */
    public function addToNearbyServicePoint(\DHLServicepoints\StructType\NearbyServicePoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \DHLServicepoints\StructType\NearbyServicePoint) {
            throw new \InvalidArgumentException(sprintf('The NearbyServicePoint property can only contain items of \DHLServicepoints\StructType\NearbyServicePoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NearbyServicePoint[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \DHLServicepoints\StructType\NearbyServicePoint|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \DHLServicepoints\StructType\NearbyServicePoint|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \DHLServicepoints\StructType\NearbyServicePoint|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \DHLServicepoints\StructType\NearbyServicePoint|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \DHLServicepoints\StructType\NearbyServicePoint|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NearbyServicePoint
     */
    public function getAttributeName()
    {
        return 'NearbyServicePoint';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \DHLServicepoints\ArrayType\ArrayOfNearbyServicePoint
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
