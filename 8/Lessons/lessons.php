<?php
//include_once "cost_strategy.php";

abstract class Lesson
{
    protected $duration;
    protected $costStrategy;


    public function __construct( $duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
    }

    /**
     * @return int
     */
    public function cost()
    {
        return $this->costStrategy->cost($this);
    }

    /**
     * @return string
     */
    public function chargeType()
    {
        return $this->costStrategy->chargeType();
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }
}

class Lecture extends Lesson
{
    // some realisations
}

class Seminar extends Lesson
{
    // some realisations
}
//
//$lecture = new Lecture(10, new FixedCostStrategy());
//echo $lecture->chargeType() . ", цена = " . $lecture->cost();
//echo "<br>";
//$seminar = new Seminar(8, new TimedCostStrategy());
//echo $seminar->chargeType() . ", цена = " . $seminar->cost();
