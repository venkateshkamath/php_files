<?php 
$connection = mysqli_connect('localhost','root','root','loginapp');// the arguments are the servername, username, password, and also the DatabseName
        if(!$connection){
        die("Database connection failed"); // It is a function to throw errors
    }

?>