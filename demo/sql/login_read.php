<?php

    
    
    $connection = mysqli_connect('localhost','root','root','loginapp');// the arguments are the servername, username, password, and also the tableName
        if($connection){
            echo " We are successfully connected";
        }
    else{
        die("Database connection failed"); // It is a function to throw errors
    }
 $query = "SELECT * FROM users";// Retrieving data from the database.
    $result=mysqli_query($connection,$query);// $connection has the connect field and $query has the user details, that means connection to query. Result is boolen
    if(!$result){
        die("SQL database not connected ".mysql_error);
    }




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
 
    </body>
</html>
 <?php 
  
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <pre>
            <?php
             print_r($row);
        ?>
        </pre>
     <?php  
    }
    
    ?>