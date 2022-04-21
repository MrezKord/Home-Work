<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite08d12f2b3b23e161d66c1a7cf836d8d
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\' => 5,
            'UserType\\' => 9,
        ),
        'P' => 
        array (
            'Post\\' => 5,
        ),
        'A' => 
        array (
            'Ability\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/User',
        ),
        'UserType\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/User/UserType',
        ),
        'Post\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/Post',
        ),
        'Ability\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/User/Ability',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/classes',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite08d12f2b3b23e161d66c1a7cf836d8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite08d12f2b3b23e161d66c1a7cf836d8d::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInite08d12f2b3b23e161d66c1a7cf836d8d::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInite08d12f2b3b23e161d66c1a7cf836d8d::$classMap;

        }, null, ClassLoader::class);
    }
}
