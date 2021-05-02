<?php
require_once "config.php";
session_start();

$action = $_GET['action'];
$tbl = $_GET['tbl'];

// $srch = "pad";
if($action == "getsize"){
$sql = "SELECT * FROM `$tbl`";

$dd = mysqli_query($db,$sql);     
// $data = array();
while($value = mysqli_fetch_object($dd))
{
    $data[] = $value->size;
    
}

if(isset($data))
{
echo json_encode($data);
// echo json_encode($test);
// echo $sql;
}else{
    echo "false" ;
    // echo $sql;
}}
?>