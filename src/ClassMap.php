<?php
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
            'ServicePointRef' => '\\StructType\\ServicePointRef',
            'ServicePoint' => '\\StructType\\ServicePoint',
            'ServiceAddress' => '\\StructType\\ServiceAddress',
            'PhysicalAddress' => '\\StructType\\PhysicalAddress',
            'TelecomInfo' => '\\StructType\\TelecomInfo',
            'FeatureCodeList' => '\\StructType\\FeatureCodeList',
            'BitCatCodeList' => '\\StructType\\BitCatCodeList',
            'ArrayOfNearbyServicePoint' => '\\ArrayType\\ArrayOfNearbyServicePoint',
            'NearbyServicePoint' => '\\StructType\\NearbyServicePoint',
            'GetServicePointDetailRequest' => '\\StructType\\GetServicePointDetailRequest',
            'GetServicePointDetailResponse' => '\\StructType\\GetServicePointDetailResponse',
            'GetNearestServicePointsRequest' => '\\StructType\\GetNearestServicePointsRequest',
            'GetNearestServicePointsResponse' => '\\StructType\\GetNearestServicePointsResponse',
        );
    }
}
