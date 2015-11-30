<?php

class Sea {
    private $navigability;

    public function __construct( $navigability )
    {
        $this->navigability = $navigability;
    }
}
class MarsSea extends Sea {}
class EarthSea extends Sea {}

class Forest {}
class MarsForest extends Forest {}
class EarthForest extends Forest {}

class Plains {}
class MarsPlains extends Plains {}
class EarthPlains extends Plains {}


class TerrainFactory
{
    private $sea;
    private $forest;
    private $plains;

    public function __construct(Sea $sea, Forest $forest, Plains $plains)
    {
        $this->sea = $sea;
        $this->forest = $forest;
        $this->plains = $plains;
    }

    /**
     * @return Sea
     */
    public function getSea()
    {
        return $this->sea;
    }

    /**
     * @return Forest
     */
    public function getForest()
    {
        return $this->forest;
    }

    /**
     * @return Plains
     */
    public function getPlains()
    {
        return $this->plains;
    }


}

