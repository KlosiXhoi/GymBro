<?php
$email = $_POST['email'];
$password = $_POST['psw'];
$username = $_POST['username'];

 include_once 'Connect.php';

 $sql = "INSERT INTO user( username, email, psw) VALUES ('$username','$email','$password')";
 

 mysqli_query($conn,"INSERT INTO user SET username='$username', email='$email', psw='$password'")
or die(mysqli_error()); 

header("Location: HPGym.html"); 
    
?>
