<?php

$boss = new NastyBoss();
$boss->addEmployee( Employee::recruit("Bob") );
$boss->addEmployee( Employee::recruit("Steve") );
$boss->addEmployee( Employee::recruit("Lisa") );
$boss->projectFails();
$boss->projectFails();
$boss->projectFails();