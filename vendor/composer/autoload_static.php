<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0edbca9273d60146ab820359bcd0e687
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Riyad\\Contact\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Riyad\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0edbca9273d60146ab820359bcd0e687::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0edbca9273d60146ab820359bcd0e687::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0edbca9273d60146ab820359bcd0e687::$classMap;

        }, null, ClassLoader::class);
    }
}
