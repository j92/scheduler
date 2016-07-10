<?php

namespace j92\Scheduler\Event;

class TimeLogTwiceEvent extends Event
{

    /**
     * TimeLogTwiceEvent constructor.
     */
    public function __construct()
    {
        $this->setExpression('*/2 * * * * *');
    }

    public function run()
    {
        $handle = fopen('/tmp/time_log.txt', 'a');
        $now = new \DateTime();
        fwrite($handle, $now->format('Y-m-dTH:i:s') . ' &&&& ' . $now->format('Y-m-dTH:i:s') . PHP_EOL);
        fclose($handle);
    }

}