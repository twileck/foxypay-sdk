<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcb9b71fb150edabdae0fe64d4caeb21c
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

        spl_autoload_register(array('ComposerAutoloaderInitcb9b71fb150edabdae0fe64d4caeb21c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcb9b71fb150edabdae0fe64d4caeb21c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcb9b71fb150edabdae0fe64d4caeb21c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
