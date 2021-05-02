<?php
include_once "config.php";

$uname=$_GET['name'];
$email=$_GET['email'];
$mobile=$_GET['mobile'];
$password=$_GET['pass'];

$sql="INSERT INTO `userdetails`(`uname`,`uemail`,`phno`,`upass`) VALUES ('$uname','$email','$mobile','$password' )";

$test=mysqli_query($db,$sql);
if($test){
echo "success";
}
?>