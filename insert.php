<?php
require "connection.php";
$sql="insert into student (fname,lname, sex) values ('Desye','Getnet','Male')";

if(mysqli_query($conn,$sql)){
  echo "data is inserted succcessfully!";
}else {
  echo "error insetting data!".mysqli_error($conn);
}
mysqli_close($conn);
?>