<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf444fcf297956ba55b46823e1c91934b
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
            0 => __DIR__ . '/../../..' . '/includes/classes/System',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf444fcf297956ba55b46823e1c91934b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf444fcf297956ba55b46823e1c91934b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf444fcf297956ba55b46823e1c91934b::$classMap;

        }, null, ClassLoader::class);
    }
}
