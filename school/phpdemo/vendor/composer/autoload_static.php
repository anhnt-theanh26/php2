<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ad0a27e5abef34991ee707d40ee3278
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Phpdemo\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Phpdemo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ad0a27e5abef34991ee707d40ee3278::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ad0a27e5abef34991ee707d40ee3278::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ad0a27e5abef34991ee707d40ee3278::$classMap;

        }, null, ClassLoader::class);
    }
}
