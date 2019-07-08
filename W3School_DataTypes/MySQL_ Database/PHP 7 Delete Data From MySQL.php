<?php
$servername = "database";
$username = "root";
$password = "pass";
$dbname = "Skuska001";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){die ("Invalid to connect". $conn->connect_error);}

$sql = "DELETE FROM Skuska01 WHERE id = 6";

if($conn->query($sql) === TRUE) {echo "Delete successfull";}else{echo"Delete is NOT successfull".$conn->error;}

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
//// sql to delete a record
//$sql = "DELETE FROM MyGuests WHERE id=3";
//
//if ($conn->query($sql) === TRUE) {
//    echo "Record deleted successfully";
//} else {
//    echo "Error deleting record: " . $conn->error;
//}
//
//$conn->close();
//?><!-- -->