<?php

namespace j92\Scheduler\EventProvider;

use j92\Scheduler\Event\EventInterface;

class EventProvider implements EventProviderInterface
{
    /**
     * @var EventInterface[]
     */
    private $events = [];

    /**
     * EventProvider constructor.
     * @param EventInterface[] $events
     */
    public function __construct(array $events)
    {
        $this->events = $events;
    }

    /**
     * @inheritdoc
     */
    public function getEvents()
    {
        return $this->events;
    }
}