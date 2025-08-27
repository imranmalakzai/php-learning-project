<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  if (isset($_POST["submit"])) {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    setcookie('Email', $email);
  }

  if (isset($_COOKIE["Email"])) {
    echo $_COOKIE["Email"];
  }

  ?>



  <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" name="submit">
  </form>

</body>

</html>