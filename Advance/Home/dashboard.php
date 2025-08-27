<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <?php
  session_start();

  if (isset($_SESSION["username"])) {
    echo 'Welcome:' . $_SESSION["username"];
    echo "<br />";
    echo '<a href="/php-learning-project/advance/Home/logout.php">Logout</a>';
  } else {
    echo "welcome GUEST";
  }
  echo "<a href='/php-learning-project/advance/sessions.php'>Home</a> <br />";
  ?>


</body>

</html>