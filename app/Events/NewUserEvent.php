<?php

namespace PHPatterns\Events;

use PHPatterns\Events\Event;
use PHPatterns\Providers\NewUserEventProvider as EventProvider;

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
        $this->attachObservers(function() {
            return $this->notify();
        });
    }

    /**
     *
     * Gets and registers all observers
     *
     */
    public function attachObservers($callback) {
        foreach(EventProvider::getObservers() as $observer)
            $this->attach(new $observer);

        $callback();
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
