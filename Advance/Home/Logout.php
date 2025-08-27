<?php

session_start();
session_destroy();

echo "logout successfully";
header("location: /php-learning-project/Advance/Home/dashboard.php");
// header('location: /php-learning-project/Advance/Home/dashboard.php');
