<?php


include'function.php';

# functional approach

// connection to data base
$conn = mysqli_connect('localhost','root','anjanshrestha8','');
print_it($conn);



// select data from database

$result = mysqli_query($conn,"select * from ");


// fetch all
$rows=mysqli_fetch_all($result);
print_it($rows);

// fectch all with associative
$rows=mysqli_fetch_all($result);
print_it($rows,MYSQLI_ASSOC);




?>