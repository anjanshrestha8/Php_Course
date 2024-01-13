<?php
require_once"config.php";
$tar=$_POST['id'];

$query = "DELETE FROM php WHERE id ='$tar' ";
$query_run=mysqli_query($conn,$query);

if(!$query_run){
    die(mysqli_error());
}
else{
    header("Location:./");
    
}
?>