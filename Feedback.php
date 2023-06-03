<?php
$ftype = $_POST['type'];
$content = $_POST['message'];

 include_once 'Connect.php';

 $sql = "INSERT INTO feedback( ftype, content) VALUES ('$ftype','$content')";
 

 mysqli_query($conn,"INSERT INTO feedback SET ftype='$ftype', content='$content'")
or die(mysqli_error()); 

header("Location: HPGym.html"); 
    
?>
