<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


</body>
</html>

<?php

    // array = "variable" whoch can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut");

    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";
    // echo $foods[3] . "<br>";

    // $foods[0] = "pineapple";
    // array_push($foods, "pineapple", "kiwi");
    // array_pop($foods);
    // array_shift($foods);
    // $foods = array_reverse($foods);
    // echo count($foods);


    foreach($foods as $food){
        echo $food . "<br>";
    }

?>
