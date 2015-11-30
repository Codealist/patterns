<?php

$pref = Preferences::getInstance();

$pref->setProperty("name", "William");

unset($pref);

$pref2 = Preferences::getInstance();

echo $pref2->getProperty("name");