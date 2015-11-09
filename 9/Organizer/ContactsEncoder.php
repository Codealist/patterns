<?php

abstract class ContactsEncoder
{
    abstract function encode();
}

class BloggsContactsEncoder extends ContactsEncoder
{
    function encode(){
        return "Contact Encoded with BloggsCal format \n";
    }
}

class MegaContactsEncoder extends ContactsEncoder
{
    function encode(){
        return "Contact Encoded with MegaCal format \n";
    }
}