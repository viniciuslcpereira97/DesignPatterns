<?php

namespace PHPatterns\Observers;

class NewUserObserver extends Observer
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
