<?php

abstract class CompositeUnit extends Unit
{
    abstract public function addUnit( Unit $unit );
    abstract public function removeUnit( Unit $unit );
}



class TroopCarrier extends CompositeUnit
{
    private $units = [];

    /**
     * @param Unit $unit
     * @return $this|void
     */
    public function addUnit( Unit $unit )
    {
        if (in_array($unit, $this->units, true)) {
            return $this;
        }
        array_push($this->units, $unit);
        return $this;
    }

    /**
     * @param Unit $unit
     * @return $this|void
     */
    public function removeUnit(Unit $unit)
    {
        $this->units = array_udiff($this->units, [$unit], function($a, $b)
        { return ($a === $b)?0:1; });
        return $this;
    }

    /**
     * @return int
     */
    public function bombardStrength()
    {
        $res = 0;
        foreach ($this->units as $unit) {
            $res += $unit->bombardStrength();
        }
        return $res;
    }
}


class Army extends CompositeUnit
{
    private $units = [];

    /**
     * @param Unit $unit
     * @return $this|void
     */
    public function addUnit( Unit $unit )
    {
        if (in_array($unit, $this->units, true)) {
            return $this;
        }
        array_push($this->units, $unit);
        return $this;
    }

    /**
     * @param Unit $unit
     * @return $this|void
     */
    public function removeUnit(Unit $unit)
    {
        $this->units = array_udiff($this->units, [$unit], function($a, $b)
        { return ($a === $b)?0:1; });
        return $this;
    }

    /**
     * @return int
     */
    public function bombardStrength()
    {
        $res = 0;
        foreach ($this->units as $unit) {
            $res += $unit->bombardStrength();
        }
        return $res;
    }
}
