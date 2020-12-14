<?php
// class keyword and name of the class in caps
class Car{
    function MoveWheels(){
        echo "The wheels are moving";
    }
    
    
}
// to check whether the method exists or not.
if(method_exists("Car","MoveWheels")){
    echo "Yes, the method exists";
}
else{
    echo "NO";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>