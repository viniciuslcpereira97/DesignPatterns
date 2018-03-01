<?php

namespace PHPatterns\Providers;

class NewUserEventProvider
{

    /**
     *
     * Registers all observers of event
     *
     */
    const observers = [
        'PHPatterns\Observers\NewUserObserver',
        'PHPatterns\Observers\SendEmailToNewUser',
    ];

    /**
     *
     * Gets all observers
     *
     */
    public static function getObservers() {
        return self::observers;
    }

}
