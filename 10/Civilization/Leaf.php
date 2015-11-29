<?php

class Archer extends Unit
{
    /**
     * @return int
     */
    public function bombardStrength()
    {
        return 4;
    }
}

class LaserCannonUnit extends Unit
{
    /**
     * @return int
     */
    public function bombardStrength()
    {
        return 44;
    }
}

class Cavalry extends Unit
{
    /**
     * @return int
     */
    public function bombardStrength()
    {
        return 20;
    }
}
