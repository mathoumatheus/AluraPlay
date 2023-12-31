<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit615966d8df0d15f670d00d34426f4e1a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Mvc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Mvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit615966d8df0d15f670d00d34426f4e1a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit615966d8df0d15f670d00d34426f4e1a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit615966d8df0d15f670d00d34426f4e1a::$classMap;

        }, null, ClassLoader::class);
    }
}
