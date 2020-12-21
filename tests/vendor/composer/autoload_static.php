<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93932804b83b004b7cc4cba1eeecb1e3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spiral\\RoadRunner\\Http\\' => 23,
            'Spiral\\RoadRunner\\' => 18,
            'Spiral\\Goridge\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'N' => 
        array (
            'Nyholm\\Psr7\\' => 12,
        ),
        'H' => 
        array (
            'Http\\Message\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spiral\\RoadRunner\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/spiral/roadrunner-http/src',
        ),
        'Spiral\\RoadRunner\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/spiral/roadrunner/src',
        ),
        'Spiral\\Goridge\\' => 
        array (
            0 => __DIR__ . '/..' . '/spiral/goridge/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Nyholm\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/nyholm/psr7/src',
        ),
        'Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/message-factory/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93932804b83b004b7cc4cba1eeecb1e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93932804b83b004b7cc4cba1eeecb1e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93932804b83b004b7cc4cba1eeecb1e3::$classMap;

        }, null, ClassLoader::class);
    }
}