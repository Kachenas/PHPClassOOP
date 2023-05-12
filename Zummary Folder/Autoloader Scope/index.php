<?php 
include "includes/autoloader.php";
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

    
    <h1>This is for LOading Class Automatically</h1>

    <?php

    $person1 = new Person\Person("Chester Almonte",30);
    echo $person1->getPerson();

    echo "<br>";

    $house1 = new House\House("Dagupan CIty",5);
    echo $house1->getAddress();

    echo "<br>";

    echo Person\Person::thisIsCalled();

    ?>

    

</body>
</html>