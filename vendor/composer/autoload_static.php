<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6e172c9642d7a2ccdb7208c6f8f7751
{
    public static $files = array (
        'ec6621a96a72a21b0a4d11bef92c2ee9' => __DIR__ . '/..' . '/raveren/kint/Sage.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb6e172c9642d7a2ccdb7208c6f8f7751::$classMap;

        }, null, ClassLoader::class);
    }
}
