<?php

class Preferences
{
    private $props;
    private static $_instance;

    /**
     * enclosed constructor
     */
    private function __construct(){}


    /**
     * @return Preferences
     */
    public static function getInstance()
    {
        if(!self::$_instance){
            self::$_instance = new Preferences();
        }
        return self::$_instance;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function getProperty($key)
    {
        return $this->props[$key];
    }

    /**
     * @param string $key
     * @param mixed $val
     */
    public function setProperty($key, $val)
    {
        $this->props[$key] = $val;
    }


}