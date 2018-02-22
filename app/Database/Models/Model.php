<?php

namespace PHPatterns\Database\Models;

use PHPatterns\Contracts\Database\Model as ModelContract;

abstract class Model implements ModelContract
{
    /**
     *
     */
    public static function find(Int $id) {
        return $id;
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
