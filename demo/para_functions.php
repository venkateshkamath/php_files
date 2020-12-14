<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    // Passing parameters to the functions are very important it helps for the overall understanding.
    
    function greeting($message){
        echo $message;// here the message takes the value of arguemenrt passed down below.
    }
    
    greeting("Good Morning");
    ?>
    <?php
    // add numbers with 2 paramets
    function addNumbers($num1,$num2){
        echo $num1+$num2;
    }
    
    addNumbers(12,12);
    ?>
    
    <?php
    function cube($number){
    $result =$number*$number*$number;
        echo $result;
    }
    cube(3);// can  pass multiple paramets if needed.
    ?>
    
</body>
</html>