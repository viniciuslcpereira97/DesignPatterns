<?php

    /**
     * Require composer autoload
     * PSR-4
     */
    require_once(__DIR__ . '/vendor/autoload.php');
    require_once(__DIR__ . '/vendor/viniciuslcpereira97/BRquent/vendor/autoload.php');

    use PHPatterns\Database\Models\User;

    User::find(1);
