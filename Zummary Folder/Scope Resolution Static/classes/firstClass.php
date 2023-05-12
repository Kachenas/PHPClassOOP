<?php 

class FirstClass {

    /* 
    
    :: -> Scope Resolution Operator

    For Scope resolution operator, accessing property and 
    method on same class, use self::

    If inheriting a property or method from 
    parent class to sublass use
    parent::
    
    */

    const EXAMPLE = "You cant change this";

    public static function test() {
        $testing = "This is a test";
        return $testing;
    }
}

?>