<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Run OOP</title>
</head>
<body>
    <h1>This is for Explaining Private, Public and Protected Properties</h1>
    <?php 

    include "includes/test1.php";
    $p1 = new Person2();
    echo $p1->owner();
    ?>
</body>
</html>