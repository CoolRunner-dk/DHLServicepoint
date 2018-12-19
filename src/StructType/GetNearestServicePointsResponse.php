<?php

namespace DHLServicepoints\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNearestServicePointsResponse StructType
 * @subpackage Structs
 */
class GetNearestServicePointsResponse extends AbstractStructBase
{
    /**
     * The ServicePoints
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \DHLServicepoints\ArrayType\ArrayOfNearbyServicePoint
     */
    public $ServicePoints;
    /**
     * Constructor method for GetNearestServicePointsResponse
     * @uses GetNearestServicePointsResponse::setServicePoints()
     * @param \DHLServicepoints\ArrayType\ArrayOfNearbyServicePoint $servicePoints
     */
    public function __construct(\DHLServicepoints\ArrayType\ArrayOfNearbyServicePoint $servicePoints = null)
    {
        $this
            ->setServicePoints($servicePoints);
    }
    /**
     * Get ServicePoints value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \DHLServicepoints\ArrayType\ArrayOfNearbyServicePoint|null
     */
    public function getServicePoints()
    {
        return isset($this->ServicePoints) ? $this->ServicePoints : null;
    }
    /**
     * Set ServicePoints value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \DHLServicepoints\ArrayType\ArrayOfNearbyServicePoint $servicePoints
     * @return \DHLServicepoints\StructType\GetNearestServicePointsResponse
     */
    public function setServicePoints(\DHLServicepoints\ArrayType\ArrayOfNearbyServicePoint $servicePoints = null)
    {
        if (is_null($servicePoints) || (is_array($servicePoints) && empty($servicePoints))) {
            unset($this->ServicePoints);
        } else {
            $this->ServicePoints = $servicePoints;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLServicepoints\StructType\GetNearestServicePointsResponse
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
