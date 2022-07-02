<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitLookupServerConnector
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OCA\\LookupServerConnector\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\LookupServerConnector\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'OCA\\LookupServerConnector\\AppInfo\\Application' => __DIR__ . '/..' . '/../lib/AppInfo/Application.php',
        'OCA\\LookupServerConnector\\BackgroundJobs\\RetryJob' => __DIR__ . '/..' . '/../lib/BackgroundJobs/RetryJob.php',
        'OCA\\LookupServerConnector\\UpdateLookupServer' => __DIR__ . '/..' . '/../lib/UpdateLookupServer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitLookupServerConnector::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitLookupServerConnector::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitLookupServerConnector::$classMap;

        }, null, ClassLoader::class);
    }
}
