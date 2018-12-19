<?php

namespace DHLServicepoints\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServicePointDetailRequest StructType
 * @subpackage Structs
 */
class GetServicePointDetailRequest extends AbstractStructBase
{
    /**
     * The ServicePointRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: q1:ServicePointRef
     * @var \DHLServicepoints\StructType\ServicePointRef
     */
    public $ServicePointRef;
    /**
     * Constructor method for GetServicePointDetailRequest
     * @uses GetServicePointDetailRequest::setServicePointRef()
     * @param \DHLServicepoints\StructType\ServicePointRef $servicePointRef
     */
    public function __construct(\DHLServicepoints\StructType\ServicePointRef $servicePointRef = null)
    {
        $this
            ->setServicePointRef($servicePointRef);
    }
    /**
     * Get ServicePointRef value
     * @return \DHLServicepoints\StructType\ServicePointRef|null
     */
    public function getServicePointRef()
    {
        return $this->ServicePointRef;
    }
    /**
     * Set ServicePointRef value
     * @param \DHLServicepoints\StructType\ServicePointRef $servicePointRef
     * @return \DHLServicepoints\StructType\GetServicePointDetailRequest
     */
    public function setServicePointRef(\DHLServicepoints\StructType\ServicePointRef $servicePointRef = null)
    {
        $this->ServicePointRef = $servicePointRef;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLServicepoints\StructType\GetServicePointDetailRequest
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
