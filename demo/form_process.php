<?php
// The info from form_external.php actioned to form_process.php and is validated
if(isset($_POST["submitted"])){
  $username = $_POST['name'];//here the name is the stored value in the name in the form.
 $password = $_POST['password'];//here the password is the stored value in the name="password" in the form.
    $min=5;
    $max=10;
$names =["Mohan","Ashwin","Raghav","Ram","James","Abdul","Mohad","Abeek","Maria"];
//Validating or Authentication
if(strlen($username)<$min){
    echo "The username is small<br>";// Checks for the min
}
if(strlen($username)>$max){
    echo "The username is too large";// Checks for the maximum
}
//Array validation
if(!in_array($username,$names)){
    // Read as $username in_array $names . Here we did the not in_array using !
    echo "Sorry {$username}, you are not allowed!";
    
}else{
    
    echo "Hi Welcome {$username}";
}
    
}

?>

