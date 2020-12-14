<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $list = [14,22,75,84,55,6,8,8898,45];
    echo min($list);
    echo "<br>";
    echo max($list);
    echo"<br>";
    sort($list);
    print_r ($list);// Sorted that is print together. print_r is a function that prints things together.
    ?>
    
</body>
</html>