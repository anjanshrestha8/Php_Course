<?php
    $hostname="localhost";
    $username="root";
    $password="anjanshrestha8";
    $dbname="CRUD";

    $conn=mysqli_connect($hostname,$username,$password,$dbname);
    if(!$conn){
        die(mysqli_connect_error());
    }
    else{
        echo"connected";

    }



?>