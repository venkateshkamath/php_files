<?php
session_start(); // used to start a session.
$session=$_SESSION['greeting'];// session super global variable that has assoc_array. // Reference to the 'greeting' session in session.php
echo $session;// echoing out the session from session1.
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