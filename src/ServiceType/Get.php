<?php

namespace DHLServicepoints\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetServicePointDetail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \DHLServicepoints\StructType\GetServicePointDetailRequest $parameters
     * @return \DHLServicepoints\StructType\GetServicePointDetailResponse|bool
     */
    public function GetServicePointDetail(\DHLServicepoints\StructType\GetServicePointDetailRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetServicePointDetail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNearestServicePoints
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \DHLServicepoints\StructType\GetNearestServicePointsRequest $parameters
     * @return \DHLServicepoints\StructType\GetNearestServicePointsResponse|bool
     */
    public function GetNearestServicePoints(\DHLServicepoints\StructType\GetNearestServicePointsRequest $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetNearestServicePoints($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \DHLServicepoints\StructType\GetNearestServicePointsResponse|\DHLServicepoints\StructType\GetServicePointDetailResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
