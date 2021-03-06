<?php

namespace PHPatterns\Behavioral\Events;

abstract class Event implements \SplSubject
{

    // Observers attached to subject
    private $observers = array();

    /**
     *
     * Attaches new observer to subject
     *
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     *
     * Detaches observer from subject
     *
     */
    public function detach(\SplObserver $observer)
    {
        if(array_search($observer, $this->observers, true))
            unset($this->observers[$observer]);
    }

    /**
     *
     * Notifies updates to all observers
     *
     */
    public function notify()
    {
        // Has observers?
        if(!count($this->observers) > 0) return;

        // For each observer notify him
        foreach($this->observers as $observer)
            $observer->update($this);
    }

}
