<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1fffa571a806e3f433786840100c7a99
{
    public static $files = array (
        '4d185ff80d9bcf4df56b9ae940c069af' => __DIR__ . '/../..' . '/func/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abit\\Lib\\' => 9,
            'Abit\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abit\\Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'Abit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1fffa571a806e3f433786840100c7a99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1fffa571a806e3f433786840100c7a99::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
