<?php
require "connection.php";

$sql = "UPDATE student SET lname='Get' WHERE id=1";

if(mysqli_query($conn,$sql)){
  echo "data is updated succcessfully!";
}else {
  echo "error updating data!".mysqli_error($conn);
}
mysqli_close($conn);
?>