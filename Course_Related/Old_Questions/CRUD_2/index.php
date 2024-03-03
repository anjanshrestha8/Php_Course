<?php
    require_once"./config.php";
    echo"<br>";

    $query="SELECT * FROM php";
    $query_run=mysqli_query($conn,$query);
    $fetch=mysqli_fetch_all($query_run,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
</head>
<body>
    <!-- insertion code vako xa yeta -->
    <section>
        <h1>INSERTION</h1>
        <form action="create.php" method="POST">
            <input type="text" name="data">
            <button type="submit">INSERT</button>
        </form>
    </section>
    <!-- display ko code yeta xa la  -->
    <section>
        <h1>DISPLAYING</h1>
            <?php foreach($fetch as $value):?>
        <li>
            <?php echo $value['title']?>
            <!-- delete ko code suru garma la  -->
            <form action="delete.php" method="POST">
                <input type="hidden" name="id" value=" <?php echo $value['id'];?> ">
                <button type="submit">DELETE</button>
            </form>
            <!-- update ko nee garam na ta  -->
            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $value['id']?>">
                <button type="submit">UPDATE</button>
            </form>
        </li>

             <?php endforeach ?>  <!-- end of for each loop-->
    </section>

    
</body>
</html>