<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Run OOP</title>
</head>
<body>
    <h1>This is for Properties and Method</h1>
    <?php 

    include "includes/test1.php";

    $person1 = new Person();
    $person1->setName("Chester Almonte");
    echo $person1->name;
    echo "</br>";
    $person2 = new Person();
    $person2->setName("Luigi Octaviano");
    echo $person2->name;
    ?>
</body>
</html>