<?php

namespace Person;

class Person {

    private $name;
    private $age;


    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    /* 
    
    Type Declaration - in order to make sure that the user passed 
    right type of data inside functions or methods.


    */

    /* 
    
    By using type declaration, we can throw an error, if
    wrong type is given! Works with:

    - class/interface names;
    - self(use to reference to same class)
    - array
    - callable
    - bool
    - float
    - int 
    - string
    - iterable
    - object
    
    */
}

?>