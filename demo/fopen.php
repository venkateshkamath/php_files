<?php 
$file ="example.txt";// Naming the file
$handle =fopen($file,'w');//fopen is used to open the file, takes 2 args 1st name of the file, 2nd permission
fclose($handle);

?>