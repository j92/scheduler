<?php

namespace j92\Scheduler\Event;

use Cron\CronExpression;

class Event implements EventInterface
{
    /**
     * @var CronExpression
     */
    private $expression;

    /**
     * Event constructor.
     * @param CronExpression $expression
     */
    public function __construct(CronExpression $expression)
    {
        $this->expression = $expression;
    }

    /**
     * When should the event run
     * @return bool
     */
    public function shouldRun()
    {
        return $this->expression->isDue();
    }

    /**
     * Runs the event
     * @return mixed
     */
    public function run()
    {
        // TODO: Implement run() method.
    }

    /**
     * Returns the exact time the event show run
     * @return CronExpression
     */
    public function getNextRunDate()
    {
        return $this->expression->getNextRunDate();
    }

}