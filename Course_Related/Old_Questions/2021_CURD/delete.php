<?php
    require_once"config.php";

if(isset($_POST['delete'])){
    $var=$_POST['id'];
    
}
    
    $query="DELETE FROM todo_tb where ID ='$var'";
    $sql=mysqli_query($conn,$query);
    if(!$sql){
        die('errror aako xa');
    }
    else{
        header("Location:\.");
    }
?>