<?php

interface PaymentInterface {
    public function payNow();
}

interface LoginInterface {
    public function loginFirst();
}


class BankTransfer implements PaymentInterface, LoginInterface {
    public function loginFirst() {}
    public function payNow() {}
    public function paymentProcess() {
        $this->loginFirst();
        $this->payNow();
    }
}

class Visa implements PaymentInterface {
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();
    }
}

class Cash implements PaymentInterface {
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();
    }
}

/* 

Interface is a blueprint that we use to 
group together specific classes to tell them 
how to behave.

All interface methods must be public
Interface Implements
Interfaces cannot have properties

Interface will let the other developers
to perform similar actions declared in 
interface class and must implement the methods 
available on the interface that it implemented  

*/

//For usage 

class BuyProduct {

    public function pay(PaymentInterface $paymentType) {
        $paymentType->paymentProcess();
    }
}


?>