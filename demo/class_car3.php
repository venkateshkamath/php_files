<?php
// class keyword and name of the class in caps
class Car{
    // create properties
    var $wheels=4;
    var $hood =1;
    var $engine=1;
    var $doors=4;
    function MoveWheels(){
        $this->wheels=10;
    }
    function CreateDoors(){
        $this->doors=2;
    }
    
    
}
// Instantiating or using the class
$toyota = new Car();// assigning new class
$toyota->MoveWheels();

echo $toyota->wheels;// properties
echo "<br>";
echo $toyota->wheels=44;// assignment here is also possible
$truck = new Car();
echo "<br>";
echo $truck->doors;
echo "<br>";
$truck->CreateDoors();
echo $truck->doors;
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