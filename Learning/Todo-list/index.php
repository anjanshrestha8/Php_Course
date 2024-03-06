<?php
    session_start();
    $shopping_list= $_SESSION['list'] ?? [];
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Shopping Todo List </title>
</head>
<body>
    <main>
        <h1>Lets GOO! Shopping 🛒</h1>
        <!-- Form to submit -->
      <section class="input-section">
        <form action="add-to-cart.php" method="post">
            <div>
                <input type="text" name="shopping" placeholder="aja k k kam garne!!!">
                <button type="submit">Add to cart 🛒</button>
            </div>
        </form>
      </section>
        <!-- List to display -->
        <section>
            <h4>Shopping List here 👇</h4>
            <ul>
                <?php
                    foreach ($shopping_list as $values):
                   
                ?>
                <?php
                      echo "<li type=1>{$values}</li>";
                ?>
                <form action="done.php" method="post">
                    <input type="hidden" name="id" value="<?php echo$values?>">
                    <button type="submit" class="done"> &nbsp ✅ &nbsp </button>
                    <button type="submit" class="done"> &nbsp ❌ &nbsp </button>
                </form>
                <?php
                    endforeach;
                ?>
            </ul>
        </section>
    </main>
    
</body>
</html>