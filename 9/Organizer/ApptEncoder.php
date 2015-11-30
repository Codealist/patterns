<?php

abstract class ApptEncoder
{
    abstract function encode();
}

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(){
        return "Appointment Encoded with BloggsCal format \n";
    }
}

class MegaApptEncoder extends ApptEncoder
{
    public function encode(){
        return "Appointment Encoded with MegaCal format \n";
    }
}

