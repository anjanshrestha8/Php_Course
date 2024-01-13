<?php
require_once"config.php";

$id=$_POST['id'];
$query = "Select * FROM todo_tb where id='$id'";
$query_run=mysqli_query($conn,$query);

$result=mysqli_fetch_all($query_run,MYSQLI_ASSOC);
if(!$result){
    die(mysqli_connect_error());
}
else{
  echo"<pre>";
  print_r($result['NAME']);
  echo"</pre>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="">
        <input type="text" value="<?php $result['NAME']?>">
    </form>
    
</body>
</html>