<?php

$db=mysqli_connect("localhost","root","","kgk");

if ($db->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
  }

?>