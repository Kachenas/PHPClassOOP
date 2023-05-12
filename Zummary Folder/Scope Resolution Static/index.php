<?php 
include "classes/firstClass.php";
include "classes/secondClass.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <h1>This is for Scope Resolution</h1>

    <?php

    // echo FirstClass::test();
    // echo "<br>";
    // echo FirstClass::EXAMPLE;
    // echo "<br>";

    $secondClass = SecondClass::anothertest();

    ?>

    

</body>
</html>