<?php
require "connection.php";
$sql="delete from student where id=3";

if(mysqli_query($conn,$sql)){
  echo "data is deleted succcessfully!";
}else {
  echo "error deleting data!".mysqli_error($conn);
}
mysqli_close($conn);
?>