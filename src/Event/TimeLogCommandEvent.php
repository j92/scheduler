<?php

namespace j92\Scheduler\Event;

class TimeLogCommandEvent extends Event
{

    /**
     * TimeLogCommandEvent constructor.
     */
    public function __construct()
    {
        $this->setExpression('* * * * * *');
    }

    public function run()
    {
        $handle = fopen('/tmp/time_log.txt', 'a');
        $now = new \DateTime();
        fwrite($handle, $now->format('Y-m-dTH:i:s') . PHP_EOL);
        fclose($handle);
    }
}