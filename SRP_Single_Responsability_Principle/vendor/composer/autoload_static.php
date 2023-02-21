<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf45b038ee8f83c9a5e7fbe5c8a369fdd
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Domin\\SrpSingleResponsabilityPrinciple\\' => 39,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Domin\\SrpSingleResponsabilityPrinciple\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf45b038ee8f83c9a5e7fbe5c8a369fdd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf45b038ee8f83c9a5e7fbe5c8a369fdd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf45b038ee8f83c9a5e7fbe5c8a369fdd::$classMap;

        }, null, ClassLoader::class);
    }
}
