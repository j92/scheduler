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
     * When should the event run
     * @return bool
     */
    public function shouldRun()
    {
        return $this->getExpression()->isDue();
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
    public function shouldRunWhen()
    {
        return $this->getExpression()->getNextRunDate();
    }

    /**
     * @return CronExpression
     */
    protected function getExpression()
    {
        if (empty($this->expression)) {
            throw new \InvalidArgumentException('Missing expression');
        }
        return $this->expression;
    }

    protected function setExpression($expression)
    {
        if (!CronExpression::isValidExpression($expression)) {
            throw new \InvalidArgumentException('Invalid expression');
        }
        $this->expression = CronExpression::factory($expression);
    }
}