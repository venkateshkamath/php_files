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
/*Inheritance*/
/* class child extends parent, that means child gets  all the props and methods of the parents*/
class Plane extends Car{
    var $wheels=14;
}
$jet = new Plane();
$jet->MoveWheels();// calling the method in Car use it for child;
echo $jet->wheels;

$superjet = new Plane();
echo "<br>";
echo "<br>";
echo $superjet->wheels;// Override















//if(class_exists("Plane")){
//    echo "exists";
//}





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