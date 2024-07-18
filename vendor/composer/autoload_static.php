<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb9b71fb150edabdae0fe64d4caeb21c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twileck\\FoxypaySdk\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twileck\\FoxypaySdk\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb9b71fb150edabdae0fe64d4caeb21c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb9b71fb150edabdae0fe64d4caeb21c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb9b71fb150edabdae0fe64d4caeb21c::$classMap;

        }, null, ClassLoader::class);
    }
}
