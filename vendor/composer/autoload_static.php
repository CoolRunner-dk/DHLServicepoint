<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84d07ffb5a3b5aab65f56cea176c5510
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WsdlToPhp\\PackageBase\\Tests\\' => 28,
            'WsdlToPhp\\PackageBase\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WsdlToPhp\\PackageBase\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagebase/tests',
        ),
        'WsdlToPhp\\PackageBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagebase/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'ArrayType\\ArrayOfNearbyServicePoint' => __DIR__ . '/../..' . '/src/ArrayType/ArrayOfNearbyServicePoint.php',
        'ClassMap' => __DIR__ . '/../..' . '/src/ClassMap.php',
        'ServiceType\\Get' => __DIR__ . '/../..' . '/src/ServiceType/Get.php',
        'StructType\\BitCatCodeList' => __DIR__ . '/../..' . '/src/StructType/BitCatCodeList.php',
        'StructType\\FeatureCodeList' => __DIR__ . '/../..' . '/src/StructType/FeatureCodeList.php',
        'StructType\\GetNearestServicePointsRequest' => __DIR__ . '/../..' . '/src/StructType/GetNearestServicePointsRequest.php',
        'StructType\\GetNearestServicePointsResponse' => __DIR__ . '/../..' . '/src/StructType/GetNearestServicePointsResponse.php',
        'StructType\\GetServicePointDetailRequest' => __DIR__ . '/../..' . '/src/StructType/GetServicePointDetailRequest.php',
        'StructType\\GetServicePointDetailResponse' => __DIR__ . '/../..' . '/src/StructType/GetServicePointDetailResponse.php',
        'StructType\\NearbyServicePoint' => __DIR__ . '/../..' . '/src/StructType/NearbyServicePoint.php',
        'StructType\\PhysicalAddress' => __DIR__ . '/../..' . '/src/StructType/PhysicalAddress.php',
        'StructType\\ServiceAddress' => __DIR__ . '/../..' . '/src/StructType/ServiceAddress.php',
        'StructType\\ServicePoint' => __DIR__ . '/../..' . '/src/StructType/ServicePoint.php',
        'StructType\\ServicePointRef' => __DIR__ . '/../..' . '/src/StructType/ServicePointRef.php',
        'StructType\\TelecomInfo' => __DIR__ . '/../..' . '/src/StructType/TelecomInfo.php',
        'WsdlToPhp\\PackageBase\\AbstractSoapClientBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractSoapClientBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructArrayBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructArrayBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructBase.php',
        'WsdlToPhp\\PackageBase\\SoapClientInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/SoapClientInterface.php',
        'WsdlToPhp\\PackageBase\\StructArrayInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructArrayInterface.php',
        'WsdlToPhp\\PackageBase\\StructInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructInterface.php',
        'WsdlToPhp\\PackageBase\\Tests\\Client' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/Client.php',
        'WsdlToPhp\\PackageBase\\Tests\\SoapClient' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/SoapClient.php',
        'WsdlToPhp\\PackageBase\\Tests\\SoapClientTest' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/SoapClientTest.php',
        'WsdlToPhp\\PackageBase\\Tests\\StructArrayObject' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/StructArrayObject.php',
        'WsdlToPhp\\PackageBase\\Tests\\StructArrayTest' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/StructArrayTest.php',
        'WsdlToPhp\\PackageBase\\Tests\\StructBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/StructBaseTest.php',
        'WsdlToPhp\\PackageBase\\Tests\\StructObject' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/StructObject.php',
        'WsdlToPhp\\PackageBase\\Tests\\TestCase' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/TestCase.php',
        'WsdlToPhp\\PackageBase\\Tests\\UtilsTest' => __DIR__ . '/..' . '/wsdltophp/packagebase/tests/UtilsTest.php',
        'WsdlToPhp\\PackageBase\\Utils' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit84d07ffb5a3b5aab65f56cea176c5510::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84d07ffb5a3b5aab65f56cea176c5510::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit84d07ffb5a3b5aab65f56cea176c5510::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit84d07ffb5a3b5aab65f56cea176c5510::$classMap;

        }, null, ClassLoader::class);
    }
}
