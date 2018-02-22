<?php

namespace PHPatterns\Database;

use \PDO as PDO;

class DatabaseConnection extends \PHPatterns\Singleton\Singleton
{
    private $connection;

    protected function __construct() {
        echo "construct";
        $this->connection = new PDO('mysql:host=localhost;dbname=php_patterns_test', 'root', 'shambala');
    }

}
