<?php
    $hostname="localhost";
    $username="root";
    $password="anjanshrestha8";
    $database="CRUD";
    

    $conn=mysqli_connect($hostname,$username,$password,$database);
    if(!$conn){
        die(mysqli_connect_error());
    }
    else{
        echo"<u>CONNECTION ESTABLISH</u>";
    }

?>