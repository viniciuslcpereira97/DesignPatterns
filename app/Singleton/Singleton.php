<?php

namespace PHPatterns\Singleton;

abstract class Singleton
{

    private static $instance;

    /**
     *
     */
    public static function getInstance() {
        if(!isset(self::$instance))
            self::$instance = new static;
        return self::$instance;
    }

    private function __construct() {

    }

}
