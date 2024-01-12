<!-- CURD OPERATION -->

<?php

require_once "./config.php";
$sql = "SELECT * FROM todo_tb";
$result=mysqli_query($conn,$sql);
$fetch = mysqli_fetch_all($result);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURD</title>
</head>
<body>
    <section>
        <h1>CURD OPERATION USING PHP</h1>
    </section>
    <!-- DATA INPUT KO LAGE -->
    <section>
    <form      method="post"  action="create.php">
        <input type="text" name="data" autocomplete="data">
        <br>
        <button type="submit">Save</button>
    </form>
    </section>

    <!-- DATA OUTPUT KO LAGE -->
    <section>

    <ul>
        <?php
            foreach($fetch as $values['NAME']):
            echo $values['NAME'];
            endforeach;
        ?>
    </ul>
    </section>
    
    
</body>
</html>