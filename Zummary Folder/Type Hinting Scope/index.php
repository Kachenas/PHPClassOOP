<?php 
declare(strict_types = 1);
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

    
    <h1>This is for Type Declaration</h1>

    <?php

    $person1 = new Person\Person();
    
    try {
        $person1->setName("Chester");
        echo $person1->getName();
    } catch (TypeError $th) {
       echo "Error!: " . $th->getMessage();
    }

    ?>

    

</body>
</html>