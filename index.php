<?php
    $name = "Kenny";
    $food = "Pizza";
    $email = "fake@gmail.com";

    $age = 23;
    $users = 3;
    $quantity = 4;

    $gpa = 2.9;
    $price = 4.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = false;
    $for_sale = true;


    echo "Hello {$name}<br>";
    echo "You like {$food}<br>";
    echo "Your email address is {$email}<br>";

    echo "You are {$age} years old<br>";
    echo "There are {$users} users online<br>";
    echo "You would like to buy {$quantity} items<br>";

    echo "Your gpa is: {$gpa}<br>";
    echo "Your pizza is \${$price}<br>";
    echo "The sales tax rate is: {$tax_rate}%<br>";

    echo "Online status: {$online}<br>";
    echo "Employment status: {$employed}<br>";

    echo "You have ordered {$quantity} x {$food}s <br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total}<br>";

?>

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