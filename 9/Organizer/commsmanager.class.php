<?php

abstract class CommsManager
{
    abstract function getApptEncoder();
    abstract function getHeaderText();
    abstract function getFooterText();
}

class BloggsCommsManager extends CommsManager
{
    function getApptEncoder()
    {
        return new BloggsApptEncoder();
    }

    function getHeaderText()
    {
        return "Upper text";
    }

    function getFooterText()
    {
        return "Footer text";
    }
}