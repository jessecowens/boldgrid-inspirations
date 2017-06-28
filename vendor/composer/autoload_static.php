<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26a1b25bff0cd4310cbcdef578c2c93d
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Boldgrid\\Library\\Util\\' => 22,
            'Boldgrid\\Inspirations\\Premium\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Boldgrid\\Library\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/boldgrid/library/src/Util',
        ),
        'Boldgrid\\Inspirations\\Premium\\' => 
        array (
            0 => __DIR__ . '/..' . '/boldgrid/boldgrid-inspirations-premium/src/Premium',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26a1b25bff0cd4310cbcdef578c2c93d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26a1b25bff0cd4310cbcdef578c2c93d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
