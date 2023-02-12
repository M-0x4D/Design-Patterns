<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f157ec929c63762becbf4c5aab38683
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Proxy\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Proxy\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f157ec929c63762becbf4c5aab38683::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f157ec929c63762becbf4c5aab38683::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f157ec929c63762becbf4c5aab38683::$classMap;

        }, null, ClassLoader::class);
    }
}
