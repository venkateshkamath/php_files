<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
    <?php 
    // usinng square brackets.
    $arrayList = [25,36,41,55,"String","<h4>Hello</h4>"];
    echo $arrayList[0];
    echo $arrayList[1];// array elements are accessed using their indexes starting from 0
    echo $arrayList[5];
    // To print together we use print_r
   ;
    print_r($arrayList);// print_r takes only one argument. Here it prints the structures
    
    ?>
    
</body>
</html>