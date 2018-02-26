<?php

namespace PHPatterns\Events;

use PHPatterns\Events\Event;

class NewUserEvent extends Event
{

    // User name
    private $name;

    /**
     *
     * New user constructor
     *
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     *
     * Name getter
     *
     */
    public function getName()
    {
        return $this->name;
    }

}
