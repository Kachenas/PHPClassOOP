<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Run OOP</title>
</head>
<body>
    <h1>This is for Explaining Constructors and Destructors</h1>
    <?php 

    include "includes/test1.php";

    $person = new Person("Chester Almonte","Brown","28");
    echo $person->getName();

    echo "<br>";

    $person2 = new Person("Chester Almonte","Blue","30");
    $person2->setName("Luigi");
    echo $person2->getName();

    echo "<br>";

    // Deleting an Object
    $person3 = new Person("Andrew Almonte","Blue","30");
    echo $person3->getName();
    unset($person3);
    // echo $person3->getName(); //Object person3 is deleted after calling unset
    ?>
</body>
</html>