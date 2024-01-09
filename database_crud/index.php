<?php


include'function.php';

// connection establish

echo"<h1>Connecting Database</h1>";
$connection = mysqli_connect("localhost","root","anjanshrestha8","todo");
print_this($connection);

// selecting data

echo"<h1>Selecting Database</h1>";
$result = mysqli_query($connection,"select * from todo_tb");
print_this($result);

// fetching
echo"<h1>Fetching Database</h1>";
$rows = mysqli_fetch_all($result);
print_this($rows);

// inserting

// echo"<h1>Inserting Database</h1>";
// $insert = mysqli_query($connection,"insert into todo_tb(ID,NAME,AGE) values(2,"Shrestha",22)");
// print_this($insert);









?>