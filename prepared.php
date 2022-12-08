<?php
require "connectdb.php";

// prepare and bind
$sql="INSERT INTO student (fname, lname, sex) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $fname, $lname, $sex);

// set parameters and execute
$fname = "Abigiya";
$lname = "Desye";
$sex = "Female";
$stmt->execute();

$fname = "Bezaleel ";
$lname = "Esayas";
$sex = "male";
$stmt->execute();

$fname = "Esayas ";
$lname = "Molla";
$sex = "male";
$stmt->execute();



echo "New records inserted successfully";

$stmt->close();

mysqli_close($conn);
?>