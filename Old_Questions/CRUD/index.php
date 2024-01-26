<?php
    require_once"config.php";
    $query = "SELECT * FROM php";
    $query_run=mysqli_query($conn,$query);
    $fetch=mysqli_fetch_all($query_run,MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam</title>
</head>
<body>
    <section>
        <h1>crud program</h1>
    </section>

    <!-- insert -->
    <section>
        <form action="create.php" method="POST">
            <input type="text" name="data">
            <button type="submit">CREATE</button>
        </form>
    </section>
    <!-- OUTPUT -->
    <section>
        <?php foreach($fetch as $value):?>
            <li><?php
                    echo $value['title'];
                ?>
            </li>
        <?php endforeach?>
       
    </section>    
</body>
</html>