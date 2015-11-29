<?php

//TODO 214 page

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