<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Run OOP</title>
</head>
<body>
    <h1>This is for Explaining Static Properties and Method</h1>
    <?php 

    include "includes/test1.php";

    $person1 = new Person("Chester Almonte","Green","25");
    echo $person1->getName();
    echo "<br>";
    echo $person1->getDA();
    echo "<br>";
    /* 

    Use :: to access static properties and method
    
    */

    echo Person::$drinkingAge;
    echo "<br>";
    Person::setDrinkingAge(30);
    echo Person::$drinkingAge;


    
   
    ?>
</body>
</html>