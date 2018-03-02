<?php

namespace PHPatterns\Behavioral\Events;

use PHPatterns\Behavioral\Events\Event;
use PHPatterns\Providers\NewUserEventProvider as EventProvider;

class NewUserEvent extends Event
{

    // User instance
    private $user;

    /**
     *
     * New user constructor
     *
     */
    public function __construct($user) {
        $this->user = $user;
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
    public function getName() {
        return $this->user->name;
    }

}
