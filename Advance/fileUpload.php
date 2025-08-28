<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>

<body>

  <?php
  if (isset($_POST["submit"])) {

    // Allowed extentions
    $ext = ["png", "jpg", "jfif"];

    if (!empty($_FILES["upload"]["name"])) {
      $filename = $_FILES["upload"]["name"];
      $filesize = $_FILES["upload"]["size"];
      $tmpname =  $_FILES["upload"]["tmp_name"];
      $target_dir = "upload/$filename";

      //get file extenstions
      $fileExt = explode(".", $filename);
      $fileExt = strtolower(end($fileExt));

      // check for the extention new
      if (in_array($fileExt, $ext)) {

        if ($filesize <= 1000000) {
          move_uploaded_file($tmpname, $target_dir);
          $message = '<p style="color:green">uploaded successfully</p>';
        } else {
          $message = '<p style="color:red">please select an image lessthen 1 mb</p>';
        }
      } else {
        $message = '<p style="color:red">Please select a valid type</p>';
      }
    } else {
      $message = '<p style="color:red">please select a file type</p>';
    }
  }
  ?>



  <?php echo $message ?? null ?>

  <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
    <label for="upload">Upload File</label>
    <input type="file" name="upload" id="upload">
    <input type="submit" name="submit">
  </form>

</body>

</html>