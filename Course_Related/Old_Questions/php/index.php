<?php 
    require_once"config.php";
    $query="SELECT * FROM php";
    $query_run=mysqli_query($conn,$query);

    $fetch=mysqli_fetch_all($query_run,MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
</head>
<body>
    <!-- create -->
    <section> 
            <form action="create.php" method="POST">
                <input type="text" name="data">
                <button type="submit">create</button>
            </form>
    </section>

     <!-- read -->
     <section> 
       <?php foreach($fetch as $value):?>
       <li>
        <?php echo $value['title'];?>
        <!-- DELETE -->
            <form action="delete.php" method="POST">
                <input type="hidden" name="tar" value="<?php echo$value['id'];?>">
                <button type="submit">delete</button>
            </form>
            <!-- UPDATE -->
            <form action="update.php" method="POST">
                <input type="hidden" name="tar">

                <button type="submit">update</button>
            </form>
       </li>
       <?php endforeach?>

            
    </section>
    
    
</body>
</html>