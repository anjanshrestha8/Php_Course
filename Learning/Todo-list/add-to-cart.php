<?php
session_start();

$item =$_POST['shopping'];

//  how to set the data in session
if(isset($_SESSION['list'])){
    array_push($_SESSION['list'],$item);
}
else{
    $_SESSION['list']=[$item];
}
//  how to get the data from the session
header("Location:/");

