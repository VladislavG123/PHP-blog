<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bcda1010cb66411ec6bbe3db1eb89c3
{
    public static $files = array (
        '42c3df4d3eadaa76af47c1a62e1489c3' => __DIR__ . '/../..' . '/app/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
        'K' => 
        array (
            'Klein\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bcda1010cb66411ec6bbe3db1eb89c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bcda1010cb66411ec6bbe3db1eb89c3::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit2bcda1010cb66411ec6bbe3db1eb89c3::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
