<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    function addNumbers($num1,$num2){
        return $num1+$num2;// return is storing and not printing the values. 
    }
    
    $results = addNumbers(47,21);
    echo $results."<br>";
    
    $results = addNumbers(45,$results);
    echo $results;
    ?>
    
</body>
</html>