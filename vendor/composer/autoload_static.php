<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0366f03284ae17f954f501c9b02dac25
{
    public static $files = array (
        '7df5c205f056903d05209ffafff172c8' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0366f03284ae17f954f501c9b02dac25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0366f03284ae17f954f501c9b02dac25::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0366f03284ae17f954f501c9b02dac25::$classMap;

        }, null, ClassLoader::class);
    }
}
