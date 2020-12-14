<?php
include "db.php"; 
include "functions.php";
if(isset($_POST['submit'])){
createTable();// name goes in post
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
  <form action="login_create.php" method="post">
   <div class="container">
      <h1 class="text-center">CREATE</h1>
       <div class="col-sm-6" "text-center">
          <label for="username">Username</label>
           <input type="text" class="form-control" name="username">
           
       </div>
       <div class="col-sm-6">
          <label for="password">Password</label>
           <input type="password" class="form-control" name="password">
           
       </div>
       
       <br>
       <input class="btn btn-primary" type="submit" value="CREATE" name="submit">
   </div>
    </form>
    </body>
</html>
