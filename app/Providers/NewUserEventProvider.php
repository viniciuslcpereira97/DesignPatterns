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
        'PHPatterns\Behavioral\Observers\NewUserObserver',
        'PHPatterns\Behavioral\Observers\SendEmailToNewUser',
    ];

    /**
     *
     * Gets all observers
     *
     */
    public static function getObservers()
    {
        return self::observers;
    }

}
