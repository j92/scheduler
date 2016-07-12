<?php

namespace j92\Scheduler\Schedule;

use j92\Scheduler\Event\EventInterface;
use j92\Scheduler\EventProvider\EventProviderInterface;

class Schedule implements ScheduleInterface
{
    /**
     * @var EventProviderInterface
     */
    private $eventProvider;

    /**
     * Schedule constructor.
     * @param EventProviderInterface $eventProvider
     */
    public function __construct(EventProviderInterface $eventProvider)
    {
        $this->eventProvider = $eventProvider;
    }
    
    /**
     * @return EventInterface[]
     */
    public function getEvents()
    {
        return $this->eventProvider->getEvents();
    }
}