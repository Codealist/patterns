<?php

abstract class Unit
{
    /**
     * @return int
     */
    abstract public function bombardStrength();

    /**
     * Blocker
     * @return null
     */
    public function getComposite()
    {
        return null;
    }
}


