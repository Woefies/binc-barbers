<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2955c5e69ce85e3cb76efff23859d0e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'System\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/classes/System',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2955c5e69ce85e3cb76efff23859d0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2955c5e69ce85e3cb76efff23859d0e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc2955c5e69ce85e3cb76efff23859d0e::$classMap;

        }, null, ClassLoader::class);
    }
}
