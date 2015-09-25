<?php
include_once 'lessons.php';

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson);
    abstract public function chargeType();

}

class FixedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson)
    {
        return 30;
    }

    public function chargeType()
    {
        return "Fixed cost";
    }
}


class TimedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson)
    {
        return ($lesson->getDuration()*15);
    }

    public function chargeType()
    {
        return "Time based cost";
    }
}