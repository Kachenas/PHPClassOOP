<?php

namespace House;

class House {

    private $address;
    private $year;

    public function __construct($address,$year) {
        $this->address = $address;
        $this->year = $year;
    }

    public function getAddress(){
        return "Hello, you live at " . $this->address . " with " . $this->year . " of occupancy.";
    }
}

?>