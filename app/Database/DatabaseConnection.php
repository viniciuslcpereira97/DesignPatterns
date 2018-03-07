<?php

namespace PHPatterns\Database;

use \PDO as PDO;

class DatabaseConnection extends \PHPatterns\Creational\Singleton\Singleton
{
    /**
     *
     * Holds on PDO connection
     *
     */
    private $connection;

    /**
     *
     * Creates PDO mysql database connection
     * Handles if PDO Exception was trown
     *
     */
    protected function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost;dbname=php_patterns_test', 'root', 'shambala');
        }
        catch(PDOException $e) {
            echo "ERROR: {$e}";
        }
    }

    /**
     *
     * Retrieves PDO connection
     *
     */
    public function __get($name)
    {
        return $this->$name;
    }

}
