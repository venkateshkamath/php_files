<?php
if(isset($_POST['submit'])){
   $username=$_POST['username'];// from the name ="username"

    $password =$_POST['password'];// from the name ="password";
    // echo it out the name stores the values 
    
    
    $connection = mysqli_connect('localhost','root','root','loginapp');// the arguments are the servername, username, password, and also the tableName
        if($connection){
            echo " We are successfully connected";
        }
    else{
        die("Database connection failed"); // It is a function to throw errors
    }
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
  <form action="login.php" method="post">
   <div class="container">
       <div class="col-sm-6">
          <label for="username">Username</label>
           <input type="text" class="form-control" name="username">
           
       </div>
       <div class="col-sm-6">
          <label for="password">Password</label>
           <input type="password" class="form-control" name="password">
           
       </div>
       
       <br>
       <input class="btn btn-primary" type="submit" value="Submit" name="submit">
   </div>
    </form>
    </body>
</html>
