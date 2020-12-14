<?php
$file="example.txt";

if($handle=fopen($file,'r')){
    $content_file=fread($handle, 20);// 2nd parameter will be byte size.
    echo $content_file;
    fclose($handle);
}else{
    echo "Could not write";
}



?>