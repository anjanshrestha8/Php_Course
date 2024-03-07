<?php 

    require"./config.php";
    
    var_dump($_POST);
    $data = $_POST['item'];


    $query =" INSERT INTO momos (name) VALUES ('$data')";
    $query_run = mysqli_query($conn,$query);
    header('location:./');

?>