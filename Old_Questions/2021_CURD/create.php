<?php
    require_once"./config.php";
    $id=4;
    $age=25;

    $values= $_POST['data'];
    $query = "INSERT INTO todo_tb(ID,NAME,AGE) values($id,'$values',$age)";
    $sql=mysqli_query($conn,$query);

    if(!$sql){
        die('smoething went wrong');
    }
    else{
        header("Location:./");
    }
    

?>