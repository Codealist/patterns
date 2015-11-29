<?php

abstract class Unit
{
    abstract public function addUnit( Unit $unit );
    abstract public function removeUnit( Unit $unit );
    abstract public function bombardStrength();
}

class Archer extends Unit
{
    public function bombardStrength()
    {
        return 4;
    }
}

class LaserCannonUnit extends Unit
{
    public function bombardStrength()
    {
        return 44;
    }
}

class TroopCarrier extends Unit
{
    public function bombardStrength()
    {
        return 44;
    }
}


class Army extends Unit
{
    private $units = [];

    public function addUnit( Unit $unit )
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }
        array_push($this->units, $unit);
    }

    public function removeUnit(Unit $unit)
    {
        $this->units = array
    }


    public function bombardStrength()
    {
        $res = 0;
        foreach ($this->units as $unit) {
            $res += $unit->bombardStrength();
        }
        foreach ($this->armies as $army) {
            $res += $army->bombardStrength();
        }
        return $res;
    }
}

