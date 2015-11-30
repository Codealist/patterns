<?php

abstract class TtdEncoder
{
    abstract function encode();
}

class BloggsTtdEncoder extends TtdEncoder
{
    function encode(){
        return "Todo Encoded with BloggsCal format \n";
    }
}

class MegaTtdEncoder extends TtdEncoder
{
    function encode(){
        return "Todo Encoded with MegaCal format \n";
    }
}