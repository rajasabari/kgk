<?php
include_once "config.php";
session_start();

$uname=$_GET['lemail'];
$upass=$_GET['lpass'];
$id = 0;

$sql="select id from userdetails where uemail = '$uname' and upass = '$upass' ";

$test=mysqli_query($db,$sql);

while($value = mysqli_fetch_object($test))
{
   $id = $value;
}

if($id->id != 0)
{
$_SESSION['u_id']=$id->id;
echo 'successs';
}else{
    echo 'notfound';
}



?>