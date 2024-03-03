<?php
    $host_name="localhost";
    $user_name="root";
    $password="anjanshrestha8";
    $database_name="CRUD";

    $conn=mysqli_connect($host_name,$user_name,$password,$database_name);

    if(!$conn){
        die(mysqli_connect_error());
    }
    else{
        echo"connection vako xa la ";
    }


?>