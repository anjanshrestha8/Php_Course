<?php
$xml = simplexml_load_file("weather.xml");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
</head>

<body>
  <p> <span><?php echo $xml->location; ?></span></p>
  <p> <span><?php echo $xml->wind; ?></span></p>
  <p> <span><?php echo $xml->temp; ?></span></p>
</body>

</html>