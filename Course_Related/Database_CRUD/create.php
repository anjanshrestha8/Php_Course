d<?php

require_once"./config.php";

$value = $_POST['quote'];

$sql="INSERT INTO  todo_tb(Name) values('$value')";
$result = mysqli_query($conn,$sql);
if(!$result){
    echo"ERROR HAS OCCUR!!!!!";
}
else {
    echo"CODE RUN SUCCESSFULLY!!!!!!!!";
    header("Location:/");

}

?>