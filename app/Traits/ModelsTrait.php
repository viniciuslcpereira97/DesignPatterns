<?php

namespace PHPatterns\Traits;

use ReflectionClass;

trait ModelsTrait
{

    private function pluralizeTable($table) {
        return "{$table}s";
    }

    private function tableName() {
        if(isset($this->table)) return $this->table;
        return $this->getTableNameByClassName();
    }

    private function getTableNameByClassName() {
        $caller = new ReflectionClass(get_called_class());
        return $this->pluralizeTable($caller->getShortName());
    }

}
