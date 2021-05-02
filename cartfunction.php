<?php

include_once "config.php";

$action=$_GET['action'];
$tbl=$_GET['tbl'];
$oid=$_GET['oid'];

if($action == "place"){
$sql="update $tbl set flag = 1 where id = $oid ";

$test=mysqli_query($db,$sql);
if($test){
    echo "success";
}}
else if($action == "remove"){
    $sql="delete from $tbl where id = $oid ";
    
    $test=mysqli_query($db,$sql);
    if($test){
    echo "success";
    }}


?>
