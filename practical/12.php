<?php



// open the file for reading
$fileName = "extra/read.txt";
$file = fopen($fileName, 'r');

// Get the file size
$file_size = filesize($fileName);

// Read the file with file handle and length
$fileText = fread($file, $file_size);

// Close the file
fclose($file);

// Show text on screen
echo "This is the text! <br /> $fileText";
