<?php
include_once "config.php";
session_start();
$brnd=$_GET['brnd'];
$qty=$_GET['qty'];
$type=$_GET['type'];
$flag=$_GET['flag'];
$size = $_GET['size'];
$uid=$_SESSION['u_id'];

$sql="INSERT INTO `submersibleorder`(`type`, `size`, `brand`, `qty`, `flag`, `uid`) VALUES ('$type','$size','$brnd','$qty','$flag','$uid' )";

$test=mysqli_query($db,$sql);
if($test){
echo "success";
}
?>