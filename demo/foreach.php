<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>foreach loops</title>
</head>
<body>
   <?php
    $numberArray =[1023,56,8,9,9,7,8,75,6565,4,5];
    foreach($numberArray as $eachnumber){
        echo $eachnumber."<br>";// here each number is going to take the individual value.
    }
    
    ?>
    
</body>
</html>