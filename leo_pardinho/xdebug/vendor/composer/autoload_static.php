<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac4527d35740d83b2d38343345f7462a
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Unialfa\\Phpxdebug\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Unialfa\\Phpxdebug\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitac4527d35740d83b2d38343345f7462a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac4527d35740d83b2d38343345f7462a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitac4527d35740d83b2d38343345f7462a::$classMap;

        }, null, ClassLoader::class);
    }
}
