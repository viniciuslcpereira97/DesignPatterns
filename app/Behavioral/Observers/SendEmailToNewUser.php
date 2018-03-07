<?php

namespace PHPatterns\Behavioral\Observers;

class SendEmailToNewUser extends Observer
{

    /**
     *
     * Update from subject
     *
     */
    public function update(\SplSubject $event)
    {
        echo "sending email to: {$event->user->name}\n";
    }

}
