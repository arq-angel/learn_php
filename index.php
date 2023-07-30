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

    // $username = "   Bro The Code   ";
    $username = array("Bro", "The", "Code");
    $phone = "123-456-789";


    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, "0");
    // $phone = str_replace("-", "", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username, "Bro Code");
    // $count = strlen($phone);
    // $index = strpos($phone, "-");
    // $firstname = substr($username, 0, 3);
    // $lastname = substr($username, 4);
    // $fullname = explode(" ", $username);
    $username = implode("-", $username);


    // echo $username;
    // echo $phone;
    // echo $equals;
    // echo $count;
    // echo $firstname;
    // echo $lastname;
    // echo $fullname;

    // foreach($fullname as $name){
    //     echo $name . "<br>";
    // }

    echo $username;



?>
