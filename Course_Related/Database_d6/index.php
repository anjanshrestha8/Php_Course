<?php


include'function.php';

# functional approach

// connection to data base
$conn = mysqli_connect('localhost','root','anjanshrestha8','todo');
print_it($conn);



// select data from database

$result = mysqli_query($conn,"select * from todo_tb");
// print_it($result);

// fetch all
$rows=mysqli_fetch_all($result);
print_it($rows);

// fetch all with associative
## $rows=mysqli_fetch_all($result);
## print_it($rows ,MYSQL_BOTH);




?>