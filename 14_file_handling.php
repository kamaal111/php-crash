<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';

if (file_exists($file)) {
  // echo readfile($file);
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents_array = ['Kamaal', 'Brad', 'Sara', 'Mike'];
  $contents_array_length = count($contents_array);
  $contents = '';
  foreach ($contents_array as $index => $name) {
    $contents .=  $name;
    if ($index < ($contents_array_length - 1)) {
      $contents .= PHP_EOL;
    }
  }
  fwrite($handle, $contents);
  fclose($handle);

  echo $contents;
}
