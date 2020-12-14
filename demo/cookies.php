
<?php
$name ="SomeRandomName";
$value=8;
$expiration = time() + (60*60*24*365);

setcookie($name,$value,$expiration);// This function takes in 3 arguments $name, the header. $value, the value, $expiratiin, the time of expiry
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    //To check whether cookie is submitted or not.$_COOKIE stores the array of cookies
if(isset($_COOKIE['SomeRandomName']))// $name becomes the key of the cookie that displays a value.
{
    $someOne = $_COOKIE['SomeRandomName'];
    echo $someOne;
    
}else{
   die("Error");
}
    ?>
    
</body>
</html>