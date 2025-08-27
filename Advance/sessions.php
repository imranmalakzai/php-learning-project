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
  if (isset($_POST["submit"])) {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    if ($username === "imran" && "imran@123") {
      echo $username;
      echo $password;
      $_SESSION['username'] = $username;
      header('location: /php-learning-project/Advance/Home/dashboard.php');
    } else {
      echo "unauthorize loggin!!!";
    }
  }


  ?>
  <form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" placeholder="username">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="password">
    <input type="submit" name="submit">
  </form>

</body>

</html>