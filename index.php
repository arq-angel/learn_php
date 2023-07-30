<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">

    </form>

</body>
</html>

<?php

    // function = write some code once, reuse when you need it
    //            type () after function name to invoke
    //            ex. add() subtract() multiply() divide()


    // function happy_birthday($first_name, $age){
    //     echo"Happy Birthday dear {$first_name}! <br>";
    //     echo"Happy Birthday to you! <br>";
    //     echo"Happy Birthday dear {$first_name}! <br>";
    //     echo"You are {$age} years old! <br><br>";
    // }

    // happy_birthday("Spongebob", 30);
    // happy_birthday("Patrick", 35);
    // happy_birthday("Squidward", 45);


    // function is_even($number){
    //     // $result = $number % 2;
    //     // return $result;

    //     return $number % 2;
    // }

    // echo is_even(10);

    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(4, 5);


?>
