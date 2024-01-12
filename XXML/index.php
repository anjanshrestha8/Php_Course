<?php
$xml = simplexml_load_file("weather.xml")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <p><?php echo $xml->location?></p>
    <p><?php echo $xml->temp?></p>
    <p><?php echo $xml->wind?></p>


   
</body>
</html>