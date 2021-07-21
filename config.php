<?php

$dbhost='localhost';
$dbname='spark';
$dbusername='root';
$dbpass='';
$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>
