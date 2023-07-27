<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>


</body>
</html>

<?php

    // associative array = An array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price

    $capitals = array("USA"=>"Washington D.C.",
                      "Japan"=>"Kyoto", 
                      "South Korea"=>"Seoul", 
                      "India"=>"Delhi");


    // echo $capitals["USA"];

    // $capitals["USA"] = "Las Vegas";
    // $capitals["China"] = "Beijing";
    // array_pop($capitals);
    // array_shift($capitals);

    // $keys = array_keys($capitals);
    // foreach($keys as $key){
    //     echo"{$key} <br>";
    // }

    // $values = array_values($capitals);
    // foreach($values as $value){
    //     echo"{$value} <br>";
    // }

    // $capitals = array_flip($capitals);
    // $capitals = array_reverse($capitals);
    // echo count($capitals);


    // foreach($capitals as $key => $value){
    //     echo"{$key} = {$value} <br>";
    // }


    $country = $_POST["country"];
    $capital = $capitals[$_POST["country"]];
    
    echo "The capital of {$country} is {$capital}";
    

?>
