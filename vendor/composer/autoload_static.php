<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c1ff1a3dec8618a242dbc9b30fa3014
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c1ff1a3dec8618a242dbc9b30fa3014::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c1ff1a3dec8618a242dbc9b30fa3014::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
