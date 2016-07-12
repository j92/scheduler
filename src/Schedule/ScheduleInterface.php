<?php

namespace j92\Scheduler\Schedule;

use j92\Scheduler\Event\EventInterface;

interface ScheduleInterface
{
    /**
     * @return EventInterface[]
     */
    public function getEvents();
}