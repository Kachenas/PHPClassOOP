<?php 

class SecondClass extends FirstClass{

    public static $staticProperty = "A static Property";

    public static function anothertest() {
       echo parent::EXAMPLE;
       echo "<br>";
       echo self::$staticProperty;
    }
}

?>