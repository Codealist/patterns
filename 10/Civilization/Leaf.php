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

