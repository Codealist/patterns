<?php
abstract class Employee
{
    protected $name;
    private static $types = array("Minion", "CluedUp", "WellConnected");

    public static function recruit( $name )
    {
        $num = rand(1, count(self::$types)) - 1;
        $class = self::$types[$num];
        return new $class($name);
    }

    public function __construct( $name )
    {
        $this->name = $name;
    }

    abstract function fire();
}

class Minion extends Employee
{
    public function fire()
    {
        echo "{$this->name} : Clean the table \n";
    }
}

class NastyBoss
{
    private $employees;

    public function addEmployee( Employee $employee )
    {
        $this->employees[] = $employee;
    }

    public function projectFails()
    {
        if( count( $this->employees ) > 0 ){
            $emp = array_pop( $this->employees );
            $emp->fire();
        }
    }
}

class CluedUp extends Employee
{
    public function fire()
    {
        echo "{$this->name} : call the lawyer \n";
    }
}

class WellConnected extends Employee
{
    public function fire()
    {
        echo "{$this->name} : Call the Pap";
    }
}


