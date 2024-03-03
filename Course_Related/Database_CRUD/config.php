<?php

$hostname= "localhost";
$database= "todo";
$password="anjanshrestha8";
$username= "root";


$conn =mysqli_connect($hostname,$username,$password,$database);
while(!$conn){
    die(mysqli_connect_error());
}


?>