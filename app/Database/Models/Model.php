<?php

namespace PHPatterns\Database\Models;

use PDO;
use PHPatterns\Traits\ModelsTrait;
use PHPatterns\Database\DatabaseConnection;
use PHPatterns\Behavioral\Events\NewUserEvent as UserCreatedEvent;
use PHPatterns\Contracts\Database\Model as ModelContract;

abstract class Model implements ModelContract
{

    use ModelsTrait;

    /* database connection */
    private static $database;

    /**
     *
     * Model constructor
     *
     */
    public function __construct()
    {
        self::setConnection();
    }

    /**
     *
     * Gets singleton DatabaseConnection instance
     *
     */
    public static function setConnection()
    {
        self::$database = DatabaseConnection::getInstance();
    }

    /**
     * Finds model by Id
     */
    public static function find(Int $id)
    {
        $instance = new static;
        return $instance->getById($id);
    }

    /**
     * Returns all data at table
     */
    public static function all()
    {
        return "all";
    }

    /**
     * Creates new data at table
     */
    public static function create(Array $attr)
    {
        // TODO: Create User object
        $user = (object) $attr;

        return new UserCreatedEvent($user);
    }

}
