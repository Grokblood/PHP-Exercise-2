<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3988430aefab9703af871e9b00115e3
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Builder\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Builder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite3988430aefab9703af871e9b00115e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3988430aefab9703af871e9b00115e3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
