<?php
namespace chapter10;


abstract class Tile
{
    abstract public function getWealthFactor();
}

class Plains extends Tile
{
    protected $wealth_factor = 2;

    /**
     * @return mixed
     */
    public function getWealthFactor()
    {
        return $this->wealth_factor;
    }

}

abstract class TileDecorator extends Tile
{
    /**
     * @var Tile
     */
    protected $tile;

    /**
     * TileDecorator constructor.
     * @param Tile $tile
     */
    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}

class DiamondDecorator extends TileDecorator
{
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() + 2;
    }
}

class PollutionDecorator extends TileDecorator
{
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() - 4;
    }
}