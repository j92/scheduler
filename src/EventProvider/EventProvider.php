<?php

namespace j92\Scheduler\EventProvider;

use Scheduler\Event\EventInterface;
use Scheduler\Event\TimeLogCommandEvent;
use Scheduler\Event\TimeLogTwiceEvent;

class EventProvider implements EventProviderInterface
{
    /**
     * Provide a list of Events
     * @return EventInterface[]
     */
    public function provide()
    {
        return [
            new TimeLogCommandEvent(),
            new TimeLogTwiceEvent()
        ];
    }
}