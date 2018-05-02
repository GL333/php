<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f7e110ab565dd1051330ef4d90427c1
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f7e110ab565dd1051330ef4d90427c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f7e110ab565dd1051330ef4d90427c1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
