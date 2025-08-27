<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if (isset($_GET["submit"])) {
    echo $_GET["name"];
    echo $_GET["age"];
  }
  ?>


  <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
    <div>
      <label for="name">
        <input type="text" id="name" name="name" placeholder="name">
      </label>
    </div>
    <div>
      <label for="age">
        <input type="text" id="age" name="age" placeholder="age">
      </label>
    </div>
    <input type="submit" name="submit">

  </form>


</body>

</html>