<?php

    $hostname="localhost";
    $username="root";
    $password="anjanshrestha8";
    $database="todo";




    
    $conn =mysqli_connect($hostname,$username,$password,$database);
    if(!$conn){
        die(mysqli_connect_error());
    }
    echo"CONNECTION VAYO LA";


?>