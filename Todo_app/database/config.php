<?php

$username = 'root';
$password = 'anjanshrestha8';
$hostname = "localhost";
$database_name = "todo";

$conn = mysqli_connect($hostname, $username, $password, $database_name);
if (!$conn) {
  die(mysqli_connect_error());
}
