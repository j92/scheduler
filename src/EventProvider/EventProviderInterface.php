<?php

namespace j92\Scheduler\EventProvider;

use Scheduler\Event\EventInterface;

interface EventProviderInterface
{
    /**
     * Provide a list of Events
     * @return EventInterface[]
     */
    public function provide();
}