<?php
include "db.php";
include "functions.php";// getting functions from file

?>

<?php
if(isset($_POST['submit'])){
  
     UpdateTable();  
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
<form action="login_update.php" method="post">
   <div class="container">
       <div class="col-sm-6">
          <label for="username">Username</label>
           <input type="text" class="form-control" name="username">
           
       </div>
       <div class="col-sm-6">
          <label for="password">Password</label>
           <input type="password" class="form-control" name="password">
           
       </div>
       
       <div class="form-group" >
           <select name="id" style="margin-top:20px; outline:none" id="">
             <?php
            showAllData();
       
                 
              
            
            ?>    
           </select>
       
       </div>
       
       <br>
       <input class="btn btn-primary" type="submit" value="UPDATE" name="submit">
   </div>
    </form>
 
    </body>
</html>
 