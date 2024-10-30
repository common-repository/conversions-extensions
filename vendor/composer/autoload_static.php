<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee52df512085d0dcff18465fc6acfec1
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'conversions\\extensions\\' => 23,
        ),
        'O' => 
        array (
            'OCDI\\' => 5,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
        'A' => 
        array (
            'AwesomeMotive\\WPContentImporter2\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'conversions\\extensions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'OCDI\\' => 
        array (
            0 => __DIR__ . '/..' . '/awesomemotive/one-click-demo-import/inc',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
        'AwesomeMotive\\WPContentImporter2\\' => 
        array (
            0 => __DIR__ . '/..' . '/awesomemotive/wp-content-importer-v2/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee52df512085d0dcff18465fc6acfec1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee52df512085d0dcff18465fc6acfec1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee52df512085d0dcff18465fc6acfec1::$classMap;

        }, null, ClassLoader::class);
    }
}