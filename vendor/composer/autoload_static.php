<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d8c8342efd707a7c483a5265c7624db
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Dotenv\\' => 25,
        ),
        'I' => 
        array (
            'Indiciez\\Tuis\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dotenv',
        ),
        'Indiciez\\Tuis\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d8c8342efd707a7c483a5265c7624db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d8c8342efd707a7c483a5265c7624db::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d8c8342efd707a7c483a5265c7624db::$classMap;

        }, null, ClassLoader::class);
    }
}
