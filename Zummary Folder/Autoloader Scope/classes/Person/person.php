<?php

namespace Person;

class Person {

    private $name;
    private $age;

    public function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getPerson(){
        return "Hello, you are " . $this->name . " and age of " . $this->age;
    }

    public static function thisIsCalled() {
        return " I am being called in static function!";
    }


}

?>