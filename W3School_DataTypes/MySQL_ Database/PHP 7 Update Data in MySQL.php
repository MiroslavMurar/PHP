<?php
$servername = "database";
$username = "root";
$password = "pass";
$dbname = "Skuska001";
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {die ("Invalid to connect". $conn->connect_error);}

$sql = "UPDATE Skuska01 SET lastname='Svitkova' WHERE id=5";

if($conn->query($sql) === TRUE){echo "Update successfull";} else {echo "Update is not successfull". $conn->error;}

$conn->close();


?>




<?php
//$servername = "database";
//$username = "root";
//$password = "pass";
//$dbname = "myDB";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "UPDATE MyGuests SET lastname='Skuska' WHERE id=2";
//
//if ($conn->query($sql) === TRUE) {
//    echo "Record updated successfully";
//} else {
//    echo "Error updating record: " . $conn->error;
//}
//
//$conn->close();
//?><!-- -->