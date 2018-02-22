<?php

namespace PHPatterns\Singleton;

/**
 * Singleton Pattern
 *
 * This pattern is used when you should have only one
 * instance of the object
 *
 */
abstract class Singleton
{
    /* instance variable */
    private static $instance;

    /**
     *
     * check if instance is initialized, else creates new instance and return
     *
     */
    public static function getInstance() {
        if(!isset(self::$instance))
            self::$instance = new static;
        return self::$instance;
    }

    /**
     *
     * This prevents to use new outside this class to create new instances
     *
     */
    private function __construct() {}

}
