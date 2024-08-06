<?php
include 'conn.php';
$name= mysqli_real_escape_string($conn,$_REQUEST['name']);
$email= $_REQUEST['email'];
$query= mysqli_real_escape_string($conn,$_REQUEST['query']);

$my_query="INSERT INTO `Contact` (`Contact_ID`, `name`, `email`,`query`) VALUES (NULL, '$name', '$email', '$query');";

$result=mysqli_query($conn,$my_query);
header('Location: index.php?message=4');


?>