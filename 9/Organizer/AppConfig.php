<?php

class AppConfig
{
    private static $_instance;
    private $commsManager;

    /**
     * enclosed constructor
     */
    private function __construct(){
        $this->init();
    }

    private function init()
    {
        switch (Settings::COMMSTYPE) {
            case "Mega":
                $this->commsManager = new MegaCommsManager();
                break;
            default:
                $this->commsManager = new BloggsCommsManager();
        }
    }


    /**
     * @return AppConfig
     */
    public static function getInstance()
    {
        if(!self::$_instance){
            self::$_instance = new AppConfig();
        }
        return self::$_instance;
    }

    /**
     * @return CommsManager
     */
    public function getCommsManager()
    {
        return $this->commsManager;
    }
}