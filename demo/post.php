
<?php
echo $_POST['name'];// Getting post on the screen.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post" action="post.php" >
        
        <input type="text" name="name">
        <input type = "submit">
        
    </form>
</body>
</html>