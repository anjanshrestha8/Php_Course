<?php

require_once "./config.php";

$sql = "select * from quotes";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QUOTE</title>
</head>

<body>
  <section title="header">
    <h1>Welcome to hell!</h1>
  </section>
  <section>
    <form action="/create-quote.php" method="post">
      <input type="text" name="quote" require autocomplete="quote">
      <button type="submit">Save</button>
    </form>
  </section>

  <section>
    <ul>
      <?php
      foreach ($rows as $value) {
        echo "<li>" . $value['title']  ."</li>";
      }
      ?>

      <?php foreach ($rows as $value) : ?>
      <!-- <li>
          <span><?= $value['title'] ?></span>
          <form action="/" method="get">
            <button type="submit">delete</button>
          </form>
        </li> -->
      <?php endforeach ?>

    </ul>
  </section>
</body>

</html>