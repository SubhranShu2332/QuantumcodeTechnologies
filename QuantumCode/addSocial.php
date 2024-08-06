<?php
include 'conn.php';
$name= mysqli_real_escape_string($conn,$_REQUEST['name']);
$email= $_REQUEST['email'];
$clgname= $_REQUEST['clgname'];
$qualification= $_REQUEST['qualification'];
$courseApplied= mysqli_real_escape_string($conn,$_REQUEST['courseApplied']);
$phone= mysqli_real_escape_string($conn,$_REQUEST['phone']);
$address= mysqli_real_escape_string($conn,$_REQUEST['address']);
// $facilities=$_REQUEST['facility'];
//photo
$resume=$_FILES['resume'];
$photoname=$resume['name'];
$time=time();
$resumeName=$time.$photoname;
move_uploaded_file($resume['tmp_name'],"resumeF/$resumeName");

$caste=$_FILES['caste'];
$photoname=$caste['name'];
$time=time();
$casteName=$time.$photoname;
move_uploaded_file($caste['tmp_name'],"caste/$casteName");

$income=$_FILES['income'];
$photoname=$income['name'];
$time=time();
$incomeName=$time.$photoname;
move_uploaded_file($income['tmp_name'],"income/$incomeName");

$my_query="INSERT INTO `Social` (`Soc_ID`, `name`, `email`, `clgname`, `qualification`,`courseApplied`, `phone`, `address`, `resume`, `caste`, `income`) VALUES (NULL, '$name', '$email', '$clgname', '$qualification','$courseApplied', '$phone','$address','$resumeName','$casteName','$incomeName');";

$result=mysqli_query($conn,$my_query);
header('Location: index.php?message=1');
?>
