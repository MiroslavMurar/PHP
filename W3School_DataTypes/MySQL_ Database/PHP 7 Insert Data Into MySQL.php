<?php
$servername = "database";
$username = "root";
$password = "pass";
$dbname = "Skuska001";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {die ("Invalid to connect: ". $conn->connect_error);}

$sql = "INSERT INTO Skuska01 (firstname, lastname, email) VALUES ('John', 'Doe', 'doe@gmail.com')";

if($conn->query($sql) === TRUE ) {echo "Record inserted !!!";} else {echo "Record is NOT inserted".$conn->error;}

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
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";
//
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();
//?><!-- -->