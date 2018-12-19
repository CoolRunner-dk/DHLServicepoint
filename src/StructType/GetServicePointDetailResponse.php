<?php

namespace DHLServicepoints\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServicePointDetailResponse StructType
 * @subpackage Structs
 */
class GetServicePointDetailResponse extends AbstractStructBase
{
    /**
     * The ServicePointDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \DHLServicepoints\StructType\ServicePoint
     */
    public $ServicePointDetail;
    /**
     * Constructor method for GetServicePointDetailResponse
     * @uses GetServicePointDetailResponse::setServicePointDetail()
     * @param \DHLServicepoints\StructType\ServicePoint $servicePointDetail
     */
    public function __construct(\DHLServicepoints\StructType\ServicePoint $servicePointDetail = null)
    {
        $this
            ->setServicePointDetail($servicePointDetail);
    }
    /**
     * Get ServicePointDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \DHLServicepoints\StructType\ServicePoint|null
     */
    public function getServicePointDetail()
    {
        return isset($this->ServicePointDetail) ? $this->ServicePointDetail : null;
    }
    /**
     * Set ServicePointDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \DHLServicepoints\StructType\ServicePoint $servicePointDetail
     * @return \DHLServicepoints\StructType\GetServicePointDetailResponse
     */
    public function setServicePointDetail(\DHLServicepoints\StructType\ServicePoint $servicePointDetail = null)
    {
        if (is_null($servicePointDetail) || (is_array($servicePointDetail) && empty($servicePointDetail))) {
            unset($this->ServicePointDetail);
        } else {
            $this->ServicePointDetail = $servicePointDetail;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \DHLServicepoints\StructType\GetServicePointDetailResponse
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
