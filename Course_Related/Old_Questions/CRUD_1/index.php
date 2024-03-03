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
    <title>CRUD Using php</title>
</head>
<body>
    <!-- title -->
    <section>
        <h1>CRUD application using php::::</h1>
    </section>
<!-- create -->
    <section>
        <form action="create.php
        " method="POST">
            <input type="text" name="data">
            <button type="submit">CREATE</button>
        </form>
    </section>
<!-- output -->
    <section>
       
            <?php foreach($fetch as $value):?>
                <li><?php
                        echo $value['id']."------->";
                        echo $value['title']."------->";
                        echo $value['created_at']."------->";
                        echo $value['updated_at']."------->";
                    ?>
<!-- delete -->
                    <form action="delete.php"method="POST">
                        <input type="hidden" name="id" value="<?php echo $value['id'];?>">
                        <button type="submit">DELETE</button>

                    </form>
<!-- updated -->
                    <form action="" method="">
                        <input type="hidden" name="id" value="<?php echo $value['id']?>" >
                        <button type="submit">UPDATE</button>
                    </form>
                </li>
            <?php endforeach ?>
      
    </section>
    
</body>
</html>