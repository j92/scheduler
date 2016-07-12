<?php

namespace j92\Scheduler\Event;

use Cron\CronExpression;

interface EventInterface
{
    /**
     * Returns the exact time the event show run
     * @return CronExpression
     */
    public function getNextRunDate();

     /**
      * Should we run the event now
      * @return bool
      */
    public function shouldRun();

    /**
     * Runs the event
     * @return mixed
     */
    public function run();
}