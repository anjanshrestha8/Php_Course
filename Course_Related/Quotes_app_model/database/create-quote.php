<?php

require_once "./config.php";

# after form subbmission, they will be here

$value = $_POST['quote'];

$sql = "insert into quotes (title) values ('$value')";
$result = mysqli_query($conn, $sql);
if (!$result) {
  die('something went wrong');
} else {
  header("Location: /");
}
