<!-- File handling in php -->

<?php

$file = "text.txt";

if (file_exists($file)) {
  echo readfile($file);
} else {
  echo "File not exist";
}

?>