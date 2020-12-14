<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php  
    // regular array 
    $array =[28,'hello','good morning',444];
    print_r($array);
    echo "<br>";
    // an associative array that mainly cosists of key calue using symbol '=>'
    $array2 =["first_name"=>"Venkatesh","last_name"=>"Kamath","age"=>20];
    //total print
    print_r($array2);
    echo "<br>";
    /// total printing
    echo $array2['first_name'] ." ".$array2['last_name']. ' age is '. $array2['age'];
    //Very easy to identify since since index can get the value
    
    
    
    ?>
</body>
</html>