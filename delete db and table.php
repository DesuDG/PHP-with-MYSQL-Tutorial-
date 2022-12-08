<?php
require "connection.php";
$sql="drop database db";
if(mysqli_query($conn,$sql)){
  echo "databse is deleted succcessfully!";
}else {
  echo "error deleting database".mysqli_error($conn);
}
mysqli_close($conn);
?>