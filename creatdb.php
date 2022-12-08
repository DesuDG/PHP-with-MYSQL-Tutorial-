<?php
require "connection.php";
$sql="create database db";
if(mysqli_query($conn,$sql)){
  echo "database is created succcessfully!";
}else {
  echo "error creating databse".mysqli_error($conn);
}
mysqli_close($conn);
?>