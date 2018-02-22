<?php

namespace PHPatterns\Database\Models;

use PHPatterns\Database\DatabaseConnection;
use PHPatterns\Contracts\Database\Model as ModelContract;

abstract class Model implements ModelContract
{

    private static $database;

    public function __construct() {
        self::setConnection();
    }

    public static function setConnection() {
        self::$database = DatabaseConnection::getInstance();
    }

    /**
     *
     */
    public static function find(Int $id) {
        return self::$database->query();
    }

    /**
     *
     */
    public static function all() {
        return "all";
    }

    /**
     *
     */
    public static function create(Array $attr) {
        return $attr;
    }

}
