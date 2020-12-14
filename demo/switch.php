<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    //switch statements is used  like decision statements  checks for cases else prints default
    $someNumber = 9;
switch($someNumber){
    case 1:
        echo "Monday";
        break; // break is important to terminate the state.
    case 2:
        echo "Tuesday";
        break;
    case 9:
        echo "Sunday<br>";
        break;
    default:
        echo"Not found";
    // syntax is case $someNumber -> depends on the value of some number.
}

        $number = 19;
switch($number){
    case 1:
        echo "Monday";
        break; // break is important to terminate the state.
    case 2:
        echo "Tuesday";
        break;
    case 9:
        echo "Sunday";
        break;
    default:
        echo"Not found";
    // syntax is case $someNumber -> depends on the value of some number.
}
    ?>
    
</body>
</html>