<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c6755fb9c9c485f77431df8cf66e470
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c6755fb9c9c485f77431df8cf66e470::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c6755fb9c9c485f77431df8cf66e470::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c6755fb9c9c485f77431df8cf66e470::$classMap;

        }, null, ClassLoader::class);
    }
}