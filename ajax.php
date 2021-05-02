<?php
include_once "config.php";

$action=$_GET['action'];
$srch=$_GET['srch'];

if($action == 'checkmail')
{
    $sql = "select uemail from userdetails where uemail = '$srch'";
    $test=mysqli_query($db,$sql);

    while($value = mysqli_fetch_object($test))
    {
        $data[] = $value;
    }

    if(isset($data))
    {
        echo "avail" ;
    }else{
        echo "not" ;
    }

}else if($action == 'getbare'){

    $sql = "SELECT brazesize FROM enameld where gaugeswg =  '$srch'";

    $test=mysqli_query($db,$sql);

    while($value = mysqli_fetch_object($test))
    {
       $val = $value->brazesize;
    }

    if(isset($val))
    {
        echo $val ;
    }else{
        echo "not" ;
    }


}