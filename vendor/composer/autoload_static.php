<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c4736413c2374c4ef83460c2f38e086
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Imones\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Imones\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c4736413c2374c4ef83460c2f38e086::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c4736413c2374c4ef83460c2f38e086::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c4736413c2374c4ef83460c2f38e086::$classMap;

        }, null, ClassLoader::class);
    }
}
