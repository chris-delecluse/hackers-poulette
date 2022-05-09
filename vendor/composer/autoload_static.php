<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc04f9b58a5b6ef4d14477da094f9e084
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'App\\' => 
        array (
            0 => '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc04f9b58a5b6ef4d14477da094f9e084::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc04f9b58a5b6ef4d14477da094f9e084::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc04f9b58a5b6ef4d14477da094f9e084::$classMap;

        }, null, ClassLoader::class);
    }
}