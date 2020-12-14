<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!-- variables-->
    <?php 
    
$firstName ="Venkatesh";// This is a variable used to store something. " is for string
$age=20;
$address ="India";
$lastName ="Kamath";
// Display my age
echo "<h2>My name is $firstName</h2>";/*Html is or can be written inside the php string just like above*/
echo "Age is <h1>$age</h1>";
echo "My name is $firstName and my age is $age and I live in $address";
    
//Conactenation which means combination 
// we use . for concating

echo $firstName.$lastName."  ".$age;//concatenation
    
    
    ?>   

    
</body>
</html>