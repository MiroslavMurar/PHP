<?php
$servername = "database";
$username = "root";
$password = "pass";
$dbname = "Skuska001";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {die ("Invalid to connect: ". $conn->connect_error);}

$sql = "CREATE TABLE Skuska01 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR (30) NOT NULL,
lastname VARCHAR(30) NOT NULL, 
email VARCHAR(50),
red_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
)";




if ($conn->query($sql) === TRUE ) {echo "Table created !!!";}else {echo "Table is NOT Created ". $conn->error;}

$conn->close();



?>
<!---->
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
//// sql to create table
//$sql = "CREATE TABLE MyGuests (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)";
//
//if ($conn->query($sql) === TRUE) {
//    echo "Table MyGuests created successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}
//
//$conn->close();
//?><!-- -->