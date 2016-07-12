<?php

namespace j92\Scheduler\ScheduleProvider;

use j92\Scheduler\Schedule\ScheduleInterface;

interface ScheduleProviderInterface
{
    /**
     * @return ScheduleInterface
     */
    public function getSchedule();
}