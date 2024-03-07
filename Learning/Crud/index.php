<?php
 require"./config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <section>
            <form action="./add-momo.php" method="POST">
                <input type="text" name="item" id="">
                <button type="submit"> ADD🛒 </button>
            </form>
        </section>
        <ul>
            <?php
                    foreach($rows as $values){
                        echo"<li>{$values['name']}</li>";
                }
            ?>

        </ul>
    </main>
    
</body>
</html>