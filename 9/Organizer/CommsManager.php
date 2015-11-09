<?php

abstract class CommsManager
{
    const APPT = 1;
    const TTD = 2;
    const CONTACT = 3;


    abstract public function make( $flag );
    abstract public function getFooterText();
    abstract public function getHeaderText();
}



class BloggsCommsManager extends CommsManager
{

    public function make( $flag )
    {
        switch ( $flag ){
            case CommsManager::APPT:
                $enc = new BloggsApptEncoder();
                break;
            case CommsManager::TTD:
                $enc = new BloggsTtdEncoder();
                break;
            case CommsManager::CONTACT:
                $enc = new BloggsContactsEncoder();
                break;
        }
        return $enc;
    }

    function getHeaderText()
    {
        return "BloggsCal Header text";
    }

    function getFooterText()
    {
        return "BloggsCal Footer text";
    }
}

class MegaCommsManager extends CommsManager
{
    public function make( $flag )
    {
        switch ( $flag ){
            case CommsManager::APPT:
                $enc = new MegaApptEncoder();
                break;
            case CommsManager::TTD:
                $enc = new MegaTtdEncoder();
                break;
            case CommsManager::CONTACT:
                $enc = new MegaContactsEncoder();
                break;
        }
        return $enc;
    }

    function getHeaderText()
    {
        return "MegaCal Header text";
    }

    function getFooterText()
    {
        return "MegaCal Footer text";
    }
}