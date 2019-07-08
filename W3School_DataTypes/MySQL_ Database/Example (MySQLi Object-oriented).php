<?php
$servername = "database";
$username = "root";
$password = "pass";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {die ("Fail to connect".$conn->connect_error);}

$sql = "CREATE DATABASE Skuska001";

if($conn->query($sql) === True) {echo "Database created ";}
else {echo "Database is NOT created";}

$conn->close();
?>




<?php
//$servername = "database";
//$username = "root";
//$password = "pass";
//
//
//// Create connection
//$conn = new mysqli($servername, $username, $password);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//// Create database
//$sql = "CREATE DATABASE myDB";
//if ($conn->query($sql) === TRUE) {
//    echo "Database created successfully";
//} else {
//    echo "Error creating database: " . $conn->error;
//}
//
//$conn->close();
//?><!-- -->