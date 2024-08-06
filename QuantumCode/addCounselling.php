<?php
include 'conn.php';
$name= mysqli_real_escape_string($conn,$_REQUEST['name']);
$email= $_REQUEST['email'];
$phone= mysqli_real_escape_string($conn,$_REQUEST['phone']);
$address= mysqli_real_escape_string($conn,$_REQUEST['address']);
// $facilities=$_REQUEST['facility'];
//photo
// $resume=$_FILES['resume'];
// $photoname=$resume['name'];
// $time=time();
// $filename=$time.$photoname;
// move_uploaded_file($resume['tmp_name'],"resumeF/$filename");

$my_query="INSERT INTO `Counselling` (`Counselling_ID`, `name`, `email`,`phone`, `address`) VALUES (NULL, '$name', '$email', '$phone','$address');";

$result=mysqli_query($conn,$my_query);
header('Location: index.php?message=2');
?>
