<?php
include_once "config.php";
session_start();
$prdname=$_GET['prdname'];
$sizess=$_GET['sizess'];
$nos=$_GET['nos'];
$flag=$_GET['flag'];
$uid=$_SESSION['u_id'];

$sql="INSERT INTO `spareorder`(`prdname`, `size`, `userid`, `flag`, `qty`)
VALUES ('$prdname','$sizess','$uid','$flag','$nos' )";

$test=mysqli_query($db,$sql);
if($test){
echo "success";
}
?>