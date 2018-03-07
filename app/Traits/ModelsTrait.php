<?php

namespace PHPatterns\Traits;

use PDO;
use ReflectionClass;

trait ModelsTrait
{

    /*----------- Database Functions -----------*/


    /**
     *
     * @TODO
     * Implement functions to retrieve data by id
     * with the lowest coupling possible
     *
     */
    private function getById(Int $id)
    {
        return "get by id";
    }


    /*----------- Model Functions -----------*/


    /**
     *
     * Simple table pluralizer
     *
     */
    private function pluralizeTable($table) : string
    {
        return "{$table}s";
    }

    /**
     *
     * Checks if table attribute is set
     * if attribute is not set, generates pluralized table name
     *
     */
    private function tableName() : string
    {
        if(isset($this->table)) return $this->table;
        return $this->getTableNameByClassName();
    }

    /**
     *
     * Reflect called class and generates table name
     *
     */
    private function getTableNameByClassName() : string
    {
        $caller = new ReflectionClass(get_called_class());
        return $this->pluralizeTable($caller->getShortName());
    }

}
