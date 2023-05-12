<?php

/* 

Anonymous Class


*/

class SimpleClass {

    public function helloWorld() {
        echo "Hello World";
    }

}

$obj = new SimpleClass();
$obj->helloWorld();

echo "<br>";

$newObj = new class() {

    public function helloWorld() {
        echo "Hello World";
    }

    public function validState($state) {
        echo "Is this a valid state " . $state;
    }

};

$newObj->helloWorld();
echo "<br>";
$newObj->validState("Sleeping");
?>