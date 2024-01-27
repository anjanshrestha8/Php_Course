<?php

    $hostname='localhost';
    $username='root';
    $password='anjanshrestha8';
    $db='CRUD' ;
    // CREATE DATABASE dbname (ID PRIMARY_KEY AUTO_INCREMENT , NAME VARCHAR(45));

    $conn =mysqli_connect($hostname,$username,$password,$db);

    if(!$conn){
        die(mysqli_connect_error());
    }
    else{
        echo"connection vako xa la";
    }
?>