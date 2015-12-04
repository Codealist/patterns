<?php
namespace noodles;

function getProductFileLines($file)
{
    return file($file);
}

function getNameFromLine($line)
{
    if(preg_match("@.*-(.*)\s\d+@", $line, $array)){
        return str_replace("_", " ", $array[1]);
    }
    return null;
}

function getIdFromLine($line)
{
    if(preg_match("@^(\d{1,3})-@", $line, $array)){
        return $array[1];
    }
    return -1;
}