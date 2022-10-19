<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3372992572d5835851bd19781562daa4
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jhonycreativo\\JcBofel\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jhonycreativo\\JcBofel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3372992572d5835851bd19781562daa4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3372992572d5835851bd19781562daa4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3372992572d5835851bd19781562daa4::$classMap;

        }, null, ClassLoader::class);
    }
}