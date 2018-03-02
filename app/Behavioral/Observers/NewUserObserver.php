<?php

namespace PHPatterns\Behavioral\Observers;

class NewUserObserver extends Observer
{

    /**
     *
     * Update from subject
     *
     */
    public function update(\SplSubject $event) {
        echo "new user: {$event->getName()}\n";
    }

}
