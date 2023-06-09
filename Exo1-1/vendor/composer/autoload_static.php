<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaad1494fd849a277faf66a97eb64dd93
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ElementaryFramework\\FireFS\\' => 27,
            'ElementaryFramework\\Core\\Streams\\' => 33,
            'ElementaryFramework\\Core\\Events\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ElementaryFramework\\FireFS\\' => 
        array (
            0 => __DIR__ . '/..' . '/elementaryframework/fire-fs/src/FireFS',
        ),
        'ElementaryFramework\\Core\\Streams\\' => 
        array (
            0 => __DIR__ . '/..' . '/elementaryframework/streams/src/Core/Streams',
        ),
        'ElementaryFramework\\Core\\Events\\' => 
        array (
            0 => __DIR__ . '/..' . '/elementaryframework/events/src/Core/Events',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaad1494fd849a277faf66a97eb64dd93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaad1494fd849a277faf66a97eb64dd93::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaad1494fd849a277faf66a97eb64dd93::$classMap;

        }, null, ClassLoader::class);
    }
}
