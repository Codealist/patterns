<?php




$reg = new RegistrationMgr();
$reg->register(new Lecture(4, new FixedCostStrategy() ));
$reg->register(new Seminar(5, new TimedCostStrategy() ));