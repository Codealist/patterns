<?php

$factory = new TerrainFactory(
    new EarthSea( -2 ),
    new EarthForest(),
    new EarthPlains() );

print_r($factory->getSea());
print_r($factory->getForest());
print_r($factory->getPlains());