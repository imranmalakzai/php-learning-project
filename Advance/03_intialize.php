<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <?php

  if (isset($_POST["submit"])) {
    $name = htmlspecialchars($_POST["name"]);
    $age = htmlspecialchars($_POST["age"]);
    echo "Your name is : $name <br />
          Your age is : $age";
  }
  ?>





  <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="age" placeholder="age">
    <input type="submit" name="submit">
  </form>

</head>

<body>

</body>

</html>