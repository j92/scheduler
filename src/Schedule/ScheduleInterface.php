<?php

namespace j92\Scheduler\Schedule;

use Scheduler\Event\EventInterface;

interface ScheduleInterface
{
    /**
     * @return EventInterface[]
     */
    public function getEvents();
}