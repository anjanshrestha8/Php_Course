<?php

    $hostname="localhost";
    $username="root";
    $password="anjanshrestha8";
    $database="todo";



    function print_this($var){
        echo"<pre>";
        print_r($var);
        echo"</pre>";
    }
    
    $conn =mysqli_connect($hostname,$username,$password,$database);
    if(!$conn){
        die(mysqli_connect_error());
    }
    echo"CONNECTION VAYO LA";

// READ OPERATION
    $query="SELECT * FROM todo_tb";
    $sql=mysqli_query($conn,$query);
    $fetch=mysqli_fetch_all($sql);

   print_this($fetch);






?>