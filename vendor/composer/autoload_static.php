<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec071eba649c8c895a51a0d5d04aa5db
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec071eba649c8c895a51a0d5d04aa5db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec071eba649c8c895a51a0d5d04aa5db::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec071eba649c8c895a51a0d5d04aa5db::$classMap;

        }, null, ClassLoader::class);
    }
}
