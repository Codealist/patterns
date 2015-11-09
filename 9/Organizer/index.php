<?php


$bloggsCM = new BloggsCommsManager();
$megaCM = new MegaCommsManager();

$appt = $bloggsCM->make(CommsManager::APPT);
$ttd = $megaCM->make(CommsManager::TTD);
$cnt = $bloggsCM->make(CommsManager::CONTACT);

echo $appt->encode();
echo $ttd->encode();
echo $cnt->encode();


//Appointment Encoded with BloggsCal format
//T0d0 Encoded with MegaCal format
//Contact Encoded with BloggsCal format
