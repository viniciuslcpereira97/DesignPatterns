<?php

namespace PHPatterns\Contracts\DatabaseContracts;

interface Model
{
    /**
     * Find ocurrences at table where id
     * @var Int
     * @return (Array|Object)
     */
    public static function find(Int $id);

    /**
     * Find all ocurrences at table
     * @return (Array|Object)
     */
    public static function all();

    /**
     * Create new ocurrence at table
     * @var Array
     */
    public static function create(Array $attr);

}
