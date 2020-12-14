<?php
print_r($_GET);// superGlobal GET
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    // USED to get url on the ip address bar. $_GET. anchor tag a is used to give the link
    /***DYNAMICALLY RENDER**/
    $value=10;
    $button ="CLICK HERE";
   
    ?>
    <a href="get.php?id=<?php echo $value ?>"><?php echo $button ?></a><!--echo it out to the screen after click here, so because of get it goes on the bar-->
</body>
</html>