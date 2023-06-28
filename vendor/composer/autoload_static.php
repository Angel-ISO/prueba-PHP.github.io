<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67f0e9b1c25df21546440c8fca2fed2f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Clases\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Clases\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit67f0e9b1c25df21546440c8fca2fed2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67f0e9b1c25df21546440c8fca2fed2f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit67f0e9b1c25df21546440c8fca2fed2f::$classMap;

        }, null, ClassLoader::class);
    }
}