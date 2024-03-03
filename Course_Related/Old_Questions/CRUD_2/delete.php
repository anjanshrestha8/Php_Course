<?php
    require_once"config.php";

    $id=$_POST['id'];
    $query="DELETE FROM php WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if(!$query_run){
        die(mysqli_error());
    }
    else{
        header("Location:./");
    }


?>