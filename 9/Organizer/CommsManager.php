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
    /**
     * @param integer $flag
     * @return BloggsApptEncoder|BloggsContactsEncoder|BloggsTtdEncoder
     */
    public function make( $flag )
    {
        switch ( $flag ){
            case CommsManager::APPT:
                $enc = new BloggsApptEncoder();
                break;
            case CommsManager::TTD:
                $enc = new BloggsTtdEncoder();
                break;
            default:
                $enc = new BloggsContactsEncoder();
        }
        return $enc;
    }

    public function getHeaderText()
    {
        return "BloggsCal Header text";
    }

    public function getFooterText()
    {
        return "BloggsCal Footer text";
    }
}

class MegaCommsManager extends CommsManager
{
    /**
     * @param integer $flag
     * @return MegaApptEncoder|MegaContactsEncoder|MegaTtdEncoder
     */
    public function make( $flag )
    {
        switch ( $flag ){
            case CommsManager::APPT:
                $enc = new MegaApptEncoder();
                break;
            case CommsManager::TTD:
                $enc = new MegaTtdEncoder();
                break;
            default:
                $enc = new MegaContactsEncoder();
        }
        return $enc;
    }

    public function getHeaderText()
    {
        return "MegaCal Header text";
    }

    public function getFooterText()
    {
        return "MegaCal Footer text";
    }
}