<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd05cb3f16ba5a8ae49371f17c3804e9e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitd05cb3f16ba5a8ae49371f17c3804e9e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd05cb3f16ba5a8ae49371f17c3804e9e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd05cb3f16ba5a8ae49371f17c3804e9e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}