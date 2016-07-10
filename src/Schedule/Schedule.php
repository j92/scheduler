<?php

namespace j92\Scheduler\Schedule;

use Scheduler\Event\EventInterface;
use Scheduler\EventProvider\EventProviderInterface;

class Schedule implements ScheduleInterface
{
    /**
     * @var EventProviderInterface[]
     */
    private $eventProviders = [];
    
    /**
     * @return EventInterface[]
     */
    public function getEvents()
    {
        $events = [];
        foreach ($this->eventProviders as $eventProvider) {
            $events[] = $eventProvider->provide();
        } 
        return $events;
    }
}