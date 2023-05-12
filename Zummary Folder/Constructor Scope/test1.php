<?php

class Person {

    private $name;
    private $eyeColor;
    private $age;

    public function __construct($name,$eyeColor,$age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName(){
        return "Hello, you are " . $this->name . " with eyecolor of " . $this->eyeColor . " and age of " . $this->age;
    }

    // public function __destruct() {
        
    // }


}

?>