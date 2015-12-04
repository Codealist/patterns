<?php

abstract class Unit
{
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