<?php

namespace DHLServicepoints;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'ServicePointRef' => '\\DHLServicepoints\\StructType\\ServicePointRef',
            'ServicePoint' => '\\DHLServicepoints\\StructType\\ServicePoint',
            'ServiceAddress' => '\\DHLServicepoints\\StructType\\ServiceAddress',
            'PhysicalAddress' => '\\DHLServicepoints\\StructType\\PhysicalAddress',
            'TelecomInfo' => '\\DHLServicepoints\\StructType\\TelecomInfo',
            'FeatureCodeList' => '\\DHLServicepoints\\StructType\\FeatureCodeList',
            'BitCatCodeList' => '\\DHLServicepoints\\StructType\\BitCatCodeList',
            'ArrayOfNearbyServicePoint' => '\\DHLServicepoints\\ArrayType\\ArrayOfNearbyServicePoint',
            'NearbyServicePoint' => '\\DHLServicepoints\\StructType\\NearbyServicePoint',
            'GetServicePointDetailRequest' => '\\DHLServicepoints\\StructType\\GetServicePointDetailRequest',
            'GetServicePointDetailResponse' => '\\DHLServicepoints\\StructType\\GetServicePointDetailResponse',
            'GetNearestServicePointsRequest' => '\\DHLServicepoints\\StructType\\GetNearestServicePointsRequest',
            'GetNearestServicePointsResponse' => '\\DHLServicepoints\\StructType\\GetNearestServicePointsResponse',
        );
    }
}
