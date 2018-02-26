<?php

namespace PHPatterns\Observers;

class SendEmailToNewUser extends Observable
{
    
    /**
     *
     * Update from subject
     *
     */
    public function update(\SplSubject $event) {
        echo "sending email to: {$event->getName()}\n";
    }

}
