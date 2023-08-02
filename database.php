<?php

    $db_server = "localhost";
    $bd_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";


    // Exception handling
    try{
        $conn = mysqli_connect($db_server, 
                           $bd_user, 
                           $db_pass, 
                           $db_name);

    }
    catch(mysqli_sql_exception){
        echo"Could not connect! <br>";
    }

    
    // if($conn){
    //     echo"You are connected <br>";
    // }

?>