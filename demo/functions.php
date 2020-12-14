<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Functions</title>
</head>
<body>
<?php
    // functions are powerful to repeat the code.
    function say_Something(){
        echo "Hi there, how are you?<br>";
    addsum();
    multiply();
        
    }
    say_Something();
    
    
    // functions inside the above function.
    
    function multiply(){
        echo 10*2;
    }
    function addsum(){
        echo 12+235;
        echo "<br>";
    }
    ?>
</body>
</html>