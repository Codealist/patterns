<?php

abstract class ApptEncoder
{
    abstract function encode();
}

class BloggsApptEncoder extends ApptEncoder
{
    function encode(){
        return "Appointment Encoded with BloggsCal format \n";
    }
}

class MegaApptEncoder extends ApptEncoder
{
    function encode(){
        return "Appointment Encoded with MegaCal format \n";
    }
}

