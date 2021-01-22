<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ca2fac92399792c15ba77d4f20e00bf
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Peru\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Peru\\' => 
        array (
            0 => __DIR__ . '/..' . '/giansalex/peru-consult/src/Peru',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ca2fac92399792c15ba77d4f20e00bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ca2fac92399792c15ba77d4f20e00bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ca2fac92399792c15ba77d4f20e00bf::$classMap;

        }, null, ClassLoader::class);
    }
}
