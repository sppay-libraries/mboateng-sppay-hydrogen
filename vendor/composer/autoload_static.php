<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8c47aaa2875113dad5949738b181310
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mboateng\\Hydrogen\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mboateng\\Hydrogen\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Mboateng\\Hydrogen\\Hydrogen' => __DIR__ . '/../..' . '/src/Hydrogen.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf8c47aaa2875113dad5949738b181310::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf8c47aaa2875113dad5949738b181310::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf8c47aaa2875113dad5949738b181310::$classMap;

        }, null, ClassLoader::class);
    }
}
