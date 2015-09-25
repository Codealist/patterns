<?php
include_once "lessons.php";

class RegistrationMgr
{
    public function register( Lesson $lesson )
    {
        // marking registration
        // ...
        // notify
        $notifier = Notifier::getNotifier();
        $notifier->inform("new lesson. cost = {$lesson->cost()}");
    }
}

abstract class Notifier
{
    public static function getNotifier()
    {
        // fake redirect
        if ( rand(1,2) == 1 ){
            return new MailNotifier();
        } else {
            return new TextNotifier();
        }
    }

    abstract public function inform($message);
}

class MailNotifier extends Notifier
{
    public function inform($message)
    {
        echo "Inform by E-MAIL : {$message} \n";
    }
}

class TextNotifier extends Notifier
{
    public function inform($message)
    {
        echo "Inform by text message: {$message} \n";
    }
}

$reg = new RegistrationMgr();
$reg->register(new Lecture(4, new FixedCostStrategy() ));
$reg->register(new Seminar(5, new TimedCostStrategy() ));