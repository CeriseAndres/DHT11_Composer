<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45210f35b94ecf5a6048c693adf1e874
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DHT11\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DHT11\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45210f35b94ecf5a6048c693adf1e874::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45210f35b94ecf5a6048c693adf1e874::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
