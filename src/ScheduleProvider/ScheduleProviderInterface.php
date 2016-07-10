<?php

namespace j92\Scheduler\Schedule;

interface ScheduleProviderInterface
{
    /**
     * @return ScheduleInterface
     */
    public function provide();
}