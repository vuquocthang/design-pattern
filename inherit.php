<?php
/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 8/3/2017
 * Time: 1:55 AM
 */

class School{
    protected $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }

    public function echoName(){
        echo $this->name . "</br>";
    }
}

class Clazz extends School{

    public function __construct($_name)
    {
        parent::__construct($_name);
    }

    public function setName($_name){
        $this->name = $_name;
    }

}

$school = new School("DHCN");

$school->echoName();

$clazz = new Clazz("CD");

$clazz->echoName();