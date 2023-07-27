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

    // Logical operators = combine conditional statements
    // if(condition1 && condition2)

    // && = True if both conditions are true
    // || = True if at least one condition is true
    //  ! = True if false. False if true.

    // $temp = 15;

    // if($temp >= 0 && $temp <= 30){
    //     echo"The weather is good.";
    // }
    // else{
    //     echo"The weather is bad.";
    // }

    // $temp = -100;

    // if($temp < 0 || $temp > 30){
    //     echo"The weather is bad.";
    // }
    // else{
    //     echo"The weather is good.";
    // }
    

    // $temp = 15;
    // $cloudy = true;

    // if($cloudy){
    //     echo"It's cloudy.";
    // }
    // else{
    //     echo"It's sunny.";
    // }

    // if(!$cloudy){
    //     echo"It's sunny.";
    // }
    // else{
    //     echo"It's cloudy.";
    // }

    // $age = 12;
    // $citizen = true;

    // if($age >= 18 && $citizen){
    //     echo"You can vote.";
    // }
    // else{
    //     echo"You cannot vote.";
    // }

    // if(!($age >= 18) || !$citizen){
    //     echo"You cannot vote.";
    // }
    // else{
    //     echo"You can vote.";
    // }


    $child = false;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo"The ticket price is \${$ticket}";

?>