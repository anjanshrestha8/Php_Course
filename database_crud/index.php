<?php


include'function.php';

// connection establish

echo"<h1>Connecting Database</h1>";
$connection = mysqli_connect("localhost","root","anjanshrestha8","todo");
print_this($connection);

// selecting data

echo"<h1>Selecting Database</h1>";
$result = mysqli_query($connection,"SELECT * FROM todo_tb");
print_this($result);


// fetching before insertion
echo"<h1>Fetching Database before insertion</h1>";
$rows = mysqli_fetch_all($result);
print_this($rows);



// inserting

echo"<h1>Inserting Database</h1>";
$insert = mysqli_query($connection,"INSERT INTO todo_tb(ID,NAME,AGE) values(2,'Shrestha',22)");

print_this($insert);


// delete after insertion
echo"<h1>Deleting Database</h1>";
$delete = mysqli_query($connection,"DELETE FROM todo_tb where ID =2");
print_this($delete);









?>