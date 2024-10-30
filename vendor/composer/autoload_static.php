<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2100f9486e8ec2184632050e3806ec75
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Riimu\\Kit\\PHPEncoder\\' => 21,
        ),
        'M' => 
        array (
            'MetaBox\\TS\\' => 11,
            'MetaBox\\Support\\' => 16,
            'MBBParser\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Riimu\\Kit\\PHPEncoder\\' => 
        array (
            0 => __DIR__ . '/..' . '/riimu/kit-phpencoder/src',
        ),
        'MetaBox\\TS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'MetaBox\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/meta-box/support',
        ),
        'MBBParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/meta-box/mbb-parser/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2100f9486e8ec2184632050e3806ec75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2100f9486e8ec2184632050e3806ec75::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2100f9486e8ec2184632050e3806ec75::$classMap;

        }, null, ClassLoader::class);
    }
}
