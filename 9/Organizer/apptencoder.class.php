<?php

abstract class ApptEncoder
{
    abstract function encode();
}

class BloggsApptEncoder extends ApptEncoder
{
    function encode(){
        return "Encoded with BloggsCal format \n";
    }
}