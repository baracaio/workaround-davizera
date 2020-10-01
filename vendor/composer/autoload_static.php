<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b5d510b44b041445d5832dedb124996
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b5d510b44b041445d5832dedb124996::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b5d510b44b041445d5832dedb124996::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}