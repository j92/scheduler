<?php

namespace j92\Scheduler\EventProvider;

use j92\Scheduler\Event\EventInterface;

interface EventProviderInterface
{
    /**
     * Provide a list of Events
     * @return EventInterface[]
     */
    public function getEvents();
}