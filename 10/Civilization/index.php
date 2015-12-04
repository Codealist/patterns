<?php


$factory = new TerrainFactory(
    new EarthSea( -2 ),
    new EarthForest(),
    new EarthPlains() );

print_r($factory->getSea());
print_r($factory->getForest());
print_r($factory->getPlains());

//TODO 216-217 page

//main army
$army = new Army();
$army->addUnit(new Archer())
     ->addUnit(new LaserCannonUnit());

//sub army
$sub_army = new Army();
$sub_army->addUnit(new TroopCarrier())
         ->addUnit(new LaserCannonUnit())
         ->addUnit(new LaserCannonUnit());

//merging two armies
$army->addUnit($sub_army);


echo "Attack power is equal to: ". $army->bombardStrength();

$carrier = new TroopCarrier();
$carrier->addUnit(new Cavalry());

print_r(UnitScript::joinExisting($carrier, $army));

