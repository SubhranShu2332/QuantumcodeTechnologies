<?php
include 'conn.php';
$name= mysqli_real_escape_string($conn,$_REQUEST['name']);
$email= $_REQUEST['email'];
$course= $_REQUEST['course'];
$qualification= $_REQUEST['qualification'];
$phone= mysqli_real_escape_string($conn,$_REQUEST['phone']);
// $address= mysqli_real_escape_string($conn,$_REQUEST['address']);
// $phone=$_REQUEST['phone'];
$address= mysqli_real_escape_string($conn,$_REQUEST['address']);
// $facilities=$_REQUEST['facility'];
//photo
$resume=$_FILES['resume'];
$photoname=$resume['name'];
$time=time();
$filename=$time.$photoname;
move_uploaded_file($resume['tmp_name'],"resume/$filename");

$my_query="INSERT INTO `placement` (`P_ID`, `name`, `email`, `course`, `qualification`, `phone`, `address`, `resume`) VALUES (NULL, '$name', '$email', '$course', '$qualification', '$phone','$address','$filename');";

$result=mysqli_query($conn,$my_query);
header('Location: index.php?message=2');
?>
