<?php
include "db.php";// here $connection is from db.php, so inorder to use it we have to include db.php
// creating a function
function createTable(){
    global $connection;
       $username=$_POST['username'];// from the name ="username"

    $password =$_POST['password'];// from the name ="password";
    // echo it out the name stores the values 
    // let us sanitize or clear the details or purify so that there is no error in database.
    $username= mysqli_real_escape_string($connection,$username);// 2 para's one is $connection and the other, the sanitize variable
    $password=mysqli_real_escape_string($connection,$password);
     $hashFormat='$2y$10$';// pattern *10 with salt
    $salt="iusesomecrazystrings22";
    $hashF_and_salt=$hashFormat.$salt; //concatenate format with salt
    $password =crypt($password,$hashF_and_salt);
$query = "INSERT INTO users(username,password)"; // username and password is the name of the column in our database users. So we pass it as an argument.
$query = $query. "VALUES('$username','$password')";// Here the $username and $password are both user typed so use strings. For name of the column no strings. This should be in strings.
    $result=mysqli_query($connection,$query);// $connection has the connect field and $query has the user details, that means connection to query
   
    if(!$result){
        die("SQL database not connected ".mysql_error);
    }
    else{
        echo "Record created";
    }
}
function showAllData(){
    global $connection;// making $connection global will tell here that function is from db.php and also it should be declared here freshly. 
    $query = "SELECT * FROM users";// Retrieving data from the database.Reading the query
    $result=mysqli_query($connection,$query);// $connection has the connect field and $query has the user details, that means connection to query
    if(!$result){
        die("SQL database not connected ".mysql_error);
    }
   while($row= mysqli_fetch_assoc($result)){
                  $id= $row['id'];// fetching our the id column in the entire table. 
                   echo"<option value='$id'>{$id}</option>";
               }
    }
// pasting this will make code look cleaner.
function UpdateTable(){
    global $connection;
          $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $query = "UPDATE users SET username = '$username' , password = '$password' WHERE id=$id";// goes in SQL fashion
        $result = mysqli_query($connection , $query);
        
        if(!$result){
            die("Query failed" . mysqli_error($connection));
        }
}
function  DeleteTable(){
    global $connection;// from db.php
     $id = $_POST['id'];
        
    $query ="DELETE FROM users WHERE id=$id";// Pure SQL commands
    $result=mysqli_query($connection, $query);
    if(!$result){
        die("Query failed" . mysqli_error($connection));
    }
    
}


