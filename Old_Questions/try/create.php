<?php

require_once"config.php";
$value=$_POST['data'];

$query="INSERT INTO php (title) values('$value')";
$query_run=mysqli_query($conn,$query);

if(!$query_run){
    die(mysqli_error());
}
else{
    header("Location:./");
    
}
?>