<?php
// CODE STARTS HERE
    $hostname='localhost';
    $username='root';
    $password='anjanshrestha8';
    $dbname='foods';

    $conn = mysqli_connect($hostname,$username,$password,$dbname);
    echo"connection vako xa la ";

    // fetch all from database
    $query = 'Select * from momos';
    $query_run = mysqli_query($conn,$query);
    $rows = mysqli_fetch_all($query_run,MYSQLI_ASSOC);