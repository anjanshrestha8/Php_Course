<!-- CURD Operation -->
<?php

    require_once"config.php";

    $read="SELECT * FROM quotes";
    $result=mysqli_query($conn,$read);
    $fetch = mysqli_fetch_all($result,MYSQLI_ASSOC);
   

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
        <h1>CURD Operation!!!!!!</h1>
    </section>

    <section>
        <form action="create.php" method="post">
            <input type="text" name="quote" require autocomplete="quote">
            <button type="submit">Save</button>
        </form>
    </section>

    <section>
     <ul>
        <?php foreach($fetch as $value['Name']):?>

            <?php
                echo "values".$value['Name'];    
            ?>

       <?php endforeach?>
     </ul>
    </section>
    
</body>
</html>