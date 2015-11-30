<?php


if( !isset($_GET['useConfig']) ){
    /*
        case 1: default
    */

    $bloggsCM = new BloggsCommsManager();
    $megaCM = new MegaCommsManager();

    $appt = $bloggsCM->make(CommsManager::APPT);
    $ttd = $megaCM->make(CommsManager::TTD);
    $cnt = $bloggsCM->make(CommsManager::CONTACT);

    echo $appt->encode();     //Appointment Encoded with BloggsCal format
    echo $ttd->encode();     //T0d0 Encoded with MegaCal format
    echo $cnt->encode();     //Contact Encoded with BloggsCal format

} else {
    /*
        case 2: using AppConfig from the end of 9-th chapter
    */
    $cm = AppConfig::getInstance()->getCommsManager();

    $appt = $cm->make(CommsManager::APPT);
    $ttd = $cm->make(CommsManager::TTD);
    $cnt = $cm->make(CommsManager::CONTACT);

    echo $appt->encode();     //Appointment Encoded with MegaCal format
    echo $ttd->encode();     //T0d0 Encoded with MegaCal format
    echo $cnt->encode();     //Contact Encoded with MegaCal format

}





