<?php

namespace PHPatterns\Providers;

class NewUserEventProvider
{

    /**
     *
     * Registers all observers of event
     *
     */
    const providers = [
        'PHPatterns\Observers\NewUserObserver',
        'PHPatterns\Observers\SendEmailToNewUser',
    ];

    /**
     *
     * Gets all observers
     *
     */
    public static function getObservers() {
        return self::providers;
    }

}
