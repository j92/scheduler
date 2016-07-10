<?php

namespace j92\Scheduler\Command;

use Scheduler\EventProvider\EventProvider;
use Scheduler\EventProvider\EventProviderInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SchedulerCommand extends Command
{
    /**
     * @var EventProviderInterface[]
     */
    private $eventProviders = [];

    protected function configure()
    {
        $this
            ->setName('schedule:run')
            ->setDescription('Run the scheduled commands')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->eventProviders[] = new EventProvider();
        foreach ($this->eventProviders as $eventProvider) {
           $events = $eventProvider->provide();
           foreach ($events as $event) {
               if ($event->shouldRun()) {
                   $event->run();
               }
           }
       }
    }
}