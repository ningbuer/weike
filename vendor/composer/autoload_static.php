<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc94282066b37db717bd33a803010a46a
{
    public static $files = array (
        '9b552a3cc426e3287cc811caefa3cf53' => __DIR__ . '/..' . '/topthink/think-helper/src/helper.php',
        '1cfd2761b63b0a29ed23657ea394cb2d' => __DIR__ . '/..' . '/topthink/think-captcha/src/helper.php',
        'ddc3cd2a04224f9638c5d0de6a69c7e3' => __DIR__ . '/..' . '/topthink/think-migration/src/config.php',
        'cc56288302d9df745d97c934d6a6e5f0' => __DIR__ . '/..' . '/topthink/think-queue/src/common.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\oracle\\' => 13,
            'think\\mongo\\' => 12,
            'think\\migration\\' => 16,
            'think\\helper\\' => 13,
            'think\\composer\\' => 15,
            'think\\captcha\\' => 14,
            'think\\' => 6,
        ),
        'P' => 
        array (
            'Phinx\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\oracle\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-oracle/src',
        ),
        'think\\mongo\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-mongo/src',
        ),
        'think\\migration\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-migration/src',
        ),
        'think\\helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-helper/src',
        ),
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-captcha/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-image/src',
            1 => __DIR__ . '/..' . '/topthink/think-queue/src',
        ),
        'Phinx\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-migration/phinx/src/Phinx',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc94282066b37db717bd33a803010a46a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc94282066b37db717bd33a803010a46a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
