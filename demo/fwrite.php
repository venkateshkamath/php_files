<?php
$file="example.txt";

if($handle=fopen($file,'w')){
    fwrite($handle,'Good Morning........!');
    fclose($handle);
}else{
    echo "Could not write";
}



?>