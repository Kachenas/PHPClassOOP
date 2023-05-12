<?php 

class Person {

    protected $firstName = 'Chester';
    private $lastName = 'Almonte';
    private $gender = 'Male';

}

class Person2 extends Person {

    public function owner() {
        $owner = "Hi there " . $this->firstName;
        return $owner;  
    }

}

/* 

If property is private in parent class and subclass extends 
that public function with a private property, this will 
result into a undefined property

In order for a subclass to use inherited function 
in parent class, the property should be declared as 
protected in Parent class so that subclass can use that
function 

Note: if you have protected data, you can only access that data on
the same class or any class that extends to it.

*/

?>