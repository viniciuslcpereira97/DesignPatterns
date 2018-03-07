<?php

namespace PHPatterns\Creational\Singleton;

use PHPatterns\Contracts\SingletonContract;

/**
 * Singleton Pattern
 *
 * This pattern is used when you should have only one
 * instance of the object
 *
 */
abstract class Singleton implements SingletonContract
{
    /* instances variable */
    private static $instances;

    /**
     *
     * check if instance is initialized, else creates new instance and return
     *
     */
    public static function getInstance()
    {
        $called_class = get_called_class();
        if(!isset(self::$instances[$called_class]))
            self::$instances[$called_class] = new $called_class;
        return self::$instances[$called_class];
    }

    /**
     *
     * This prevents to use new outside this class to create new instances
     *
     */
    private function __construct()
    {
        
    }

}
