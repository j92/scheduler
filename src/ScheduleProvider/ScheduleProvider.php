<?php

namespace j92\Scheduler\ScheduleProvider;

use j92\Scheduler\EventProvider\EventProviderInterface;
use j92\Scheduler\Schedule\Schedule;

class ScheduleProvider implements ScheduleProviderInterface
{
    /**
     * @var EventProviderInterface
     */
    private $eventProvider;

    /**
     * ScheduleProvider constructor.
     * @param EventProviderInterface $eventProvider
     */
    public function __construct(EventProviderInterface $eventProvider)
    {
        $this->eventProvider = $eventProvider;
    }

    public function getSchedule()
    {
        return new Schedule($this->eventProvider);
    }

}