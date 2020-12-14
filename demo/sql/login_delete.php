<?php
include "db.php";
include "functions.php";// getting functions from file

?>

<?php
if(isset($_POST['submit'])){
  
     DeleteTable();  
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<form action="login_delete.php" method="post">
   <div class="container">
    <h1>SELECT THE ID YOU WANT TO DELETE</h1>
       
       <div class="form-group" >
           <select name="id" id="">
             <?php
            showAllData();
        ?>    
           </select>
       
       </div>
       
       <br>
       <input class="btn btn-primary" type="submit" value="DELETE" name="submit">
   </div>
    </form>
 
    </body>
</html>
 