<?php

abstract class Visa {

    public function visaPayment() {
        return "Perform a payment";
    }

    abstract public function getPayment();
    /* 
    if any class extends to this abtsract class
    they have to include a getPayment Method

    Sample error message
    Class BuyProduct contains 1 abstract method and
    must therefore be declared abstract or 
    implement the remaining methods
    
    */
}


/* 
Rules: 
1. You cant create object from abstract class
Ex: 
$person = new Visa(); Will return an error

2. You cant access properties and method in an object

3. Can only be reference thru other classes
Ex:
$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();

BuyProduct extends the Abstract Class Visa

4. If abstract function is created in any class,
 you have to make the entire class abstract


*/
?>