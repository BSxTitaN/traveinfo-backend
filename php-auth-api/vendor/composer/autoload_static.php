<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37d146b512f93790f05900990de7de6d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37d146b512f93790f05900990de7de6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37d146b512f93790f05900990de7de6d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37d146b512f93790f05900990de7de6d::$classMap;

        }, null, ClassLoader::class);
    }
}
