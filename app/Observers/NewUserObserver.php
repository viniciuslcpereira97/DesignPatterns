<?php

namespace PHPatterns\Observers;

class NewUserObserver extends Observable
{

    /**
     *
     * Update from subject
     *
     */
    public function update(\SplSubject $event)
    {
        echo "new user name: {$event->getName()}\n";
    }

}
